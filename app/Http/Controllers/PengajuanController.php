<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Suket;
use App\Models\Pengajuan;
use App\Models\Persyaratan;
use App\Models\Tolak;



class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suket = Suket::all();

        return view('pengajuan.index2', compact('suket'));
    }

    public function submit(Request $request)
    {

        // dd($request->all());
        // Validasi request
    $request->validate([
        'file' => 'required|array|max:8', // Memastikan setidaknya 1 dan maksimal 8 file terlampir
        'file.*' => 'required|mimes:pdf|max:8048', // Memastikan setiap file adalah file PDF dengan ukuran maksimum 8MB
        'alasan' => 'required',
    ], [
        'file.required' => 'File harus diunggah.',
        'file.array' => 'File harus diunggah.',
        'file.max' => 'Maksimal 8 file dapat diunggah.',
        'file.*.required' => 'Semua file harus diunggah.',
        'file.*.mimes' => 'File harus berformat PDF.',
        'file.*.max' => 'Ukuran file maksimal 8MB.',
        'alasan.required' => 'Alasan harus diisi.',
    ]);

    // Dapatkan user yang sedang login
    $user = Auth::user();

    // Buat record baru di tabel pengajuan
    $pengajuan = new Pengajuan();
    $pengajuan->nik = $user->nik; // Nik user yang sedang login
    $pengajuan->nama = $user->nama_lengkap;
    $pengajuan->id_suket = $request->input('id_suket'); // ID surat keterangan yang diajukan
    $pengajuan->deskripsi = $request->input('alasan');
    $pengajuan->status_pengajuan = 'menunggu';
    $pengajuan->user()->associate($user); // Menghubungkan pengajuan dengan user yang sedang login
    $pengajuan->save();

    // Simpan file PDF ke tabel persyaratan
    if ($request->hasFile('file')) {
        foreach ($request->file('file') as $file) {
            if ($file->isValid()) { // Memeriksa apakah file yang diunggah valid
                $fileName = $file->getClientOriginalName();
                $file->storeAs('pdfs', $fileName); // Simpan file di direktori 'storage/app/pdfs'

                $persyaratan = new Persyaratan();
                $persyaratan->id_pengajuan = $pengajuan->id;
                $persyaratan->berkas = $fileName;
                $persyaratan->save();
            } else {
                return redirect()->back()->withErrors('Ada masalah dengan salah satu file yang diunggah. Pastikan semua file adalah file PDF dengan ukuran maksimum 8MB.');
            }
        }
    }

    return redirect()->back()->with('success', 'Pengajuan berhasil disimpan.');

    }

    public function history()
    {
        $nik = auth()->user()->nik;
        $pengajuan = Pengajuan::where('nik', $nik)->simplePaginate(3);
        $tolak = Tolak::whereIn('id_pengajuan', $pengajuan->pluck('id'))->get();
        return view('pengajuan.history', compact('pengajuan', 'tolak'));
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
    public function show($id)
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
