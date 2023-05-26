<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\FotoPost;
use App\Models\KomentarPost;
use App\Models\LaporPost;
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

    public function postAnda()
    {
        $posts = Post::all()->where('nik', Auth::user()->nik);
        $createdDates = $posts->map(function ($post) {
            return Carbon::parse($post->created_at);
        });
        $komentars = KomentarPost::all();
        $likePosts = LikePost::all();
        return view('forum_diskusi.index', compact('posts', 'createdDates', 'komentars'));
    }

    public function postSuka()
    {
        $likedPosts = LikePost::where('nik', Auth::user()->nik)->pluck('id_post');
        $posts = Post::whereIn('id', $likedPosts)->get();
        $createdDates = $posts->map(function ($post) {
            return Carbon::parse($post->created_at);
        });
        $komentars = KomentarPost::all();
        $likePosts = LikePost::all();
        return view('forum_diskusi.index', compact('posts', 'createdDates', 'komentars'));
    }

    public function postKomentar()
    {
        $commentedPosts = KomentarPost::where('nik', Auth::user()->nik)->pluck('id_post');
        $posts = Post::whereIn('id', $commentedPosts)->get();
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
        $post->jumlah_like = 0;
        $post->jumlah_komentar = 0;
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


    public function toggleLike($postId)
    {
        $userNik = Auth::user()->nik;

        // Periksa apakah data like_post ada berdasarkan id_post dan nik
        $liked = LikePost::where('id_post', $postId)
            ->where('nik', $userNik)
            ->exists();

        // Periksa apakah data post ada berdasarkan id_post
        $post = Post::find($postId);

        if ($liked) {
            // Jika sudah ada like, hapus like_post dan kurangi jumlah_like di tabel post
            LikePost::where('id_post', $postId)
                ->where('nik', $userNik)
                ->delete();

            $post->decrement('jumlah_like');
        } else {
            // Jika belum ada like, tambahkan like_post dan tambahkan jumlah_like di tabel post
            LikePost::create([
                'id_post' => $postId,
                'nik' => $userNik,
            ]);

            $post->increment('jumlah_like');
        }

        return redirect()->back()->withFragment('post-' . $postId);
    }


    public function addComment(Request $request)
    {
        $postId = $request->input('id_post');
        $comment = $request->input('isi_komentar');
        $userNik = Auth::user()->nik;

        // Lakukan validasi jika diperlukan

        KomentarPost::create([
            'id_post' => $postId,
            'nik' => $userNik,
            'isi_komentar' => $comment,
        ]);
        $post = Post::find($postId);
        $post->increment('jumlah_komentar');

        session()->flash("comment_success_{$post->id}", "Komentar berhasil ditambahkan.");
        return redirect()->back();
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

        // Periksa otorisasi, misalnya dengan membandingkan NIK pengguna yang masuk dengan NIK penulis postingan
        // Menghapus komentar terkait
        $post->komentarPosts()->delete();
        $post->likes()->delete();
        $post->fotoPosts()->delete();
        $post->delete();

        session()->flash("post_success", "Post berhasil dihapus.");
        return redirect()->back();
    }


    public function addLaporan(Request $request)
    {
        $postId = $request->input('id_post');
        $isi_laporan = $request->input('isi_laporan');
        $userNik = Auth::user()->nik;

        // Lakukan validasi jika diperlukan
        LaporPost::create([
            'id_post' => $postId,
            'nik' => $userNik,
            'isi_laporan' => $isi_laporan,
        ]);
        $post = Post::find($postId);

        session()->flash("post_success", "Postingan berhasil dilaporkan");
        return redirect()->back();
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
