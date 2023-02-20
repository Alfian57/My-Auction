<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\HistoryLelang;
use App\Models\Lelang;
use App\Models\Pemenang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LelangController extends Controller
{
    public function index()
    {
        return view('lelang.index', [
            'title' => 'Daftar Lelang',
            'lelang' => Lelang::latest()
                ->with('barang', 'masyarakat')
                ->get(),
        ]);
    }

    public function create()
    {
        $lelangBarangId = Lelang::all()->pluck('id_barang_15458');

        return view('lelang.create', [
            'title' => 'Daftar Lelang',
            'barang' => Barang::whereNotIn('id_15458', $lelangBarangId)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_barang_15458' => 'required'
        ]);
        $validatedData['tanggal_15458'] = now();
        $validatedData['id_petugas_15458'] = Auth::guard('petugas')->user()->id_15458;
        $validatedData['status_15458'] = 'dibuka';

        Lelang::create($validatedData);
        toast("Data Baru Telah Ditambahkan", 'success');

        return redirect()->route('lelang.index');
    }

    public function show($id)
    {
        $lelang = Lelang::where('id_15458', $id)->firstOrFail();
        $pemenang = Pemenang::where('id_lelang_15458', $id)->first();
        $idPemenang = 0;

        if ($pemenang != null) {
            $idPemenang = $pemenang->id_history_lelang_15458;
        }

        return view('lelang.show', [
            'title' => 'Daftar History Lelang',
            'lelang' => $lelang,
            'history' => HistoryLelang::where('id_lelang_15458', $id)
                ->with('masyarakat')
                ->orderBy('penawaran_15458', 'desc')
                ->get(),
            'idPemenang' => $idPemenang
        ]);
    }
}
