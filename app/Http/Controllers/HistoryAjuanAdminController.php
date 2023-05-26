<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Tolak;

class HistoryAjuanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan = Pengajuan::whereIn('status_pengajuan', ['diterima', 'ditolak'])
        ->with('user', 'suket', 'persyaratan', 'tolakan')
        ->simplePaginate(5);

        $pengajuanIds = $pengajuan->pluck('id');
        $tolak = Tolak::whereIn('id_pengajuan', $pengajuanIds)->get();

        return view('admin.pengajuan.hisberkas', compact('pengajuan', 'tolak'));
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
