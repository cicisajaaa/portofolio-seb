@extends('admin.layouts.app')


@section('content')


<div class="max-w-5xl mx-auto space-y-8">





<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Management

</p>



<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

Tambah Proyek

</h1>



<p class="mt-2 text-gray-500">

Tambahkan dokumentasi pekerjaan baru
CV Sahabat Eksplorasi Banua.

</p>



</section>








<!-- FORM -->


<section class="bg-white rounded-2xl border border-gray-100 p-8">



<form 

action="{{ route('projects.store') }}"

method="POST"

enctype="multipart/form-data">


@csrf








<!-- NAMA -->

<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Nama Proyek

</label>



<input

type="text"

name="nama_proyek"

value="{{ old('nama_proyek') }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]"

placeholder="Contoh: Kajian Tambang Batubara">



@error('nama_proyek')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>








<!-- LOKASI -->

<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Lokasi Proyek

</label>



<input

type="text"

name="lokasi"

value="{{ old('lokasi') }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]"

placeholder="Contoh: Banjarbaru, Kalimantan Selatan">



@error('lokasi')

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

type="number"

name="tahun"

value="{{ old('tahun') }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]"

placeholder="2026">



@error('tahun')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>








<!-- DESKRIPSI -->

<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Deskripsi Proyek

</label>



<textarea

name="deskripsi"

rows="5"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]"

placeholder="Jelaskan kegiatan proyek...">{{ old('deskripsi') }}</textarea>




@error('deskripsi')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>








<!-- GAMBAR -->

<div class="mb-8">


<label class="block text-sm font-semibold text-[#3B2508]">

Dokumentasi Proyek

</label>




<input

type="file"

name="gambar"

accept="image/*"

class="w-full mt-2 rounded-xl border-gray-200">



<p class="text-xs text-gray-400 mt-2">

Format JPG, JPEG, PNG maksimal 2MB.

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

class="px-7 py-3 rounded-xl bg-[#C79A3B] hover:bg-[#b38732] text-white font-semibold transition shadow-sm">


Simpan Proyek


</button>



</div>





</form>


</section>





</div>


@endsection