<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDesa;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //read data
        $perangkat_desa = PerangkatDesa::with('periode')->simplePaginate(10);
        $periode = Periode::all();
        return view('admin.perangkat_desa.index', compact('perangkat_desa','periode'));//masukkan alamat dari filenya lengkap, biar ketemu hiks
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
        $perangkat = PerangkatDesa::create($request->all());

        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $gambarName = $gambar->getClientOriginalName();
            $gambarPath = 'foto_perangkat/';

            $gambar->move($gambarPath, $gambarName);

            $perangkat->foto =$gambarName;//disini foto adalah field yang ditarik dari atasnya atau field pada database
            $perangkat->save();
        }
        //$periode = $perangkat->id_periode;

        //return redirect('/admin/perangkat_desa');//redirect ke route pada index yang diphp
        return redirect()->back()->with('success', 'data berhasil ditambahkan'); 
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
        $perangkat= PerangkatDesa::findOrFail($id);//1
        $perangkat->nama = $request->nama;
        $perangkat->jabatan = $request->jabatan;
        $perangkat->id_periode = $request->id_periode;
        //$perangkat->foto = $request->foto;
        if($request->hasFile('foto')){
            //$foto=$request->file('foto')->getClientOriginalName();
            //$name = $request->file('cover')->getClientOriginalName();
            //$request->file('foto')->move(public_path('foto_perangkat/'),$foto);
            //$gambarPath = $foto->store('foto_perangkat/');
            $gambar = $request->file('foto');
            $gambarName = $gambar->getClientOriginalName();
            $gambarPath = 'foto_perangkat/';

            $gambar->move($gambarPath, $gambarName);

            $perangkat->foto =$gambarName;

            //hapus file foto lama jika ada
            if($perangkat->foto){
                Storage::delete($perangkat->foto);
            }
            $perangkat->foto = $gambar;
        } else{
            if($perangkat->foto){
                $perangkat->foto=$perangkat->foto;
            }
            
        }

        $perangkat->save();
        //$perangkat->update($request->all());//1
        return redirect()->back()->with('success','Data Berhasil Diupdate');//1


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('perangkat_desa')->where('id', $id)->delete();
        return back();
    }
}
