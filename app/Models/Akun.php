<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table="akun";
    protected $primaryKey = "noPeserta";

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'noPeserta', 'noPeserta');

    }
}
