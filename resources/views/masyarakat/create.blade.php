@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('masyarakat.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_15458">Nama</label>
                <input type="text" class="form-control @error('nama_15458') is-invalid @enderror" id="nama_15458"
                    name="nama_15458" placeholder="Masukan Nama Lengkap" value="{{ old('nama_15458') }}" required autofocus>
                @error('nama_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="username_15458">Username</label>
                <input type="text" class="form-control @error('username_15458') is-invalid @enderror" id="username_15458"
                    name="username_15458" placeholder="Masukan Username" value="{{ old('username_15458') }}" required>
                @error('username_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="telp_15458">No Telepon</label>
                <input type="number" class="form-control @error('telp_15458') is-invalid @enderror" id="telp_15458"
                    name="telp_15458" placeholder="Masukan No Telepon" value="{{ old('telp_15458') }}" required>
                @error('telp_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-inline-block float-end">
                <a href="{{ route('masyarakat.index') }}" class="btn btn-sm btn-round btn-danger">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
