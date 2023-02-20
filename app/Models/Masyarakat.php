<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Masyarakat extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'masyarakat_15458';
    protected $guarded = ['id_15458'];
    protected $primaryKey = 'id_15458';

    public function getAuthPassword()
    {
        return $this->password_15458;
    }

    public function lelang()
    {
        return $this->hasMany(Lelang::class);
    }

    public function historyLelang()
    {
        return $this->hasMany(HistoryLelang::class);
    }
}