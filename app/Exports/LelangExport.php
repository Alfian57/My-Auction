<?php

namespace App\Exports;

use App\Models\Lelang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LelangExport implements FromCollection, WithHeadings
{
    private $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function collection()
    {
        $lelang = Lelang::join('barang_15458', 'barang_15458.id_15458', 'lelang_15458.id_barang_15458')
            ->leftJoin('masyarakat_15458', 'masyarakat_15458.id_15458', 'lelang_15458.id_masyarakat_15458')
            ->select('barang_15458.nama_15458 as nama_barang', 'lelang_15458.tanggal_15458', 'lelang_15458.harga_akhir_15458', 'masyarakat_15458.nama_15458 as nama_masyarakat', 'lelang_15458.status_15458')
            ->whereDate('lelang_15458.tanggal_15458', $this->date)
            ->get();

        foreach ($lelang as $item) {
            if ($item->nama_masyarakat == null) {
                $item->nama_masyarakat = "Belum Ada Pemenang";
            }
            if ($item->harga_akhir_15458 == null) {
                $item->harga_akhir_15458 = "Belum Ada Penawaran";
            }
        }

        return $lelang;
    }

    public function headings(): array
    {
        return ["Nama Barang", "Tanggal Lelang", "Harga Akhir", "Nama User", "status"];
    }
}
