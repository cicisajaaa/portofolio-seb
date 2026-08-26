<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProjectsImport;



class ProjectImportController extends Controller
{


    public function index()
    {

        return view('admin.projects.import');

    }





    public function store(Request $request)
    {


        $request->validate([

            'file' => 'required|mimes:xlsx,xls'

        ]);




        Excel::import(

            new ProjectsImport,

            $request->file('file')

        );





        return redirect()

            ->route('projects.index')

            ->with(
                'success',
                'Data pengalaman berhasil diimport'
            );


    }


}