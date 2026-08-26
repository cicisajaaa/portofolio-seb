<?php

namespace App\Imports;


use App\Models\Project;

use Illuminate\Database\Eloquent\Model;

use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\SkipsEmptyRows;



class ProjectsImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{


    public function model(array $row): Model|null
    {


        // Skip jika nama proyek kosong

        if(empty($row['nama_proyek'])){

            return null;

        }



        return new Project([


            'instansi' => $row['instansi'] ?? null,


            'perusahaan' => $row['perusahaan'] ?? null,


            'nama_proyek' => $row['nama_proyek'],


            'lokasi' => $row['lokasi'] ?? null,


            'kegiatan' => $row['kegiatan'] ?? null,


            'tahun' => $row['tahun'] ?? null,


            'jenis_pekerjaan' => $row['jenis_pekerjaan'] ?? null,


            'deskripsi' => $row['deskripsi'] ?? null,


        ]);


    }


}