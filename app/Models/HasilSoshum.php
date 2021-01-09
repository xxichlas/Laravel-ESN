<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSoshum extends Model
{
    use HasFactory;
    protected $table='hasil';
    protected $primaryKey = 'noPeserta';
}
