<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Gallery extends Model
{

    protected $fillable = [
        'project_id',
        'judul',
        'gambar'
    ];



    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}