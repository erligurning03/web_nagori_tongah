<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Simpan data pengguna yang sedang login ke sesi
        $request->session()->put('user', $user);
    }

    public function register(){
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();

           $user->nama_lengkap = $request->nama; 
           $user->username = $request->username; 
           $user->nik = $request->nik; 
           $user->telepon = $request->telepon; 
           $user->email = $request->email;
           $user->role = "warga";
           $user->password = Hash::make($request->password); 
        
        $user->save();

        return redirect('login')->with('success', 'Registrasi Berhasil');
    }
    
    // login
    public function login(){
        return view('auth.login');
    }

    public function loginMasuk(Request $request)
    {
        $loginField = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $loginField)
        ->orWhere('nik', $loginField)
        ->first();

        if ($user && Hash::check($password, $user->password)) {
            // Authentication successful
            auth()->login($user);
        
            if ($user->role == 'admin') {
                return view('admin.index');
            } elseif ($user->role == 'warga') {
                return view('dashboard');
            }
        } else {
            if (!$user) {
                return redirect('login')->withErrors([
                    'username' => 'Data tidak ada. Username atau NIK yang dimasukkan tidak ditemukan.',
                ]);
            } else {
                return redirect('login')->withErrors([
                    'password' => 'Password salah.',
                ]);
            }
        }
        
    }


    public function logout()
{
    Auth::logout();
    return redirect('/login');
}

}
