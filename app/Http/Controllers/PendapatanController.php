<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapatan;
use App\Models\ViewPendapatan;
use PDF;




class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vpendapatan = ViewPendapatan::all();
        $pendapatan = Pendapatan::simplePaginate(4);
        $tahunList = Pendapatan::distinct()->pluck('tahun');

        return view('admin.anggaran.pendapatan', compact('pendapatan', 'tahunList', 'vpendapatan'));
    }

    public function cetak_pdf(Request $request)
    {
        $tahun = $request->tahun;
        $vpendapatan = ViewPendapatan::all();

        // Filter data berdasarkan tahun
        $pendapatan = Pendapatan::where('tahun', $tahun)->get();

        $pdf = PDF::loadView('admin.anggaran.pendapatanpdf', compact('pendapatan', 'vpendapatan'));
        return $pdf->download('Pendapatan_'.$tahun.'.pdf');
    }

    public function cetaksemua()
    {
        $pendapatan = Pendapatan::all();
        $vpendapatan = ViewPendapatan::all();

        $pdf = PDF::loadView('admin.anggaran.pendapatanpdf', compact('pendapatan', 'vpendapatan'));
        return $pdf->download('Semua_Pendapatan.pdf');
    }



    public function filter(Request $request)
    {
        $vpendapatan = ViewPendapatan::all();
        $tahun = $request->tahun;
        $pendapatan = Pendapatan::where('tahun', $tahun)->simplePaginate(4);
        $tahunList = Pendapatan::distinct()->pluck('tahun');
        $pendapatan->appends(['tahun' => $tahun]); // Menyertakan parameter tahun dalam link pagination
        return view('admin.anggaran.pendapatan', compact('pendapatan', 'tahunList', 'vpendapatan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        $pendapatan->delete();
        return redirect()->back()->with('success', 'Data pendapatan berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anggaran.tambahpendapatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sumber' => 'required',
            'jumlah' => 'required|numeric',
            'tahun' => 'required|max:4',
        ]);

        Pendapatan::create($validatedData);

        return redirect('/admin/pendapatan')->with('success', 'Data pendapatan berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        $pendapatan->sumber = $request->sumber;
        $pendapatan->jumlah = $request->jumlah;
        $pendapatan->tahun = $request->tahun;
        $pendapatan->save();
        return redirect()->back()->with('success', 'Data pendapatan berhasil diperbarui');
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
