<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;



class ValidasiUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::simplePaginate(4);
        return view('admin.umkm.validasiumkm', compact('umkm'));
    }
    

    public function terima(Umkm $umkm)
    {
        $umkm->status_validasi = 'diterima';
        $umkm->save();

        return redirect()->back()->with('success', 'UMKM diterima');
    }

    public function tolak(Umkm $umkm)
    {
        $umkm->status_validasi = 'ditolak';
        $umkm->save();

        return redirect()->back()->with('success', 'UMKM ditolak');
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
