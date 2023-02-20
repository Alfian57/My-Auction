<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded = ['id_15458'];
    protected $primaryKey = 'id_15458';
    protected $table = 'levels_15458';

    public function petugas()
    {
        return $this->hasMany(Petugas::class);
    }
}