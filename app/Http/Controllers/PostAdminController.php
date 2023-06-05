<?php

namespace App\Http\Controllers;

use App\Models\KomentarPost;
use App\Models\LaporPost;
use App\Models\LikePost;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostAdminController extends Controller
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
        return view('admin.forum_diskusi.semua-post', compact('posts', 'createdDates', 'komentars'));
    }

    public function report()
    {
        $lapor_posts = LaporPost::all();
        $postIds = $lapor_posts->pluck('id_post')->toArray();
        $posts = Post::whereIn('id', $postIds)->get();
        $komentars = KomentarPost::all();
        $likePosts = LikePost::all();

        return view('admin.forum_diskusi.report-post', compact('lapor_posts', 'posts', 'komentars'));
    }

    public function deleteComment($id)
    {
        // Temukan komentar berdasarkan ID
        $komentar = KomentarPost::find($id);
        $id_post = $komentar->id_post;
        $post = Post::find($id_post);
        if (!$komentar) {
            // Jika komentar tidak ditemukan, kembalikan respons atau lakukan tindakan yang sesuai
            session()->flash('comment_error_{$post->id}', 'Komentar tidak ditemukan.');
            return redirect()->back();
        }

        // Hapus komentar
        $komentar->delete();

        $post->decrement('jumlah_komentar');

        // Kembalikan respons atau lakukan tindakan yang sesuai setelah penghapusan komentar berhasil
        session()->flash("comment_success_{$post->id}", "Komentar berhasil dihapus.");
        return redirect()->back();
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Postingan tidak ditemukan'], 404);
        }
    
        // Hapus komentar terkait
        $post->komentarPosts()->delete();
        $post->likes()->delete();
        $post->fotoPosts()->delete();
        $post->laporPost()->delete();
        $post->delete();
    
        session()->flash("post_success", "Post berhasil dihapus.");
        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
