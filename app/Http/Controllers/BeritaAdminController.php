<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use App\Models\FotoBerita;
use App\Models\FotoPost;
use Illuminate\Support\Facades\DB;

class BeritaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::simplePaginate(4);
        return view('admin.berita.semuaberita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.tambahberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        $validatedData = $request->validate([
            'nik' => 'required',
            'jenis_berita' => 'required',
            'judul' => 'required',
            'isi_berita' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           
        ]);

        $user = Auth::user();
        
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('img_berita'),$name); //store gambar ke folder public 
        // $path = $request->file('image')->store('img_berita/');

        $berita = new Berita();
        $berita->nik = $user->nik; 
        $berita->jenis_berita = $request->input('jenis_berita'); 
        $berita->judul = $request->input('judul'); 
        $berita->isi_berita = $request->input('isi_berita');
        $berita->cover = $name;
        $berita->user()->associate($user); 
        $berita->save();
        
        return redirect('/admin/semuaberita')->with('success', 'Berita berhasil ditambahkan.');


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
    
        $berita = Berita::findOrFail($id);
        $berita->nik = $request->nik;
        $berita->jenis_berita = $request->jenis_berita;
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi_berita;

        if ($request->hasFile('cover')) {
            $name = $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('img_berita'),$name);
        
            // Menghapus file foto lama jika ada
            if ($berita->cover) {
                Storage::delete($berita->cover);
            }
        
            $berita->cover = $name;
        } else {
            // Jika tidak ada file yang diunggah, tetap gunakan file foto lama
            $berita->cover = $berita->cover;
        }

        $berita->save();
      
        return redirect('/admin/semuaberita')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('foto_berita')
        ->where('id_berita', '=', $id)
        ->delete();
        DB::table('komentar_berita')
        ->where('id_berita', '=', $id)
        ->delete();
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->back()->with('success', 'Berita berhasil dihapus');
    }
}
