@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('history.store', ['idLelang' => $lelang->id_15458]) }}" method="post">
            @csrf
            <input type="hidden" name="id_lelang_15458" value="{{ $lelang->id_15458 }}">
            <input type="hidden" name="id_barang_15458" value="{{ $lelang->id_barang_15458 }}">

            <div class="form-group">
                <label for="id_masyarakat_15458">User</label>
                <select class="form-control text-capitalize" id="id_masyarakat_15458" class="select-custom"
                    name="id_masyarakat_15458" required>
                    @foreach ($masyarakat as $item)
                        @if ($item->id_15458 == old('id_masyarakat_15458'))
                            <option value="{{ $item->id_15458 }}" class="text-capitalize" selected>{{ $item->nama_15458 }}
                            </option>
                        @else
                            <option value="{{ $item->id_15458 }}" class="text-capitalize">{{ $item->nama_15458 }}</option>
                        @endif
                    @endforeach
                </select>
                @if ($masyarakat->isEmpty())
                    <div class="text-danger">
                        Data User Kosong
                    </div>
                @endif
                @error('id_masyarakat_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="penawaran_15458">Penawaran</label>
                <input type="number" class="form-control @error('penawaran_15458') is-invalid @enderror"
                    id="penawaran_15458" name="penawaran_15458" placeholder="Masukan Harga Penawaran"
                    value="{{ old('penawaran_15458') }}" required>
                @error('penawaran_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-inline-block float-end">
                <a href="{{ route('lelang.index') }}" class="btn btn-sm btn-round btn-danger">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
