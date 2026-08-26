@extends('admin.layouts.app')


@section('content')


<div class="max-w-5xl mx-auto space-y-8">



<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">
Management
</p>



<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">
Tambah Galeri
</h1>



<p class="mt-2 text-gray-500">
Tambahkan dokumentasi kegiatan perusahaan
CV Sahabat Eksplorasi Banua.
</p>


</section>








<!-- FORM -->

<section class="bg-white rounded-2xl border border-gray-100 p-8">


<form

action="{{ route('galleries.store') }}"

method="POST"

enctype="multipart/form-data">


@csrf







<!-- PROJECT -->

<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Pilih Proyek

</label>




<select

name="project_id"

class="
w-full
mt-2
rounded-xl
border-gray-200
focus:border-[#C79A3B]
focus:ring-[#C79A3B]
">


<option value="">

-- Pilih Proyek --

</option>




@foreach($projects as $project)


<option

value="{{ $project->id }}"

{{ old('project_id') == $project->id ? 'selected' : '' }}>


{{ $project->nama_proyek }}

-

{{ $project->perusahaan }}


</option>


@endforeach



</select>





@error('project_id')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>









<!-- JUDUL -->

<div class="mb-6">


<label class="block text-sm font-semibold text-[#3B2508]">

Judul Dokumentasi

</label>




<input

type="text"

name="judul"

value="{{ old('judul') }}"

class="
w-full
mt-2
rounded-xl
border-gray-200
focus:border-[#C79A3B]
focus:ring-[#C79A3B]
"

placeholder="Contoh: Kegiatan Survey Lapangan">





@error('judul')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>









<!-- GAMBAR -->

<div class="mb-8">


<label class="block text-sm font-semibold text-[#3B2508]">

Upload Dokumentasi

</label>




<input

type="file"

name="gambar"

id="gambar"

accept="image/*"

class="
w-full
mt-2
rounded-xl
border-gray-200
">





<p class="text-xs text-gray-400 mt-2">

Format JPG, JPEG, PNG maksimal 2MB.

</p>







<!-- PREVIEW -->

<div

id="preview-container"

class="hidden mt-6">


<p class="
text-sm
font-semibold
text-[#3B2508]
mb-3">

Preview Gambar

</p>




<img

id="preview"

class="
w-72
h-52
object-cover
rounded-xl
border
shadow
">


</div>







@error('gambar')

<p class="text-red-500 text-sm mt-2">

{{ $message }}

</p>

@enderror



</div>









<!-- BUTTON -->

<div class="
flex
justify-between
items-center
pt-5
border-t
">





<a

href="{{ route('galleries.index') }}"

class="
px-6
py-3
rounded-xl
border
border-gray-200
text-gray-600
hover:bg-gray-100
transition
">


← Kembali


</a>







<button

type="submit"

class="
px-7
py-3
rounded-xl
bg-[#C79A3B]
hover:bg-[#b38732]
text-white
font-semibold
transition
">


Simpan Galeri


</button>




</div>







</form>


</section>






</div>









<script>


const gambarInput = document.getElementById('gambar');

const previewImage = document.getElementById('preview');

const previewContainer = document.getElementById('preview-container');



if(gambarInput){


gambarInput.addEventListener('change', function(event){


const file = event.target.files[0];



if(file){


previewImage.src = URL.createObjectURL(file);


previewContainer.classList.remove('hidden');


}



});


}



</script>



@endsection