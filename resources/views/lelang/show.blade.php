@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="offset-lg-10 col-lg-2 offset-9 col-3">
            <a href="{{ route('history.create', ['idLelang' => $lelang->id_15458]) }}" class="btn btn-success btn-round mb-3">
                <i class="fa fa-plus"></i>
                Tambah History
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                        <th>Nama User</th>
                        <th>Penawaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $item)
                        <tr>
                            <td>{{ $item->masyarakat->nama_15458 }}</td>
                            <td>{{ $item->penawaran_15458 }}</td>
                            <td>
                                @if ($item->id_15458 == $idPemenang)
                                    <div class="form-button-action">
                                        <a href="#" class="btn btn-link" title="Pemenang">
                                            <img src="/assets/img/pemenang.png" alt="Pemenang Icon" class="icon">
                                        </a>
                                    </div>
                                @else
                                    <div class="form-button-action">
                                        @if ($lelang->status_15458 == 'dibuka')
                                            <form
                                                action="{{ route('history.pemenang', ['idLelang' => $lelang->id_15458, 'idHistory' => $item->id_15458]) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-link btn-pemenang"
                                                    title="Pilih Pemenang">
                                                    <img src="/assets/img/pilih.png" alt="Pilih Icon" class="icon">
                                                </button>
                                            </form>
                                        @else
                                            <a href="#" class="btn btn-link" title="Pemenang">
                                                <img src="/assets/img/pilih.png" alt="Pilih Icon" class="icon">
                                            </a>
                                        @endif
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
