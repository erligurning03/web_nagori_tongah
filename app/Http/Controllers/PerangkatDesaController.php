<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerangkatDesa;
use App\Models\Periode;
class PerangkatDesaController extends Controller{
public function create()
{
    return view('admin.perangkat_desa.tambah');
}

public function store(Request $request)
{
    
    
    $data = $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'foto' => 'required',
    ]);
    PerangkatDesa::create($data);
    $periode = Periode::all(); // Gantikan Periode dengan model atau query yang sesuai
    return view('admin.perangkat_desa.tambah', compact('periode'));
    return redirect('/admin/perangkatdesa')->with('success', 'Data perangkat desa berhasil ditambahkan');
}
}