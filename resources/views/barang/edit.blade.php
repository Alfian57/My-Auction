@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('barang.update', ['barang' => $barang->id_15458]) }}" method="post"
            enctype="multipart/form-data">
            @method('put')
            @csrf

            <input type="hidden" name="old_image" value="{{ $barang->image_15458 }}">

            <div class="form-group">
                <label for="nama_15458">Nama</label>
                <input type="text" class="form-control @error('nama_15458') is-invalid @enderror" id="nama_15458"
                    name="nama_15458" placeholder="Masukan Nama Barang" value="{{ old('nama_15458', $barang->nama_15458) }}"
                    required autofocus>
                @error('nama_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="harga_awal_15458">Harga Awal</label>
                <input type="number" class="form-control @error('harga_awal_15458') is-invalid @enderror"
                    id="harga_awal_15458" name="harga_awal_15458" placeholder="Masukan Harga Awal"
                    value="{{ old('harga_awal_15458', $barang->harga_awal_15458) }}" required>
                @error('harga_awal_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi_15458">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_15458" name="deskripsi_15458" rows="3"
                    placeholder="Masukan Deskripsi" required>{{ old('deskripsi_15458', $barang->deskripsi_15458) }}</textarea>
                @error('deskripsi_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <img src="{{ asset('storage/' . $barang->image_15458) }}" alt="Gambar Barang"
                    class="img-thumbnail p-1 w-25">
                <div class="form-group">
                    <input type="checkbox" name="use_image" id="use_image" checked>
                    <label for="use_image" class="form-label">Gunakan Foto Diatas</label>
                </div>
                <label for="image_15458">Gambar Barang</label>
                <input type="file" class="form-control @error('image_15458') is-invalid @enderror" id="image_15458"
                    name="image_15458" placeholder="Masukan Harga Awal" value="{{ old('image_15458') }}">
                @error('image_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-inline-block float-end">
                <a href="{{ route('barang.index') }}" class="btn btn-sm btn-round btn-danger">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
