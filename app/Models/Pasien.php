<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['rumah_sakit_id', 'nama', 'alamat', 'telp'];
}
