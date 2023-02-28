<div class="modal fade" id="myHistoryModal" tabindex="-1" aria-labelledby="myHistoryModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">History Menang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama Barang</th>
                                <th>Tanggal Lelang</th>
                                <th>Harga Akhir</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($myHistory as $item)
                                <tr>
                                    <td>{{ $item->barang->nama_15458 }}</td>
                                    <td>{{ $item->tanggal_15458 }}</td>
                                    <td>{{ $item->harga_akhir_15458 }}</td>
                                    <td>
                                        <a href="#">Download</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
