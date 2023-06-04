<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit()
    {
        $user = auth()->user();
        return view('warga.editprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $user = auth()->user();

    $user->nik = $request->input('nik');
    $user->nama_lengkap = $request->input('nama_lengkap');
    $user->email = $request->input('email');
    $user->telepon = $request->input('telepon');
    // Periksa jika input password tidak kosong
    if (!empty($request->input('password'))) {
        $user->password = bcrypt($request->input('password'));
    }

    $request->validate([
        'foto_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Hanya menerima file gambar dengan tipe yang diizinkan dan ukuran maksimum 2MB
    ]);

    // if ($request->hasFile('gambar')) {
    //     foreach ($request->file('gambar') as $file) {
    //         $filename = $file->getClientOriginalName();
    //         $file->move(public_path('gambar'), $filename);

    //         $fotoPost = new FotoPost();
    //         $fotoPost->id_post = $post->id;
    //         $fotoPost->foto = $filename;
    //         $fotoPost->save();
    //     }
    // }

    if ($request->hasFile('foto_profil')) {
        $file = $request->file('foto_profil');

        // Validasi hanya satu file yang diizinkan
        if ($file->isValid()) {
            $filename = $file->getClientOriginalName();
            $file->move(public_path('foto_profile'), $filename);
            $data['foto_profil'] = $filename;
        } else {
            return redirect()->back()->withErrors(['foto_profil' => 'Inputan Anda salah. Hanya satu file gambar yang diizinkan.']);
        }
    }

    $user->update($data);

    Session::flash('success', 'Profil berhasil diubah.');

    return redirect()->route('profile.edit');
}





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
