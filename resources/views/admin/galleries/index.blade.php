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

Kelola Galeri

</h1>



<p class="mt-2 text-gray-500">

Mengatur dokumentasi kegiatan dan pengalaman
CV Sahabat Eksplorasi Banua.

</p>


</div>







<a href="{{ route('galleries.create') }}"

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


+ Tambah Galeri


</a>



</div>


</section>







<!-- SUCCESS -->

@if(session('success'))


<div class="bg-green-100 text-green-700 px-5 py-4 rounded-xl">

{{ session('success') }}

</div>


@endif







<!-- LIST -->


<section>


<div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">



@forelse($galleries as $gallery)





<div class="
bg-white
rounded-2xl
border
border-gray-100
overflow-hidden
hover:shadow-xl
transition
duration-300">






<!-- IMAGE -->


<div class="relative">


@if($gallery->gambar)


<img

src="{{ asset('storage/'.$gallery->gambar) }}"

loading="lazy"

class="w-full h-56 object-cover">


@else


<div class="
w-full
h-56
bg-[#F8F7F2]
flex
items-center
justify-center
text-gray-400">


Tidak Ada Gambar


</div>


@endif





<div class="absolute top-4 left-4">


<span class="
bg-[#C79A3B]
text-white
text-xs
px-3
py-1
rounded-full
font-semibold">


Dokumentasi


</span>


</div>



</div>









<!-- CONTENT -->


<div class="p-6">





<h2 class="
text-xl
font-bold
text-[#3B2508]">


{{ $gallery->judul }}


</h2>









@if($gallery->project)


<div class="mt-4 bg-[#F8F7F2] rounded-xl p-4">


<p class="text-xs text-gray-500">

Project

</p>



<p class="
mt-1
font-semibold
text-[#3B2508]">


{{ $gallery->project->nama_proyek }}


</p>





<p class="
text-sm
text-[#C79A3B]">


{{ $gallery->project->perusahaan }}


</p>



</div>


@else


<div class="mt-4 bg-gray-50 rounded-xl p-4">


<p class="text-sm text-gray-400">

Belum terhubung dengan project


</p>


</div>


@endif







<div class="flex justify-between items-center mt-6 pt-4 border-t">





<a href="{{ route('galleries.edit',$gallery->id) }}"

class="
text-[#C79A3B]
hover:text-[#3B2508]
font-semibold
text-sm
transition">


Edit


</a>







<form

action="{{ route('galleries.destroy',$gallery->id) }}"

method="POST">


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus dokumentasi ini?')"

class="
text-red-500
hover:text-red-700
font-semibold
text-sm
transition">


Hapus


</button>



</form>





</div>



</div>





</div>






@empty



<div class="col-span-full">


<div class="
bg-white
rounded-2xl
border
border-gray-100
p-10
text-center">


<div class="text-4xl">

📷

</div>



<h3 class="
mt-4
text-xl
font-bold
text-[#3B2508]">


Belum Ada Dokumentasi


</h3>



<p class="mt-2 text-gray-500">

Silakan tambahkan dokumentasi kegiatan perusahaan.

</p>





<a href="{{ route('galleries.create') }}"

class="
inline-flex
mt-6
bg-[#C79A3B]
hover:bg-[#b38732]
text-white
px-6
py-3
rounded-xl
font-semibold
transition">


+ Tambah Galeri


</a>



</div>


</div>




@endforelse



</div>


</section>





</div>


@endsection