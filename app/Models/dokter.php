<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = "dokter";
    protected $primarkey = "id";
    protected $keyType = "char";

    protected $fillable = [
        'id',
        'nama',
        'jabatan'
    ];
}

