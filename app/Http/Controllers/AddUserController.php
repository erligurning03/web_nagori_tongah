<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddUserController extends Controller
{

    public function index(Request $request)
    {
        if (auth()->user()->role === 'admin' || auth()->user()->role === 'operator') {
            $roleFilter = $request->query('role');
            $searchTerm = $request->query('search');

            $users = User::query();

            if ($roleFilter) {
                $users->where('role', $roleFilter);
            }

            if ($searchTerm) {
                $users->where(function ($query) use ($searchTerm) {
                    $query->where('nik', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('nama_lengkap', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('username', 'LIKE', '%' . $searchTerm . '%');
                });
            }

            $users = $users->simplePaginate(10);

            return view('admin.kelola_user.list_user', compact('users', 'roleFilter', 'searchTerm'));
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini'); // Menolak akses jika bukan admin atau operator
        }
    }    
        
        public function create(User $user)
    {

        if (auth()->user()->role === 'admin') {
            return view('admin.kelola_user.add_user', compact('user'));
        } elseif (auth()->user()->role === 'operator' && $user->role !== 'operator') {
            return view('admin.kelola_user.add_user', compact('user'));
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini'); // Menolak akses jika bukan admin atau operator yang mencoba mengelola operator
        }
    }

    public function store(Request $request)
    {
        if (auth()->user()->role === 'admin') {
            $request->validate([
                // Validasi field
            ]);
    
            User::create($request->all());
    
            return redirect('/users')->with('success', 'User berhasil ditambahkan.');
        } elseif (auth()->user()->role === 'operator' && $request->input('role') === 'warga') {
            $request->validate([
                'role' => 'required|in:warga',
            ]);
    
            User::create($request->all());
    
            return redirect('/users')->with('success', 'User warga berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini'); // Menolak akses jika bukan admin atau operator yang mencoba menambahkan pengguna dengan peran operator
        }
    }
    

    public function edit(User $user)
    {
        if (auth()->user()->role === 'admin') {
            return view('admin.kelola_user.edit_user', compact('user'));
        } elseif (auth()->user()->role === 'operator' && $user->role !== 'operator') {
            return view('admin.kelola_user.edit_user', compact('user'));
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini');
        }
    }

    public function update(Request $request, User $user)
    {
        if (auth()->user()->role === 'admin') {
            $request->validate([
                // Validasi field
            ]);

            $user->update($request->all());

            return redirect('/users')->with('success', 'User berhasil diupdate.');
        } elseif (auth()->user()->role === 'operator' && $user->role !== 'operator') {
            $request->validate([
                // Validasi field
            ]);

            $user->update($request->all());

            return redirect('/users')->with('success', 'User berhasil diupdate.');
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini');
        }
    }


    public function destroy(User $user)
    {
        if (auth()->user()->role === 'admin') {
            $user->delete();

            return redirect('/users')->with('success', 'User berhasil dihapus.');
        } elseif (auth()->user()->role === 'operator' && $user->role !== 'operator') {
            $user->delete();

            return redirect('/users')->with('success', 'User berhasil dihapus.');
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini'); // Menolak akses jika bukan admin atau operator yang mencoba mengelola operator
        }
    }


    public function updateRole(Request $request, User $user)
    {
        if (auth()->user()->role === 'admin') {
            $request->validate([
                'role' => 'required|in:operator,warga',
            ]);

            $user->update(['role' => $request->role]);

            return redirect('/users')->with('success', 'Peran pengguna berhasil diubah.');
        } elseif (auth()->user()->role === 'operator' && $request->user()->role === 'warga') {
            $request->validate([
                'role' => 'required|in:warga',
            ]);

            $user->update(['role' => $request->role]);

            return redirect('/users')->with('success', 'Peran pengguna berhasil diubah.');
        } else {
            return redirect()->back()->with('alert', 'Hanya Admin yang Bisa Melakukan Aksi Ini'); // Menolak akses jika bukan admin atau operator yang mencoba mengubah peran operator
        }
    }

}
