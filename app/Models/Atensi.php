<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atensi extends Model
{
    // Tentukan tabel yang akan digunakan model ini
    protected $table = 'atensis';

    // Tentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'uraian_kegiatan',
        'saran_tindak_lanjut',
        'keterangan',
        'file',
    ];

    /**
     * Mengambil path lengkap dari file yang diupload, jika ada.
     *
     * @return string|null
     */
    public function getFileUrlAttribute()
    {
        return $this->file ? asset('storage/' . $this->file) : null;
    }
}
