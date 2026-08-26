@extends('admin.layouts.app')


@section('content')


<div class="max-w-5xl mx-auto space-y-8">



<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Management

</p>


<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

Edit Pengalaman Kerjasama

</h1>


<p class="mt-2 text-gray-500">

Perbarui data pengalaman pekerjaan
CV Sahabat Eksplorasi Banua.

</p>


</section>









<!-- FORM -->

<section class="bg-white rounded-2xl border border-gray-100 p-8">


<form

action="{{ route('projects.update',$project->id) }}"

method="POST"

enctype="multipart/form-data">


@csrf

@method('PUT')







<!-- INSTANSI -->

<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Instansi Pelaksana

</label>



<input

type="text"

name="instansi"

value="{{ old('instansi',$project->instansi) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">


@error('instansi')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- PERUSAHAAN -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Perusahaan / Pemrakarsa

</label>



<input

type="text"

name="perusahaan"

value="{{ old('perusahaan',$project->perusahaan) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">


@error('perusahaan')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- NAMA KEGIATAN -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Nama Kegiatan / Proyek

</label>



<input

type="text"

name="nama_proyek"

value="{{ old('nama_proyek',$project->nama_proyek) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">


@error('nama_proyek')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- LOKASI -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Lokasi Kegiatan

</label>



<input

type="text"

name="lokasi"

value="{{ old('lokasi',$project->lokasi) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">


@error('lokasi')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- KEGIATAN -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Kegiatan

</label>



<input

type="text"

name="kegiatan"

value="{{ old('kegiatan',$project->kegiatan) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">


@error('kegiatan')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- TAHUN -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Tahun Pelaksanaan

</label>



<input

type="text"

name="tahun"

value="{{ old('tahun',$project->tahun) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">


@error('tahun')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- JENIS PEKERJAAN -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Jenis Pekerjaan

</label>



<textarea

name="jenis_pekerjaan"

rows="5"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">{{ old('jenis_pekerjaan',$project->jenis_pekerjaan) }}</textarea>


@error('jenis_pekerjaan')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- DESKRIPSI -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Deskripsi Tambahan

</label>



<textarea

name="deskripsi"

rows="4"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">{{ old('deskripsi',$project->deskripsi) }}</textarea>


@error('deskripsi')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>









<!-- GAMBAR LAMA -->


@if($project->gambar)


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508] mb-3">

Dokumentasi Saat Ini

</label>



<div class="w-full md:w-72 overflow-hidden rounded-2xl border">


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-44 object-cover">


</div>


</div>


@endif







<!-- GAMBAR BARU -->


<div class="mb-8">


<label class="block text-sm font-semibold text-[#3B2508]">

Ganti Dokumentasi

</label>



<input

type="file"

name="gambar"

accept="image/*"

class="w-full mt-2 rounded-xl border-gray-200">



<p class="text-xs text-gray-400 mt-2">

Kosongkan jika tidak ingin mengganti dokumentasi lama.

</p>



@error('gambar')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror


</div>








<!-- BUTTON -->


<div class="flex justify-between items-center pt-5 border-t">


<a href="{{ route('projects.index') }}"

class="px-6 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-100 transition">


← Kembali


</a>





<button

type="submit"

class="px-7 py-3 rounded-xl bg-[#C79A3B] hover:bg-[#b38732] text-white font-semibold transition">


Simpan Perubahan


</button>



</div>





</form>


</section>



</div>


@endsection