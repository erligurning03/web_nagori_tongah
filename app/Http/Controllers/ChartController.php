<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pendapatan;
use App\Models\Pengeluaran;
use App\Models\ViewPendapatan;
use App\Models\ViewPengeluaran;

class ChartController extends Controller
{
    public function index()
    {
        $latestYear = ViewPendapatan::max('tahun');
        $pendapatanDataa = ViewPendapatan::where('tahun', $latestYear)->get();
        $pengeluaranDataa = ViewPengeluaran::where('tahun', $latestYear)->get();

        $latestYear = Pendapatan::max('tahun');
        
        $pendapatanData = Pendapatan::select('sumber', DB::raw('SUM(jumlah) as total'))
            ->where('tahun', $latestYear)
            ->groupBy('sumber')
            ->get();

        $pengeluaranData = Pengeluaran::select('bidang', DB::raw('SUM(jumlah) as total'))
            ->where('tahun', $latestYear)
            ->groupBy('bidang')
            ->get();

        $data = [
            'pendapatan' => $pendapatanData,
            'pengeluaran' => $pengeluaranData,
        ];

        return view('landing_page.belanja', compact('pendapatanDataa', 'pengeluaranDataa', 'data', 'pendapatanData', 'pengeluaranData'));
    }

    public function getData()
    {
        $latestYear = Pendapatan::max('tahun');
        
        $pendapatanData = Pendapatan::select('sumber', DB::raw('SUM(jumlah) as total'))
            ->where('tahun', $latestYear)
            ->groupBy('sumber')
            ->get();

        $pengeluaranData = Pengeluaran::select('bidang', DB::raw('SUM(jumlah) as total'))
            ->where('tahun', $latestYear)
            ->groupBy('bidang')
            ->get();

        $data = [
            'pendapatan' => $pendapatanData,
            'pengeluaran' => $pengeluaranData,
        ];

        return response()->json($data);
    }

    public function getDataa()
{
    $latestYear = ViewPendapatan::max('tahun');

    $pendapatanDataa = ViewPendapatan::where('tahun', $latestYear)->get();
    $pengeluaranDataa = ViewPengeluaran::where('tahun', $latestYear)->get();

    // Debug statements
    dd($pendapatanDataa);
    dd($pengeluaranDataa);

    return view('landing_page.belanja', compact('pendapatanDataa', 'pengeluaranDataa'));
}


}
