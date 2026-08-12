<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;


class GalleryController extends Controller
{


    /**
     * Menampilkan daftar galeri
     */
    public function index()
    {

        $galleries = Gallery::latest()->get();


        return view('admin.galleries.index', compact('galleries'));

    }




    /**
     * Form tambah galeri
     */
    public function create()
    {

        return view('admin.galleries.create');

    }





    /**
     * Simpan galeri baru
     */
    public function store(Request $request)
    {


        $request->validate([

            'judul' => 'required',

            'deskripsi' => 'nullable',

            'gambar' => 'required|image|max:2048'

        ]);



        $data = $request->all();



        if($request->hasFile('gambar')){


            $data['gambar'] =
            $request->file('gambar')->store('gallery','public');


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


        return view('admin.galleries.edit', compact('gallery'));


    }







    /**
     * Update galeri
     */
    public function update(Request $request, Gallery $gallery)
    {


        $request->validate([

            'judul'=>'required',

            'deskripsi'=>'nullable',

            'gambar'=>'nullable|image|max:2048'

        ]);



        $data = $request->except('gambar');



        if($request->hasFile('gambar')){


            $data['gambar'] =
            $request->file('gambar')->store('gallery','public');


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


        $gallery->delete();



        return back()

        ->with('success','Galeri berhasil dihapus');


    }



}