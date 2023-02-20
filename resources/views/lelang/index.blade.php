@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="offset-lg-10 col-lg-2 offset-9 col-3">
            <a href="{{ route('lelang.create') }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah Lelang
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Tanggal Lelang</th>
                        <th>Harga Akhir</th>
                        <th>Nama User</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lelang as $item)
                        <tr>
                            <td>{{ $item->barang->nama_15458 }}</td>
                            <td>{{ $item->tanggal_15458 }}</td>

                            @if ($item->harga_akhir_15458 == null)
                                <td class="text-danger">Kosong</td>
                            @else
                                <td>{{ $item->harga_akhir_15458 }}</td>
                            @endif

                            @if ($item->id_masyarakat_15458 == null)
                                <td class="text-danger">Kosong</td>
                            @else
                                <td>{{ $item->masyarakat->nama_15458 }}</td>
                            @endif

                            @if ($item->status_15458 == 'dibuka')
                                <td class="text-success">{{ $item->status_15458 }}</td>
                            @else
                                <td class="text-danger">{{ $item->status_15458 }}</td>
                            @endif

                            <td>
                                <div class="form-button-action">
                                    <a href="{{ route('lelang.show', ['lelang' => $item->id_15458]) }}"
                                        class="btn btn-link btn-transparent" title="Detal">
                                        <i class="fa fa-eye text-primary"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
