<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('masyarakat.index', [
            'masyarakat' => Masyarakat::latest()->get(),
            'title' => 'Daftar Masyarakat',
        ]);
    }

    public function create()
    {
        return view('masyarakat.create', [
            'title' => 'Tambah Masyarakat',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_15458' => 'required|max:255',
            'username_15458' => 'required|unique:masyarakat_15458',
            'telp_15458' => 'required|max:25',
        ]);
        $validatedData['password_15458'] = Hash::make('password');

        Masyarakat::create($validatedData);
        toast('Data Baru Telah Ditambahkan', 'success');

        return redirect()->route('masyarakat.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('masyarakat.edit', [
            'title' => 'Edit Masyarakat',
            'masyarakat' => Masyarakat::where('id_15458', $id)->firstOrFail()
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_15458' => 'required|max:255',
            'username_15458' => 'required',
            'telp_15458' => 'required|max:25',
        ];

        if ($request->username_15458 !== $request->old_username_15458) {
            $rules['username_15458'] = 'required|unique:masyarakat_15458';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password_15458'] = $request->old_password_15458;

        Masyarakat::where('id_15458', $id)->update($validatedData);
        toast('Data Telah Diperbarui', 'success');

        return redirect()->route('masyarakat.index');
    }

    public function destroy($id)
    {
        Masyarakat::where('id_15458', $id)->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('masyarakat.index');
    }
}
