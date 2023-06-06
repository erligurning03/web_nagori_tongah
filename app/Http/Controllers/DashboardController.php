<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\FotoBerita;
use App\Models\Post;
use App\Models\FotoPost;
use App\Models\Pengajuan;
use App\Models\Persyaratan;
use App\Models\Suket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestPost = Post::latest()->first();

        $latestPhoto = null;
        if ($latestPost) {
            $latestPhoto = FotoPost::where('id_post', $latestPost->id)
                ->latest()
                ->first();
        }

        $latestBerita = Berita::latest()->first();

        $latestPhotoBerita = null;
        if ($latestBerita) {
            $latestPhotoBerita = FotoBerita::where('id_berita', $latestBerita->id)
                ->latest()
                ->first();
        }

        return view('dashboard', compact('latestPost', 'latestPhoto', 'latestBerita', 'latestPhotoBerita'));
    }

    public function indexAdmin()
    {
        $persyaratan = Persyaratan::all();
        $pengajuan = Pengajuan::orderBy('status_pengajuan', 'desc')
        ->where('status_pengajuan', 'menunggu')
        ->get();
        $users = User::where('role', 'warga')->where('status_akun', 'menunggu')->get();;
        return view('admin.index',  compact('pengajuan', 'persyaratan', 'users' ));
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
