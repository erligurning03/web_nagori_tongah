<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritahoax = Berita::where('jenis_berita', 'hoax')->get();
        $berita = Berita::where('jenis_berita', 'berita')->get();
        // $berita = Berita::all();
        return view('berita.berita1', compact('berita', 'beritahoax'));
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
