<?php

namespace App\Http\Controllers;
use App\Models\Umkm;
use PDF;
use Illuminate\Http\Request;

class UmkmBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::simplePaginate(4);
        return view('admin.umkm.listumkm', compact('umkm'));
    }

    public function cetak_pdf()
    {
        $umkm = Umkm::all();

        $pdf = PDF::loadView('admin.umkm.umkmpdf', compact('umkm'));
        return $pdf->download('List UMKM.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.umkm.tambahumkm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Umkm::create($validatedData);
        
        $validatedData = $request->validate([
            'nik' => 'required',
            'upload_ktp' => 'required',
            'pas_foto' => 'required',
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'gambar_produk' => 'required',
            'deskripsi' => 'required',
        ]);

        Umkm::create($validatedData);
     } catch (\Exception $e) {
        dd($e->getMessage());
    }

        return redirect('/admin/listumkm')->with('success', 'Data umkm berhasil ditambahkan');
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
        $umkm = Umkm::findOrFail($id);
        $umkm->nik = $request->nik;
        $umkm->upload_ktp = $request->upload_ktp;
        $umkm->pas_foto = $request->pas_foto;
        $umkm->nama_usaha = $request->nama_usaha;
        $umkm->alamat = $request->alamat;
        $umkm->telepon = $request->telepon;
        $umkm->gambar_produk = $request->gambar_produk;
        $umkm->deskripsi = $request->deskripsi;
        $umkm->save();
        return redirect()->back()->with('success', 'Data UMKM berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        $umkm->delete();
        return redirect()->back()->with('success', 'Data UMKM berhasil dihapus');
    }
}
