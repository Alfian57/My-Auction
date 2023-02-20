@extends('layouts.auth')

@section('content')
    <div class="card-header pb-0 text-left bg-transparent">
        <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang</h3>
        <p class="mb-0">Silahkan Masukan Username dan Password</p>
    </div>
    <div class="card-body">
        <form role="form" method="POST" action="{{ route('login.authenticate') }}">
            @csrf

            {{-- Username --}}
            <label>Username</label>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username_15458"
                    aria-describedby="username-addon" value="{{ old('username_15458') }}" required autofocus>
            </div>

            {{-- Password --}}
            <label>Password</label>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                    name="password_15458" aria-describedby="password-addon" required>
            </div>

            {{-- Role --}}
            <label>Role</label>
            <div class="mb-3">
                <select class="form-control" aria-label="Role" name="role" aria-describedby="role-addon" required>
                    <option value="user" @if (old('role') == 'user') selected @endif>User</option>
                    <option value="petugas" @if (old('role') == 'petugas') selected @endif>Petugas</option>
                </select>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Belum Punya Akun?
            <a href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Daftar</a>
        </p>
    </div>
@endsection
