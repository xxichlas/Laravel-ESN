<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sertifikat extends Model
{
    use HasFactory;
    protected $table='sertifikat';
    protected $primaryKey = 'noPeserta';
}
