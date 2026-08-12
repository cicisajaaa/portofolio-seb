@extends('admin.layouts.app')


@section('content')


<div class="max-w-5xl mx-auto space-y-8">





<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Management

</p>



<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

Edit Galeri

</h1>



<p class="mt-2 text-gray-500">

Perbarui informasi dokumentasi kegiatan
CV Sahabat Eksplorasi Banua.

</p>



</section>










<!-- FORM -->


<section class="bg-white rounded-2xl border border-gray-100 p-8">


<form

action="{{ route('galleries.update',$gallery->id) }}"

method="POST"

enctype="multipart/form-data">


@csrf

@method('PUT')








<!-- JUDUL -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Judul Dokumentasi

</label>




<input

type="text"

name="judul"

value="{{ old('judul',$gallery->judul) }}"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">





@error('judul')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>









<!-- DESKRIPSI -->


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Deskripsi Dokumentasi

</label>




<textarea

name="deskripsi"

rows="5"

class="w-full mt-2 rounded-xl border-gray-200 focus:border-[#C79A3B] focus:ring-[#C79A3B]">{{ old('deskripsi',$gallery->deskripsi) }}</textarea>





@error('deskripsi')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>









<!-- GAMBAR LAMA -->


@if($gallery->gambar)


<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508] mb-3">

Dokumentasi Saat Ini

</label>




<div class="w-full md:w-72 overflow-hidden rounded-2xl border">


<img

src="{{ asset('storage/'.$gallery->gambar) }}"

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

Kosongkan jika tidak ingin mengganti gambar lama.

</p>





@error('gambar')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>









<!-- BUTTON -->


<div class="flex justify-between items-center pt-5 border-t">





<a href="{{ route('galleries.index') }}"

class="px-6 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-100 transition">


← Kembali


</a>






<button

type="submit"

class="px-7 py-3 rounded-xl bg-[#C79A3B]
hover:bg-[#b38732]
text-white
font-semibold
transition">


Simpan Perubahan


</button>




</div>





</form>


</section>






</div>


@endsection