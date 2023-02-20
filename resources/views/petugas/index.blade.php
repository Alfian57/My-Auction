@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="offset-lg-10 col-lg-2 offset-9 col-3">
            <a href="{{ route('petugas.create') }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah Petugas
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petugas as $item)
                        <tr>
                            <td>{{ $item->nama_15458 }}</td>
                            <td>{{ $item->username_15458 }}</td>
                            <td>{{ $item->level->nama_15458 }}</td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{ route('petugas.edit', ['petuga' => $item->id_15458]) }}"
                                        class="btn btn-link btn-transparent" title="Edit">
                                        <i class="fa fa-edit text-warning"></i>
                                    </a>
                                    <form action="{{ route('petugas.destroy', ['petuga' => $item->id_15458]) }}"
                                        method="post" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-transparent btn-transparent"
                                            title="Hapus">
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
    </div>
@endsection
