<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table='peserta';
    protected $primaryKey = 'noPeserta';
    protected $fillable = ['namaPeserta', 'asalSekolah', 'pilihanTryout', 'email', 'konfirmasiPembayaran'];

    public function akun()
    {
        return $this->hasOne(Akun::class, 'noPeserta', 'noPeserta');
    }

}
