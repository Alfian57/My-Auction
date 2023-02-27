@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="offset-lg-8 col-lg-4 offset-6 col-6 d-flex">
            <a href="#" class="btn btn-outline-success btn-round mb-3 me-3" data-bs-toggle="modal"
                data-bs-target="#exportModal">
                <i class="fa fa-file"></i>
                Generate Laporan
            </a>

            {{-- Modal --}}
            <div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exportModal">Generate Laporan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('lelang.export') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="date">Tanggal</label>
                                    <input type="date" class="form-control" name="date" id="date" required>
                                </div>

                                <div class="d-inline-block float-end mt-3">
                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                        data-bs-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-success btn-sm  mx-1">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('lelang.create') }}" class="btn btn-outline-primary btn-round mb-3">
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
