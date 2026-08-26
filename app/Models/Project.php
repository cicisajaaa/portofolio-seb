<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class Project extends Model
{

    /**
     * Field yang boleh diisi melalui mass assignment
     */
    protected $fillable = [

        'instansi',

        'perusahaan',

        'nama_proyek',

        'lokasi',

        'kegiatan',

        'tahun',

        'jenis_pekerjaan',

        'deskripsi',

        'gambar'

    ];



    /**
     * Satu project memiliki banyak gallery
     */
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

}