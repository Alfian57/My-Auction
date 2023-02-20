<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'barang_15458';
    protected $primaryKey = 'id_15458';

    public function lelang()
    {
        return $this->hasOne(Lelang::class, 'id_15458', 'id_lelang_15458');
    }

    public function historyLelang()
    {
        return $this->hasMany(HistoryLelang::class);
    }
}