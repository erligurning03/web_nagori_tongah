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

        $validatedData = $request->validate([
            'nik' => 'required|numeric',
            'nama_lengkap' => 'required|regex:/^[a-zA-Z\s]+$/',
            'username' => 'required|max:16|unique:user,username,'.$user->nik.',nik',
            'email' => 'required|email|unique:user,email,'.$user->nik.',nik',
            'telepon' => ['required', 'regex:/^(\+62|0)[0-9]{1,15}$/'],
            'foto_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Hanya menerima file gambar dengan tipe yang diizinkan dan ukuran maksimum 2MB
        ],
        [
            'nama_lengkap.regex' => 'Nama hanya boleh terdiri dari huruf.',
            'email.email' => 'Email harus dalam format email.',
            'telepon.regex' => 'Telepon harus dimulai dengan +62 atau 0 dan hanya boleh berisi angka.',
            'username.unique' => 'Username sudah ada.',
            'email.unique' => 'Email sudah ada.',
        ]);

        $user->nik = $validatedData['nik'];
        $user->nama_lengkap = $validatedData['nama_lengkap'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->telepon = $validatedData['telepon'];

        $telepon = $validatedData['telepon'];
        if (!preg_match('/^(\+62|0)[0-9]{1,15}$/', $telepon)) {
            // Tindakan yang diperlukan jika tidak sesuai dengan pola
            return redirect()->back()->withErrors(['telepon' => 'Format telepon tidak valid.']);
        }

        // Cek apakah ada file foto_profil dalam permintaan
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');

            // Validasi hanya satu file yang diizinkan
            if ($file->isValid()) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('img/foto_profile'), $filename);
                $user->foto_profil = $filename;
            } else {
                return redirect()->back()->withErrors(['foto_profil' => 'Inputan Anda salah. Hanya satu file gambar yang diizinkan.']);
            }
        }

        $user->save();

        Session::flash('success', 'Profil berhasil diubah.');

        return redirect()->route('profile.edit');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
                'password_lama' => 'required|string',
                'password' => 'required|string|min:6|confirmed'
            ]);
    
        $user = Auth::user();
        $password_lama = $request->input('password_lama');
        
        if (Hash::check($password_lama, $user->password)) {
            if ($password_lama == $request->input('password')) {
                return redirect()->back()->with('error', 'Maaf, password yang Anda masukkan sama!');
            } 
            else {
                $user->password = Hash::make($request->input('password'));
                $user->save();
                return redirect()->back()->with('success', 'Password Anda berhasil diperbarui!');
            }
        }

        return redirect()->back()->with('error', 'Tolong masukkan password lama Anda dengan benar!');
        
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
