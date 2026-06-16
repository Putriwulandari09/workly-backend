<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'judul',
        'perusahaan',
        'lokasi',
        'tipe_pekerjaan',
        'deskripsi',
        'persyaratan',
        'cara_mendaftar',
        'batas_pendaftaran',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}