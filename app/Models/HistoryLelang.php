<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryLelang extends Model
{
    use HasFactory;

    protected $table = 'history_lelang_15458';
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

    public function lelang()
    {
        return $this->hasOne(Lelang::class, 'id_15458', 'id_lelang_15458');
    }
}