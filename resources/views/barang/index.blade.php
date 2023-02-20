@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="offset-lg-10 col-lg-2 offset-9 col-3">
            <a href="{{ route('barang.create') }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah Barang
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
            <thead class="bg-gradient-primary text-white">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal Upload</th>
                    <th>Harga Awal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{ $item->nama_15458 }}</td>
                        <td>{{ $item->tanggal_15458 }}</td>
                        <td>{{ $item->harga_awal_15458 }}</td>
                        <td>
                            <div class="form-button-action">
                                <a href="{{ route('barang.edit', ['barang' => $item->id_15458]) }}"
                                    class="btn btn-link btn-transparent" title="Edit">
                                    <i class="fa fa-edit text-warning"></i>
                                </a>
                                <form action="{{ route('barang.destroy', ['barang' => $item->id_15458]) }}" method="post"
                                    class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link btn-transparent btn-delete" title="Hapus">
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
