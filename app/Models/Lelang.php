<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $table = 'lelang_15458';
    protected $guarded = ['id_15458'];
    protected $primaryKey = 'id_15458';

    public function barang()
    {
        return $this->hasOne(Barang::class, 'id_15458', 'id_barang_15458');
    }

    public function masyarakat()
    {
        return $this->hasOne(Masyarakat::class, 'id_15458', 'id_masyarakat_15458');
    }

    public function petugas()
    {
        return $this->hasOne(Petugas::class, 'id_15458', 'id_petugas_15458');
    }

    public function historyLelang()
    {
        return $this->hasMany(HistoryLelang::class, 'id_lelang_15458', 'id_15458');
    }
}
