<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectPublicController extends Controller
{


    /**
     * Halaman Portfolio
     */
    public function index(Request $request)
    {


        $query = Project::query();




        // SEARCH

        if($request->search){

            $query->where(function($q) use ($request){

                $q->where('perusahaan','like','%'.$request->search.'%')
                ->orWhere('nama_proyek','like','%'.$request->search.'%')
                ->orWhere('lokasi','like','%'.$request->search.'%');

            });

        }






        // FILTER TAHUN

        if($request->tahun){

            $query->where('tahun',$request->tahun);

        }







        // FILTER KEGIATAN

        if($request->kegiatan){

            $query->where('kegiatan',$request->kegiatan);

        }






        $projects = $query

            ->latest()

            ->paginate(9)

            ->withQueryString();








        // FILTER DATA

        $tahun = Project::whereNotNull('tahun')

            ->distinct()

            ->orderBy('tahun','desc')

            ->pluck('tahun');






        $kegiatan = Project::whereNotNull('kegiatan')

            ->distinct()

            ->pluck('kegiatan');








        // STATISTIK

        $totalProject = Project::count();



        $tahunTerakhir = Project::max('tahun');



        $totalBidang = Project::whereNotNull('kegiatan')

            ->distinct('kegiatan')

            ->count('kegiatan');








        return view('pages.proyek', compact(

            'projects',

            'tahun',

            'kegiatan',

            'totalProject',

            'tahunTerakhir',

            'totalBidang'

        ));


    }








    /**
     * Detail Project
     */
public function show($id)
{

    $project = Project::with('galleries')
        ->findOrFail($id);



    $relatedProjects = Project::where('id','!=',$id)

        ->latest()

        ->take(3)

        ->get();



    return view('pages.detail-proyek', compact(
        'project',
        'relatedProjects'
    ));

}


}