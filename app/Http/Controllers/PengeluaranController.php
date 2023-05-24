<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use App\Models\ViewPengeluaran;


class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vpengeluaran = ViewPengeluaran::all();
        $pengeluaran = Pengeluaran::simplePaginate(4);
        $tahunList = Pengeluaran::distinct()->pluck('tahun');
        return view('admin.anggaran.pengeluaran', compact('pengeluaran', 'tahunList', 'vpengeluaran'));
    }

    public function filter(Request $request)
    {
        $vpengeluaran = ViewPengeluaran::all();
        $tahun = $request->tahun;
        $pengeluaran = Pengeluaran::where('tahun', $tahun)->simplePaginate(4);
        $tahunList = Pengeluaran::distinct()->pluck('tahun');
        $pengeluaran->appends(['tahun' => $tahun]); // Menyertakan parameter tahun dalam link pagination
        return view('admin.anggaran.pengeluaran', compact('pengeluaran', 'tahunList', 'vpengeluaran'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();
        return redirect()->back()->with('success', 'Data pengeluaran berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anggaran.tambahpengeluaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bidang' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required|numeric',
            'tahun' => 'required|max:4',
        ]);

        Pengeluaran::create($validatedData);

        return redirect('/admin/pengeluaran')->with('success', 'Data pengeluaran berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->bidang = $request->bidang;
        $pengeluaran->keterangan = $request->keterangan;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->tahun = $request->tahun;
        $pengeluaran->save();
        return redirect()->back()->with('success', 'Data peneg$pengeluaran berhasil diperbarui');
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
