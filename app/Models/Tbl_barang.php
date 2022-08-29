<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_barang extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga',
    ];

    public function galleries()
    {
        return $this->hasMany(Tbl_barang::class, 'kode_barang', 'id');
    }
}
