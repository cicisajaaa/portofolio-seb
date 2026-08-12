@extends('admin.layouts.app')


@section('content')


<div class="max-w-7xl mx-auto space-y-8">



<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<div class="flex flex-col md:flex-row justify-between md:items-center gap-5">



<div>


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Management

</p>



<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

Kelola Proyek

</h1>



<p class="mt-2 text-gray-500">

Mengatur dokumentasi pekerjaan
CV Sahabat Eksplorasi Banua.

</p>



</div>






<a href="{{ route('projects.create') }}"

class="inline-flex items-center justify-center
bg-[#C79A3B]
hover:bg-[#b38732]
text-white
px-6
py-3
rounded-xl
font-semibold
transition
shadow-sm">


+ Tambah Proyek


</a>




</div>


</section>








<!-- PROJECT LIST -->


<section>


<div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">



@forelse($projects as $project)





<div class="bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">





<!-- IMAGE -->

<div class="relative">


@if($project->gambar)


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-52 object-cover">


@else


<div class="h-52 bg-[#F8F7F2] flex items-center justify-center text-gray-400">

Tidak Ada Dokumentasi

</div>


@endif





<div class="absolute top-4 left-4">


<span class="bg-[#C79A3B] text-white text-xs px-3 py-1 rounded-full font-semibold">

Project

</span>


</div>



</div>










<!-- CONTENT -->


<div class="p-6">





<h2 class="text-xl font-bold text-[#3B2508]">

{{ $project->nama_proyek }}

</h2>





<div class="mt-4 space-y-2 text-sm text-gray-500">


<p class="flex items-center gap-2">

📍

{{ $project->lokasi }}

</p>



<p class="flex items-center gap-2">

📅

{{ $project->tahun }}

</p>



</div>







<p class="mt-4 text-sm text-gray-600 leading-relaxed">

{{ Str::limit($project->deskripsi,100) }}

</p>







<div class="flex justify-between items-center mt-6 pt-4 border-t">





<a href="{{ route('projects.edit',$project->id) }}"

class="text-[#C79A3B] font-semibold text-sm hover:text-[#3B2508] transition">


Edit


</a>







<form action="{{ route('projects.destroy',$project->id) }}"

method="POST">


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus proyek ini?')"

class="text-red-500 font-semibold text-sm hover:text-red-700 transition">


Hapus


</button>



</form>





</div>





</div>





</div>






@empty





<div class="col-span-full bg-white rounded-2xl border p-10 text-center">


<div class="text-4xl">

📂

</div>



<h3 class="mt-4 font-bold text-[#3B2508]">

Belum Ada Proyek

</h3>



<p class="mt-2 text-gray-500">

Tambahkan dokumentasi proyek perusahaan.

</p>


</div>





@endforelse




</div>



</section>





</div>


@endsection