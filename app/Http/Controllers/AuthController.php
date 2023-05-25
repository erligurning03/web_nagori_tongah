<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    public function login()
    {
        $rememberToken = auth()->getRecallerName();
    
        if ($rememberToken && !empty($_COOKIE[$rememberToken])) {
            $user = auth()->user();
    
            if ($user->role == 'admin' || $user->role == 'operator') {
                return view('admin.index');
            } elseif ($user->role == 'warga') {
                return view('dashboard');
            }
        }
    
        return view('auth.login');
    }
    

    public function loginMasuk(Request $request)
    {
        $loginField = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $loginField)
        ->orWhere('nik', $loginField)
        ->first();

        $remember = $request->has('remember'); // Mengambil nilai dari checkbox Remember Me
        if ($user && Hash::check($password, $user->password)) {
            // Authentication successful
            auth()->login($user, $remember);
        
            if ($user->role == 'admin' || $user->role == 'operator') {
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


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'confirmed', 'min:8'], 
        ]);
    }
    
    public function logout()
    {
        // Clear the remember_token cookie
        Cookie::queue(Cookie::forget('remember_token'));
    
        // Clear the remember_token field in the users table
        $user = Auth::user();
        if ($user) {
            $user->remember_token = null;
            $user->save();
        }
    
        // Perform the logout
        Auth::logout();
    
        return redirect('/login');
    }

}
