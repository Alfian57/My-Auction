<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas.index', [
            'petugas' => Petugas::latest()->with('level')->get(),
            'title' => 'Daftar Petugas',
        ]);
    }

    public function create()
    {
        return view('petugas.create', [
            'title' => 'Tambah Petugas',
            'level' => Level::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_15458' => 'required|max:255',
            'username_15458' => 'required|unique:petugas_15458',
            'id_level_15458' => 'required',
        ]);
        $validatedData['password_15458'] = Hash::make('password');

        Petugas::create($validatedData);
        toast('Data Baru Telah Ditambahkan', 'success');

        return redirect()->route('petugas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('petugas.edit', [
            'title' => 'Edit Petugas',
            'petugas' => Petugas::where('id_15458', $id)->firstOrFail(),
            'level' => Level::latest()->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_15458' => 'required|max:255',
            'username_15458' => 'required',
            'id_level_15458' => 'required',
        ];

        if ($request->username_15458 !== $request->old_username_15458) {
            $rules['username_15458'] = 'required|unique:petugas_15458';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password_15458'] = $request->old_password_15458;

        Petugas::where('id_15458', $id)->update($validatedData);
        toast('Data Telah Diperbarui', 'success');

        return redirect()->route('petugas.index');
    }

    public function destroy($id)
    {
        Petugas::where('id_15458', $id)->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('petugas.index');
    }
}
