<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index', [
            'barang' => Barang::latest()->get(),
            'title' => 'Daftar Barang',
        ]);
    }

    public function create()
    {
        return view('barang.create', [
            'title' => 'Tambah Barang',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_15458' => 'required|max:255',
            'harga_awal_15458' => 'required',
            'deskripsi_15458' => 'required',
            'image_15458' => 'required|image'
        ]);
        $validatedData['tanggal_15458'] = now();
        $validatedData['image_15458'] = $request->file('image_15458')->store('barang-image');

        Barang::create($validatedData);
        toast('Data Baru Telah Ditambahkan', 'success');

        return redirect()->route('barang.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('barang.edit', [
            'title' => 'Edit Barang',
            'barang' => Barang::where('id_15458', $id)->firstOrFail()
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_15458' => 'required|max:255',
            'harga_awal_15458' => 'required',
            'deskripsi_15458' => 'required',
        ];

        if ($request->use_image == "on") {
            $validatedData = $request->validate($rules);
            $validatedData['image_15458'] = $request->old_image;
        } else {
            $rules['image_15458'] = 'required|file|image';
            $validatedData = $request->validate($rules);

            Storage::delete($request->old_image);
            $validatedData['image_15458'] = $request->file('image_15458')->store('barang-image');
        }

        Barang::where('id_15458', $id)->update($validatedData);
        toast('Data Telah Diperbarui', 'success');

        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        Barang::where('id_15458', $id)->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('barang.index');
    }
}
