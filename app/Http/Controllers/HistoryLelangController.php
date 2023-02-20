<?php

namespace App\Http\Controllers;

use App\Models\HistoryLelang;
use App\Models\Lelang;
use App\Models\Masyarakat;
use App\Models\Pemenang;
use Illuminate\Http\Request;

class HistoryLelangController extends Controller
{
    public function create($idLelang)
    {
        return view('lelang.create-history', [
            'title' => 'Daftar Lelang',
            'lelang' => Lelang::where('id_15458', $idLelang)->firstOrFail(),
            'masyarakat' => Masyarakat::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $history = HistoryLelang::where('id_lelang_15458', $request->id_lelang_15458)->orderBy('penawaran_15458', 'desc')->first();

        if ($history == null) {
            $lelang = Lelang::where('id_15458', $request->id_lelang_15458)->firstOrFail();
            $gt = $lelang->barang->harga_awal_15458;
        } else {
            $gt = $history->penawaran_15458;
        }

        $gt += 10000;

        $validatedData = $request->validate([
            'id_lelang_15458' => 'required',
            'id_barang_15458' => 'required',
            'id_masyarakat_15458' => 'required',
            'penawaran_15458' => 'required|numeric|gt:' . $gt,
        ]);

        HistoryLelang::create($validatedData);
        return redirect()->route('lelang.show', ['lelang' => $request->id_lelang_15458]);
    }

    public function winner(Request $request, $idLelang, $idHistory)
    {
        $lelang = Lelang::where('id_15458', $idLelang)->firstOrFail();
        $historyLelang = HistoryLelang::where('id_15458', $idHistory)->firstOrFail();

        $lelang->update([
            'status_15458' => 'ditutup',
            'harga_akhir_15458' => $historyLelang->penawaran_15458,
            'id_masyarakat_15458' => $historyLelang->id_masyarakat_15458,
        ]);

        Pemenang::create([
            'id_lelang_15458' => $idLelang,
            'id_history_lelang_15458' => $idHistory
        ]);

        toast("Pemenang Barang " . $lelang->barang->nama . " Telah Diperbarui", 'success');

        return redirect()->route('lelang.index');
    }
}
