<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'keterangan',
        'total_harga',

    ];

    public function tbl_pembelian()
    {
        return $this->hasMany(Tbl_pembelian::class, 'id', 'id');

    }
}
