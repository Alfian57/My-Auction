@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_15458">Nama</label>
                <input type="text" class="form-control @error('nama_15458') is-invalid @enderror" id="nama_15458"
                    name="nama_15458" placeholder="Masukan Nama Barang" value="{{ old('nama_15458') }}" required autofocus>
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
                    value="{{ old('harga_awal_15458') }}" required>
                @error('harga_awal_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi_15458">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_15458" name="deskripsi_15458" rows="3"
                    placeholder="Masukan Deskripsi" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image_15458">Gambar Barang</label>
                <input type="file" class="form-control @error('image_15458') is-invalid @enderror" id="image_15458"
                    name="image_15458" placeholder="Masukan Harga Awal" value="{{ old('image_15458') }}" required>
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
