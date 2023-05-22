<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\FotoPost;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $createdDates = $posts->map(function ($post) {
            return Carbon::parse($post->created_at);
        });
        return view('forum_diskusi.index', compact('posts', 'createdDates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi_post' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Membuat post baru
        $post = new Post;
        $post->judul = $request->judul;
        $post->isi_post = $request->isi_post;
        $post->nik = 1234567890123456;
        $post->jumlah_like = 0;
        $post->save();
    
        // Menyimpan gambar ke tabel foto_post
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/img_upload_post');
    
            $fotoPost = new FotoPost;
            $fotoPost->id_post = $post->id;
            $fotoPost->foto = $gambarPath;
            $fotoPost->save();
        }
    
        return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        
        return view('forum_diskusi.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
