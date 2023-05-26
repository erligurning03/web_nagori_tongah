<?php

namespace App\Http\Controllers;


use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //kita panggil model untuk read datanya, ini dh jalan. ini kalau pake model
        // $data= Galeri::all();
        // return view('crud_galeri',compact('data'));

        //ini untuk read data dari database kalau kita ga pake model
        $galeri = DB::table('galeri')->get();
        // return view('galeri_admin.crud_galeri', compact('galeri'));
        return view('galeri_admin.index', compact('galeri'));
        


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menambah data mamsukkan lokasi 
        return view('galeri_admin.create_galeri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //simpan ke database lanjutan dari create()
       // dd('submitted');
    //     DB::table('galeri')->insert([
    //     // 'tes'=> $request->tes,
    //     'gambar'=>$request->gambar,
    //    ]);//ini dah jalan
       $foto = Galeri::create($request->all());

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->getClientOriginalName();
            $gambarPath = 'foto_galeri/';

            $gambar->move($gambarPath, $gambarName);

            $foto->gambar =$gambarName;
            $foto->save();
        }

        
    //     $foto = Galeri::created($request->all());

    //    if($request->hasFile('gambar')){
    //         $request->file('gambar')->move('foto_galeri/', $request->file('gambar')->getClientOriginalName());
    //         $foto->gambar = $request->file('gambar')->getClientOriginalName();
    //         $foto->save();
    //    }
       //return redirect()->back();
       return redirect('galeri_adm');
        // return view('galeri_admin.index', compact('foto')); ini masih salah karena dia harus redirect
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //untuk read data
        
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
        //delete data
        DB::table('galeri')->where('id', $id)->delete();
        return back();
    }
}
