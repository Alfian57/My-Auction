<?php

namespace App\Http\Controllers;

use App\Models\HistoryLelang;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenawaranController extends Controller
{
    public function penawaran(Request $request, $idLelang, $idBarang)
    {
        $history = HistoryLelang::where('id_lelang_15458', $idLelang)->orderBy('penawaran_15458', 'desc')->first();

        if ($history == null) {
            $lelang = Lelang::where('id_15458', $idLelang)->firstOrFail();
            $gt = $lelang->barang->harga_awal_15458;
        } else {
            $gt = $history->penawaran_15458;
        }

        $validatedData = $request->validate([
            'penawaran_15458' => 'required|numeric|gt:' . $gt,
        ]);

        $validatedData['id_lelang_15458'] = $idLelang;
        $validatedData['id_barang_15458'] = $idBarang;
        $validatedData['id_masyarakat_15458'] = Auth::guard('masyarakat')->user()->id_15458;


        HistoryLelang::create($validatedData);
        toast('Berhasil Melakukan Penawaran', 'success');
        return redirect()->route('home');
    }
}