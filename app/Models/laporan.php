<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    protected $dates = ['created_at'];
    protected $fillable = [
        'nis',
        'nama_siswa',
        'kategori',
        'lokasi',
        'keterangan',
        'gambar_kejadian',
        'status',
        'feedback'
    ];
}
