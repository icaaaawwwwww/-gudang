<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // Define the table name explicitly (optional)
    protected $table = 'barangs';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'nama',
        'kode_barang',
        'kategori',
        'stok',
    ];

    // Optionally, you can define the primary key if it's not 'id' (default)
    protected $primaryKey = 'id';

    // Disable auto-increment if needed (not usually necessary)
    public $incrementing = true;

    // Casts attributes to specific data types (optional)
    protected $casts = [
        'stok' => 'integer',
    ];
}
