@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('lelang.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="id_barang_15458">Barang</label>
                <select class="form-control text-capitalize" id="id_barang_15458" class="select-custom" name="id_barang_15458"
                    required>
                    @foreach ($barang as $item)
                        @if ($item->id_15458 == old('id_barang_15458'))
                            <option value="{{ $item->id_15458 }}" class="text-capitalize" selected>{{ $item->nama_15458 }}
                            </option>
                        @else
                            <option value="{{ $item->id_15458 }}" class="text-capitalize">{{ $item->nama_15458 }}</option>
                        @endif
                    @endforeach
                </select>
                @if ($barang->isEmpty())
                    <div class="text-danger">
                        Barang Kosong atau Barang Sudah Dilelang
                    </div>
                @endif
                @error('id_barang_15458')
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
