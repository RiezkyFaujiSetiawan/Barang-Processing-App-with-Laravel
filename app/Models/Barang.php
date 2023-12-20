<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jenis_varian',
        'qty',
        'harga_jual',
    ];

    /*Property ini menentukan nama tabel yang terkait dengan model ini. Dalam hal ini, 
    model Barang akan berinteraksi dengan tabel 'barang' dalam database.
    */
    protected $table = 'barang';
}
