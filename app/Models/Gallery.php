<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    /**
     * Field yang boleh diisi melalui mass assignment
     */
    protected $fillable = [
        'project_id',
        'judul',
        'gambar'
    ];



    /**
     * Relasi gallery milik project tertentu
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }


}