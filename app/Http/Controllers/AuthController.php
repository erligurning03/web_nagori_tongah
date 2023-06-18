<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Simpan data pengguna yang sedang login ke sesi
        $request->session()->put('user', $user);
    }

    public function register()
    {
        // return view('auth.register');
        Auth::logout();
        $isAuthenticated = Auth::check();

        return view('auth.register', compact('isAuthenticated'));
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

        $usernameExists = User::where('username', $request->username)->exists();
        if ($usernameExists) {
            return back()->withErrors(['username' => 'Username sudah ada'])->withInput();
        }

        // Cek apakah NIK sudah ada
        $nikExists = User::where('nik', $request->nik)->exists();
        if ($nikExists) {
            return back()->withErrors(['nik' => 'NIK sudah ada'])->withInput();
        }
        $user->save();


        return redirect('login')->with('success', 'Registrasi Berhasil, Harap Tunggu Verifikasi Akun oleh Operator');
    }

    // login
    public function login()
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->remember_token) {
                // Redirect to dashboard if remember_token exists
                if ($user->role == 'admin' || $user->role == 'operator') {
                    return redirect()->route('dashboard-admin');
                } elseif ($user->role == 'warga') {
                    return redirect()->route('dashboard');
                }
            } else {
                // Clear authentication and redirect to login if remember_token is null
                auth()->logout();
                return redirect()->route('login');
            }
        }

        // Show login view if user is not authenticated
        return view('auth.login');
    }



    public function loginMasuk(Request $request)
    {
        $loginField = $request->input('username');
        $password = $request->input('password');
        $remember = $request->has('remember'); // Periksa apakah checkbox "Ingat Saya" dicentang

        $user = User::where('username', $loginField)
            ->orWhere('nik', $loginField)
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            // Authentication successful
            if ($remember) {
                $user->setRememberToken(Str::random(60)); // Set remember_token baru jika "Ingat Saya" dicentang
                $user->save();
            }

            

            if ($user->role == 'admin' || $user->role == 'operator') {
                auth()->login($user);
                return redirect()->route('dashboard-admin');
            } 
            elseif ($user->role == 'warga') {
                if ($user->status_akun == 'terdaftar') {
                    auth()->login($user);
                    return redirect()->route('dashboard');
                } elseif ($user->status_akun == 'menunggu') {
                    return redirect('login')->withErrors([
                        'Akun Anda Belum Diverifikasi, Diharapkan untuk Menunggu Proses Verifikasi, Terima Kasih.',
                    ]);
                }
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

        return redirect()->route('landing')->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
            'Expires' => 'Sat, 01 Jan 2000 00:00:00 GMT',
        ]);
    }

    public function checkUsername($username)
    {
        $user = User::where('username', $username)->first();

        return response()->json([
            'username_exists' => $user ? true : false,
        ]);
    }

    public function checknik($nik)
    {
        $user = User::where('nik', $nik)->first();

        return response()->json([
            'nik_exists' => $user ? true : false,
        ]);
    }
}
