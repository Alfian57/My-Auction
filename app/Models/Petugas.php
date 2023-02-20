<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Petugas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id_15458'];
    protected $table = 'petugas_15458';
    protected $primaryKey = 'id_15458';

    public function getAuthPassword()
    {
        return $this->password_15458;
    }

    public function level()
    {
        return $this->hasOne(Level::class, 'id_15458', 'id_level_15458');
    }

    public function lelang()
    {
        return $this->hasMany(Lelang::class);
    }
}