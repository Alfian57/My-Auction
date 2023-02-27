<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\HistoryLelang;
use App\Models\Lelang;
use App\Models\Masyarakat;
use App\Models\Petugas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lelang = Lelang::latest()
            ->with('barang')
            ->where('status_15458', 'dibuka');

        if (request('search')) {
            $barang = Barang::where('nama_15458', 'like', request('search'))->pluck('id_15458');
            $lelang->whereIn('id_barang_15458', $barang);
        }
        $lelangResult = $lelang->with('historyLelang')->with('masyarakat')->paginate(20);

        // Get Min Penawaran
        foreach ($lelangResult as $item) {
            $history_each = HistoryLelang::where('id_lelang_15458', $item->id_15458)->orderBy('penawaran_15458', 'desc')->first();

            if ($history_each == null) {
                $lelang_each = Lelang::where('id_15458', $item->id_15458)->firstOrFail();
                $min[] = $lelang_each->barang->harga_awal_15458 + 10000;
            } else {

                $min[] = $history_each->penawaran_15458 + 10000;
            }
        }

        if (!isset($min)) {
            $min = null;
        }

        return view('user.index', [
            'lelang' => $lelangResult,
            'min' => $min,
        ]);
    }

    public function dashboard()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'lelangCount' => Lelang::where('status_15458', 'dibuka')->count(),
            'userCount' => Masyarakat::count(),
            'barangCount' => Barang::count(),
            'petugasCount' => Petugas::count(),
        ]);
    }
}
