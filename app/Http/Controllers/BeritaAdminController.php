<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Berita;
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
        $request->file('image')->storeAs('public/img_berita',$name);
        $path = $request->file('image')->store('img_berita');

        $berita = new Berita();
        $berita->nik = $user->nik; 
        $berita->jenis_berita = $request->input('jenis_berita'); 
        $berita->judul = $request->input('judul'); 
        $berita->isi_berita = $request->input('isi_berita');
        $berita->cover = $name;
        $berita->user()->associate($user); 
        $berita->save();

        // if ($request->hasFile('foto')) {
        //     foreach ($request->file('foto') as $foto) {
        //         if ($foto->isValid()) { // Memeriksa apakah foto yang diunggah valid
        //             $fileExtension = $foto->getClientOriginalExtension(); // Mendapatkan ekstensi file asli
        //             $allowedExtensions = ['jpg', 'jpeg', 'png']; // Ekstensi yang diizinkan

        //             if (in_array($fileExtension, $allowedExtensions)) {
        //                 $fileName = $foto->getClientOriginalName();

        //                 $foto->storeAs('img_berita', $fileName, 'public'); 
        //                 $foto_berita = new FotoBerita();
        //                 $foto_berita->id_berita = $berita->id;
        //                 $foto_berita->foto = $fileName;
        //                 $foto_berita->save();
        //             } else {
        //                 return redirect()->back()->withErrors('Tipe file tidak diizinkan. Pastikan semua file adalah file gambar (jpg, jpeg, png) atau file PDF dengan ukuran maksimum 8MB.');
        //             }
        //         } else {
        //             return redirect()->back()->withErrors('Ada masalah dengan salah satu file yang diunggah. Pastikan semua file adalah file gambar (jpg, jpeg, png) atau file PDF dengan ukuran maksimum 8MB.');
        //         }
        //     }
        // }
        return redirect('/admin/semuaberita')->with('success', 'Berita berhasil disimpan.');


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
        $berita->cover = $request->cover;
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
