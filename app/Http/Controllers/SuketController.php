<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suket;



class suketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $suket = Suket::simplePaginate(4);
        return view('admin.pengajuan.suket', compact('suket'));
    }

    // public function filter(Request $request)
    // {
        
    //     $tahun = $request->tahun;
    //     $suket = Suket::where('tahun', $tahun)->simplePaginate(4);
    //     $tahunList = Suket::distinct()->pluck('tahun');
    //     $suket->appends(['tahun' => $tahun]); // Menyertakan parameter tahun dalam link pagination
    //     return view('admin.anggaran.suket', compact('suket', 'tahunList'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $suket = Suket::findOrFail($id);
    
    // Menghapus entri terkait dari tabel "persyaratans"
    foreach ($suket->pengajuan as $pengajuan) {
        $pengajuan->persyaratan()->delete();
    }
    
    // Menghapus entri terkait dari tabel "pengajuans"
    $suket->pengajuan()->delete();

    // Menghapus entri dari tabel "sukets"
    $suket->delete();
    
    return redirect()->back()->with('success', 'Data Surat Keterangan berhasil dihapus');
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengajuan.tambahsuket');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'suket' => 'required',
            'syarat' => 'required',
        ]);

        suket::create($validatedData);

        return redirect('/admin/suket')->with('success', 'Data suket berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $suket = Suket::findOrFail($id);
        $suket->suket = $request->suket;
        $suket->syarat = $request->syarat;
        $suket->save();
        return redirect()->back()->with('success', 'Data suket berhasil diperbarui');
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


}
