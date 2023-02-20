@extends('layouts.auth')

@section('content')
    <div class="card-header pb-0 text-left bg-transparent">
        <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang</h3>
        <p class="mb-0">Silahkan Isi Form Berikut</p>
    </div>
    <div class="card-body">
        <form role="form" method="POST" action="{{ route('register.create') }}">
            @csrf
            {{-- Nama Lengkap --}}
            <label for="nama">Nama Lengkap</label>
            <div class="mb-3">
                <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Nama"
                    name="nama_15458" aria-describedby="nama-addon" required autofocus>
            </div>

            {{-- Username --}}
            <label>Username</label>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    name="username_15458" aria-describedby="username-addon" required>
            </div>

            {{-- Password --}}
            <label>Password</label>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                    name="password_15458" aria-describedby="password-addon" required>
            </div>

            {{-- Password --}}
            <label>No Telepon</label>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="No Telepon" aria-label="No Telepon"
                    name="telp_15458" aria-describedby="password-addon" required>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Daftar</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Sudah Punya Akun?
            <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Masuk</a>
        </p>
    </div>
@endsection
