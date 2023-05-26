<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Tolak;


class AjuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $pengajuan = Pengajuan::all(); // Ambil data pengajuan dari database

        return view('admin.pengajuan.berkas', compact('pengajuan'));
    }

    public function konfirmasi(Request $request, Pengajuan $pengajuan)
    {
        $pengajuan->status_pengajuan = 'diterima';
        $pengajuan->save();

        // Kirim email pemberitahuan
        $user = $pengajuan->user;

        return redirect()->back()->with('success', 'Pengajuan telah dikonfirmasi.');
    }

    public function penolakan(Request $request, Pengajuan $pengajuan)
    {
        $this->validate($request, [
            'alasan' => 'required',
        ]);

        $pengajuan->status_pengajuan = 'ditolak';
        $pengajuan->save();

        // Simpan alasan penolakan ke dalam tabel Tolak
        $tolak = new Tolak();
        $tolak->id_pengajuan = $pengajuan->id;
        $tolak->alasan = $request->input('alasan');
        $tolak->save();

        // Kirim email pemberitahuan
        $user = $pengajuan->user;

        return redirect()->back()->with('success', 'Pengajuan telah ditolak.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
