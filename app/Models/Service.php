<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan',
        'slug',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'ikon',
        'gambar',
    ];

    // Otomatis membuat slug dari nama layanan
    public function setNamaLayananAttribute($value)
    {
        $this->attributes['nama_layanan'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}