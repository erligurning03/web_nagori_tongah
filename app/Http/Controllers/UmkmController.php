<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function create()
{
    return view('umkm.index');
}

public function store(Request $request)
{
    $data = $request->validate([
        'nama_usaha' => 'required',
        'alamat' => 'required',
        'gambar_produk' => 'required',
        'telepon' => 'required',
        'deskripsi' => 'required',
    ]);
    Umkm::create($data);
    return redirect('/admin/umkm')->with('success', 'UMKM berhasil ditambahkan');


}
}
