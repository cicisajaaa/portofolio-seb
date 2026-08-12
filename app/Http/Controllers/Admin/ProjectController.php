<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;



class ProjectController extends Controller
{


public function index()
{

$projects = Project::latest()->get();


return view('admin.projects.index', compact('projects'));

}



public function create()
{

return view('admin.projects.create');

}



public function store(Request $request)
{


$request->validate([

'nama_proyek'=>'required',
'lokasi'=>'required',
'tahun'=>'required',
'deskripsi'=>'required',
'gambar'=>'nullable|image'

]);



$data = $request->all();



if($request->hasFile('gambar')){


$data['gambar'] =
$request->file('gambar')->store('projects','public');


}



Project::create($data);



return redirect()
->route('projects.index')
->with('success','Proyek berhasil ditambahkan');


}



public function destroy(Project $project)
{

$project->delete();


return back();

}

public function edit(Project $project)
{

    return view('admin.projects.edit', compact('project'));

}



public function update(Request $request, Project $project)
{


$request->validate([

    'nama_proyek'=>'required',
    'lokasi'=>'required',
    'tahun'=>'required',
    'deskripsi'=>'required',
    'gambar'=>'nullable|image|max:2048'

]);



$data = $request->except('gambar');



if($request->hasFile('gambar')){


    $data['gambar'] = 
    $request->file('gambar')->store('projects','public');


}



$project->update($data);



return redirect()

->route('projects.index')

->with('success','Proyek berhasil diperbarui');


}

}