<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{

    /**
     * Menampilkan daftar galeri
     */
    public function index()
    {
        $galleries = Gallery::with('project')
            ->latest()
            ->get();


        return view('admin.galleries.index', compact('galleries'));
    }




    /**
     * Form tambah galeri
     */
    public function create()
    {
        $projects = Project::latest()->get();


        return view('admin.galleries.create', compact('projects'));
    }




    /**
     * Simpan galeri baru
     */
    public function store(Request $request)
    {

        $request->validate([

            'project_id' => 'required|exists:projects,id',

            'judul' => 'required|string|max:255',

            'gambar' => 'required|image|max:2048'

        ]);



        $data = $request->only([

            'project_id',

            'judul'

        ]);



        if($request->hasFile('gambar')){

            $data['gambar'] = $request
                ->file('gambar')
                ->store('gallery','public');

        }



        Gallery::create($data);



        return redirect()

            ->route('galleries.index')

            ->with('success','Galeri berhasil ditambahkan');

    }





    /**
     * Form edit galeri
     */
    public function edit(Gallery $gallery)
    {

        $projects = Project::latest()->get();


        return view('admin.galleries.edit', compact(
            'gallery',
            'projects'
        ));

    }





    /**
     * Update galeri
     */
    public function update(Request $request, Gallery $gallery)
    {

        $request->validate([

            'project_id' => 'required|exists:projects,id',

            'judul' => 'required|string|max:255',

            'gambar' => 'nullable|image|max:2048'

        ]);



        $data = $request->only([

            'project_id',

            'judul'

        ]);




        if($request->hasFile('gambar')){


            // hapus gambar lama

            if($gallery->gambar){

                Storage::disk('public')
                    ->delete($gallery->gambar);

            }



            $data['gambar'] = $request
                ->file('gambar')
                ->store('gallery','public');

        }




        $gallery->update($data);



        return redirect()

            ->route('galleries.index')

            ->with('success','Galeri berhasil diperbarui');

    }





    /**
     * Hapus galeri
     */
    public function destroy(Gallery $gallery)
    {


        if($gallery->gambar){

            Storage::disk('public')
                ->delete($gallery->gambar);

        }



        $gallery->delete();



        return back()

            ->with('success','Galeri berhasil dihapus');

    }

}