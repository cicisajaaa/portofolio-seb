<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
public function index(Request $request)
{

    $query = Project::query();



    // Pencarian

    if($request->filled('search')){


        $query->where(function($q) use ($request){


            $q->where('perusahaan','like','%'.$request->search.'%')

            ->orWhere('nama_proyek','like','%'.$request->search.'%')

            ->orWhere('instansi','like','%'.$request->search.'%');


        });


    }





    // Filter Tahun

    if($request->filled('tahun')){


        $query->where('tahun',$request->tahun);


    }





    // Filter Kegiatan

    if($request->filled('kegiatan')){


        $query->where('kegiatan',$request->kegiatan);


    }





    $projects = $query

        ->latest()

        ->get();






    // Dropdown Tahun (hapus data kosong)

    $tahun = Project::whereNotNull('tahun')

        ->where('tahun','!=','')

        ->select('tahun')

        ->distinct()

        ->orderBy('tahun','desc')

        ->pluck('tahun');






    // Dropdown Kegiatan (hapus NULL dan kosong)

    $kegiatan = Project::whereNotNull('kegiatan')

        ->where('kegiatan','!=','')

        ->select('kegiatan')

        ->distinct()

        ->orderBy('kegiatan')

        ->pluck('kegiatan');






    return view('admin.projects.index', compact(

        'projects',

        'tahun',

        'kegiatan'

    ));

}



    public function create()
    {
        return view('admin.projects.create');
    }




    public function store(Request $request)
    {

        $request->validate([

            'instansi' => 'required',

            'perusahaan' => 'required',

            'nama_proyek' => 'required',

            'lokasi' => 'required',

            'kegiatan' => 'required',

            'tahun' => 'required',

            'jenis_pekerjaan' => 'required',

            'deskripsi' => 'nullable',

            'gambar' => 'nullable|image|max:2048'

        ]);



        $data = $request->except('gambar');



        if($request->hasFile('gambar')){

            $data['gambar'] =
            $request->file('gambar')
            ->store('projects','public');

        }



        Project::create($data);



        return redirect()
        ->route('projects.index')
        ->with('success','Pengalaman pekerjaan berhasil ditambahkan');

    }



public function show(Project $project)
{

    return view('admin.projects.show', compact('project'));

}

    public function edit(Project $project)
    {

        return view('admin.projects.edit', compact('project'));

    }





    public function update(Request $request, Project $project)
    {


        $request->validate([

            'instansi' => 'required',

            'perusahaan' => 'required',

            'nama_proyek' => 'required',

            'lokasi' => 'required',

            'kegiatan' => 'required',

            'tahun' => 'required',

            'jenis_pekerjaan' => 'required',

            'deskripsi' => 'nullable',

            'gambar' => 'nullable|image|max:2048'

        ]);




        $data = $request->except('gambar');




        if($request->hasFile('gambar')){


            $data['gambar'] =
            $request->file('gambar')
            ->store('projects','public');


        }




        $project->update($data);




        return redirect()

        ->route('projects.index')

        ->with('success','Pengalaman pekerjaan berhasil diperbarui');


    }





    public function destroy(Project $project)
    {

        $project->delete();


        return back();

    }

}