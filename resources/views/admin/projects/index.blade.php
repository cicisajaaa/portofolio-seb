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
Pengalaman Kerjasama
</h1>


<p class="mt-2 text-gray-500">
Mengatur riwayat pekerjaan dan pengalaman
CV Sahabat Eksplorasi Banua.
</p>


</div>





<div class="flex gap-3">

<div class="flex gap-3">


<a href="{{ route('projects.import') }}"

style="
background:#16a34a;
color:white;
display:inline-flex;
align-items:center;
justify-content:center;
"

class="
px-6
py-3
rounded-xl
font-semibold
shadow-sm
transition
hover:opacity-90">


Import Excel


</a>




<a href="{{ route('projects.create') }}"

class="
inline-flex
items-center
justify-center

bg-[#C79A3B]

hover:bg-[#b38732]

text-white

px-6
py-3

rounded-xl

font-semibold

transition">


+ Tambah Pengalaman


</a>


</div>



</div>


</section>









<!-- FILTER -->


<section class="bg-white rounded-2xl border border-gray-100 p-6">


<form method="GET">


<div class="grid md:grid-cols-4 gap-4">



<input

type="text"

name="search"

value="{{ request('search') }}"

placeholder="Cari perusahaan atau proyek..."

class="
h-12
w-full

rounded-xl

border-gray-200

focus:border-[#C79A3B]

focus:ring-[#C79A3B]">





<select

name="tahun"

class="
h-12
w-full

rounded-xl

border-gray-200

focus:border-[#C79A3B]

focus:ring-[#C79A3B]">


<option value="">
Semua Tahun
</option>


@foreach($tahun as $item)


<option

value="{{ $item }}"

{{ request('tahun') == $item ? 'selected' : '' }}>

{{ $item }}

</option>


@endforeach


</select>






<select

name="kegiatan"

class="
h-12
w-full

rounded-xl

border-gray-200

focus:border-[#C79A3B]

focus:ring-[#C79A3B]">


<option value="">
Semua Kegiatan
</option>



@foreach($kegiatan as $item)


<option

value="{{ $item }}"

{{ request('kegiatan') == $item ? 'selected' : '' }}>

{{ $item }}

</option>


@endforeach


</select>






<button

type="submit"

class="
h-12
w-full

rounded-xl

bg-[#3B2508]

hover:bg-[#C79A3B]

text-white

font-semibold

transition">


Cari Data


</button>




</div>


</form>



</section>










<!-- LIST -->


<section>


<div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">



@forelse($projects as $project)



<div class="
bg-white
rounded-2xl
border
border-gray-100
overflow-hidden
hover:shadow-xl
transition">





@if($project->gambar)


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-52 object-cover">


@else


<div class="
h-52
bg-[#F8F7F2]
flex
items-center
justify-center
text-gray-400">


Tidak Ada Dokumentasi


</div>


@endif








<div class="p-6">



<span class="
inline-block
bg-[#C79A3B]
text-white
text-xs
px-3
py-1
rounded-full
font-semibold">


{{ $project->tahun }}


</span>





<h2 class="
mt-4
text-xl
font-bold
text-[#3B2508]">


{{ $project->perusahaan }}


</h2>




<p class="mt-1 text-sm text-gray-500">

{{ $project->instansi }}

</p>







<div class="mt-5 space-y-3 text-sm text-gray-600">


<div>

<span class="font-semibold text-[#3B2508]">
Kegiatan:
</span>

<br>

{{ $project->kegiatan }}

</div>





<div>

<span class="font-semibold text-[#3B2508]">
Lokasi:
</span>

<br>

{{ $project->lokasi }}

</div>





<div>

<span class="font-semibold text-[#3B2508]">
Pekerjaan:
</span>

<br>

{{ Str::limit($project->jenis_pekerjaan,120) }}

</div>


</div>






<div class="mt-5 pt-5 border-t">


<p class="text-sm font-semibold text-[#3B2508]">

{{ $project->nama_proyek }}

</p>


</div>







<div class="flex justify-between items-center mt-6 pt-4 border-t">



<div class="flex gap-4">


<a href="{{ route('projects.show',$project->id) }}"

class="text-blue-600 font-semibold text-sm">

Lihat

</a>



<a href="{{ route('projects.edit',$project->id) }}"

class="text-[#C79A3B] font-semibold text-sm">

Edit

</a>


</div>







<form action="{{ route('projects.destroy',$project->id) }}"

method="POST">


@csrf

@method('DELETE')


<button

onclick="return confirm('Hapus pengalaman ini?')"

class="text-red-500 font-semibold text-sm">

Hapus

</button>


</form>



</div>





</div>


</div>




@empty


<div class="col-span-full bg-white rounded-2xl border p-10 text-center">


<h3 class="font-bold text-[#3B2508]">

Belum Ada Pengalaman Kerjasama

</h3>


<p class="mt-2 text-gray-500">

Tambahkan riwayat pekerjaan perusahaan.

</p>


</div>



@endforelse



</div>


</section>



</div>


@endsection