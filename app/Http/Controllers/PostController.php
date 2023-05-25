<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\FotoPost;
use App\Models\KomentarPost;
use App\Models\LikePost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


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
        $komentars = KomentarPost::all();
        $likePosts = LikePost::all();
        return view('forum_diskusi.index', compact('posts', 'createdDates', 'komentars'));
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
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post();
        $post->judul = $request->input('judul');
        $post->isi_post = $request->input('isi_post');
        // $post->user_id = auth()->user()->;
        $post->nik = 1234567890123456;
        $post->jumlah_like =0;
        $post->save();

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('gambar'), $filename);

                $fotoPost = new FotoPost();
                $fotoPost->id_post = $post->id;
                $fotoPost->foto = $filename;
                $fotoPost->save();
            }
        }

        return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan.');
    }

    public function tambahKomentar(Request $request)
    {
        $data = $request->validate([
            'id_post' => 'required|exists:posts,id',
            'komentar' => 'required|string',
        ]);

        $komentar = new Komentar();
        $komentar->id_post = $data['id_post'];
        // $komentar->nik = $request->user()->nik; // Menggunakan nik dari user yang sedang login
        $komentar->nik = 1234567890123456;
        $komentar->isi_komentar = $data['komentar'];
        $komentar->save();

        // Lakukan tindakan lain jika diperlukan

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       //
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
