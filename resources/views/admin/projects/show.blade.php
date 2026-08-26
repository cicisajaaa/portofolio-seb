@extends('admin.layouts.app')


@section('content')


<div class="max-w-6xl mx-auto space-y-8">



<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<div class="flex justify-between items-start gap-5">


<div>


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Portfolio

</p>


<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

{{ $project->nama_proyek }}

</h1>


<p class="mt-3 text-gray-500">

Detail pengalaman pekerjaan
CV Sahabat Eksplorasi Banua.

</p>


</div>




<div class="flex gap-3">


<a href="{{ route('projects.edit',$project->id) }}"

class="
px-6
py-3
rounded-xl
bg-[#C79A3B]
hover:bg-[#b38732]
text-white
font-semibold">

Edit

</a>



<a href="{{ route('projects.index') }}"

class="
px-6
py-3
rounded-xl
border
border-gray-200
text-gray-600
hover:bg-gray-100">

Kembali

</a>


</div>


</div>


</section>









<!-- FOTO -->

@if($project->gambar)

<section class="bg-white rounded-2xl border border-gray-100 overflow-hidden">


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="
w-full
h-[420px]
object-cover">


</section>

@endif







<!-- IDENTITAS PROYEK -->

<section class="bg-white rounded-2xl border border-gray-100 p-8">


<div class="grid md:grid-cols-2 gap-8">



<div>


<p class="text-sm text-gray-500">

Instansi Pelaksana

</p>


<h3 class="mt-2 text-lg font-bold text-[#3B2508]">

{{ $project->instansi ?? '-' }}

</h3>


</div>





<div>


<p class="text-sm text-gray-500">

Perusahaan / Pemrakarsa

</p>


<h3 class="mt-2 text-lg font-bold text-[#3B2508]">

{{ $project->perusahaan ?? '-' }}

</h3>


</div>


</div>


</section>








<!-- INFORMASI PROYEK -->


<section class="bg-white rounded-2xl border border-gray-100 p-8">


<h2 class="text-xl font-bold text-[#3B2508] mb-6">

Informasi Proyek

</h2>




<div class="grid md:grid-cols-3 gap-6">



<div>

<p class="text-sm text-gray-500">

Lokasi

</p>


<p class="mt-2 font-semibold">

{{ $project->lokasi ?? '-' }}

</p>


</div>





<div>

<p class="text-sm text-gray-500">

Tahun Pelaksanaan

</p>


<p class="mt-2 font-semibold">

{{ $project->tahun ?? '-' }}

</p>


</div>





<div>

<p class="text-sm text-gray-500">

Kegiatan

</p>


<p class="mt-2 font-semibold">

{{ $project->kegiatan ?? '-' }}

</p>


</div>


</div>


</section>








<!-- PEKERJAAN -->

<section class="bg-white rounded-2xl border border-gray-100 p-8">


<h2 class="text-xl font-bold text-[#3B2508]">

Jenis Pekerjaan

</h2>



<p class="mt-4 text-gray-600 leading-relaxed">

{{ $project->jenis_pekerjaan ?? '-' }}

</p>


</section>








<!-- DESKRIPSI -->

<section class="bg-[#F8F7F2] rounded-2xl p-8">


<h2 class="text-xl font-bold text-[#3B2508]">

Deskripsi Proyek

</h2>



<p class="mt-4 text-gray-700 leading-relaxed">

{{ $project->deskripsi ?? '-' }}

</p>


</section>






</div>


@endsection