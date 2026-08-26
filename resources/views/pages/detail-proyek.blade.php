@extends('layouts.app')


@section('content')



<!-- HERO -->

<section class="relative pt-20">


<div class="relative h-[520px]">


@if($project->gambar)

<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-full object-cover">


@else


<div class="w-full h-full bg-gray-300"></div>


@endif



<div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>





<div class="absolute inset-0 flex items-center">


<div class="max-w-6xl mx-auto px-6 text-white w-full"
data-aos="fade-up">



<p class="
text-sm
uppercase
tracking-widest
text-[#C79A3B]
mb-4">

Pengalaman Kerjasama

</p>


<h1 class="
text-4xl
md:text-6xl
font-bold
leading-tight
max-w-4xl">


{{ $project->nama_proyek }}


</h1>




<p class="
mt-4
text-xl
text-[#C79A3B]
font-semibold">


{{ $project->instansi }}


</p>





<p class="
mt-5
text-lg
text-gray-200
max-w-3xl">


CV Sahabat Eksplorasi Banua melaksanakan
kegiatan konsultasi pertambangan dan lingkungan
sesuai kebutuhan pekerjaan dan standar teknis
yang berlaku.


</p>




</div>


</div>


</div>


</section>










<!-- INFORMASI UTAMA -->


<section class="relative -mt-20 z-10">


<div class="max-w-6xl mx-auto px-6">



<div class="
bg-white
rounded-2xl
shadow-xl
p-8">


<div class="
grid
md:grid-cols-4
gap-6">





<div>


<p class="text-sm text-gray-500">

Instansi Pelaksana

</p>


<h3 class="
mt-2
font-bold
text-[#3B2508]">


{{ $project->instansi }}


</h3>


</div>







<div>


<p class="text-sm text-gray-500">

Lokasi Kegiatan

</p>


<h3 class="
mt-2
font-bold
text-[#3B2508]">


📍 {{ $project->lokasi }}


</h3>


</div>








<div>


<p class="text-sm text-gray-500">

Tahun Pelaksanaan

</p>


<h3 class="
mt-2
font-bold
text-[#3B2508]">


📅 {{ $project->tahun }}


</h3>


</div>







<div>


<p class="text-sm text-gray-500">

Kegiatan

</p>


<h3 class="
mt-2
font-bold
text-[#3B2508]">


{{ $project->kegiatan }}


</h3>


</div>





</div>


</div>


</div>


</section>









<!-- DETAIL PEKERJAAN -->


<section class="py-20 bg-white">


<div class="max-w-6xl mx-auto px-6">


<div class="grid md:grid-cols-3 gap-10">





<!-- MAIN -->


<div class="md:col-span-2"
data-aos="fade-right">



<h2 class="
text-3xl
font-bold
text-[#3B2508]">


Detail Pekerjaan


</h2>






<div class="
mt-6
space-y-5
text-gray-600
leading-relaxed">


<div>


<h3 class="
font-bold
text-[#3B2508]">


Nama Kegiatan


</h3>


<p class="mt-2">


{{ $project->nama_proyek }}


</p>


</div>






<div>


<h3 class="
font-bold
text-[#3B2508]">


Jenis Pekerjaan


</h3>


<p class="mt-2">


{{ $project->jenis_pekerjaan }}


</p>


</div>






@if($project->deskripsi)


<div>


<h3 class="
font-bold
text-[#3B2508]">


Keterangan Tambahan


</h3>


<p class="mt-2">


{{ $project->deskripsi }}


</p>


</div>


@endif




</div>



</div>









<!-- SIDEBAR -->


<div

data-aos="fade-left"

class="
bg-[#F8F7F2]
rounded-2xl
p-7">


<h3 class="
text-xl
font-bold
text-[#3B2508]">


Informasi Pekerjaan


</h3>






<div class="
mt-6
space-y-6">





<div>


<p class="text-sm text-gray-500">

Perusahaan


</p>


<p class="
mt-4
text-xl
text-[#C79A3B]
font-semibold">


{{ $project->perusahaan }}


</p>


</div>







<div>


<p class="text-sm text-gray-500">

Bidang Kegiatan


</p>


<p class="font-semibold text-[#3B2508]">


{{ $project->kegiatan }}


</p>


</div>







<div>


<p class="text-sm text-gray-500">

Lokasi


</p>


<p class="font-semibold text-[#3B2508]">


{{ $project->lokasi }}


</p>


</div>







<div>


<p class="text-sm text-gray-500">

Tahun


</p>


<p class="font-semibold text-[#3B2508]">


{{ $project->tahun }}


</p>


</div>




</div>



</div>






</div>


</div>


</section>




<!-- DOKUMENTASI PEKERJAAN -->

@if($project->galleries->count())


<section class="py-20 bg-white">


<div class="max-w-6xl mx-auto px-6">


<div class="text-center mb-10">


<p class="
text-sm
uppercase
tracking-widest
text-[#C79A3B]
font-semibold">

Dokumentasi

</p>


<h2 class="
mt-3
text-3xl
font-bold
text-[#3B2508]">

Dokumentasi Pekerjaan

</h2>


<p class="
mt-3
text-gray-600">

Beberapa dokumentasi kegiatan pelaksanaan pekerjaan.

</p>


</div>





<div class="
grid
md:grid-cols-3
gap-6">


@foreach($project->galleries as $gallery)


<div
class="
bg-[#F8F7F2]
rounded-2xl
overflow-hidden
group
"
data-aos="fade-up">

<img

src="{{ asset('storage/'.$gallery->gambar) }}"

onclick="window.open(this.src)"

class="
cursor-pointer
w-full
h-72
object-cover
group-hover:scale-110
transition
duration-700
">

<div class="p-5">


<h3 class="
font-bold
text-[#3B2508]">

{{ $gallery->judul }}

</h3>


</div>


</div>


@endforeach


</div>


</div>


</section>


@endif




<!-- RUANG LINGKUP -->


<section class="py-16 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6">


<div class="text-center mb-10">


<h2 class="
text-3xl
font-bold
text-[#3B2508]">


Lingkup Pekerjaan


</h2>


<p class="
mt-3
text-gray-600">


Bidang pekerjaan yang dilaksanakan
dalam kegiatan konsultasi.


</p>


</div>







<div class="
bg-white
rounded-2xl
p-8
shadow-sm">


<p class="
text-gray-700
leading-relaxed
text-center">


{{ $project->jenis_pekerjaan }}


</p>


</div>





</div>


</section>





<!-- RELATED PROJECT -->


@if($relatedProjects->count())


<section class="py-20 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6">



<div class="text-center mb-12">


<p class="
text-sm
uppercase
tracking-[0.3em]
text-[#C79A3B]
font-semibold">


Portfolio


</p>



<h2 class="
mt-4
text-3xl
font-bold
text-[#3B2508]">


Proyek Lainnya


</h2>



</div>







<div class="
grid
md:grid-cols-3
gap-6">





@foreach($relatedProjects as $item)



<div class="
bg-white
rounded-2xl
overflow-hidden
border
border-gray-100
hover:shadow-xl
transition">






@if($item->gambar)


<img

src="{{ asset('storage/'.$item->gambar) }}"

class="
w-full
h-48
object-cover">


@endif







<div class="p-5">



<p class="
text-xs
uppercase
tracking-widest
text-[#C79A3B]">


{{ $item->tahun }}


</p>






<h3 class="
mt-3
font-bold
text-[#3B2508]">


{{ $item->nama_proyek }}


</h3>






<p class="
mt-2
text-sm
text-gray-500">


{{ $item->perusahaan }}


</p>


<p class="
mt-2
text-xs
text-gray-400">


📍 {{ $item->lokasi }}


</p>




<a

href="{{ route('proyek.detail',$item->id) }}"

class="
inline-flex
mt-4
text-sm
font-semibold
text-[#3B2508]
hover:text-[#C79A3B]">


Lihat Detail →


</a>



</div>



</div>





@endforeach




</div>



</div>


</section>


@endif
<!-- CTA -->


<section class="py-16 bg-[#3B2508] text-white">


<div class="max-w-5xl mx-auto px-6 text-center">


<h2 class="
text-3xl
font-bold">


Memiliki Kebutuhan Pekerjaan Serupa?


</h2>





<p class="
mt-4
text-gray-300">


Hubungi CV Sahabat Eksplorasi Banua
untuk konsultasi pertambangan dan lingkungan.


</p>



<div class="flex justify-center gap-4 flex-wrap">


<a href="{{ route('kontak') }}"

class="
inline-block
mt-7
bg-[#C79A3B]
px-8
py-3
rounded-lg
font-semibold
hover:bg-[#b58a32]
transition">


Konsultasi Sekarang


</a>



<a href="{{ route('proyek') }}"

class="
inline-block
mt-7
border
border-white/40
px-8
py-3
rounded-lg
font-semibold
hover:bg-white
hover:text-[#3B2508]
transition">


Lihat Portfolio


</a>


</div>

</div>


</section>





@endsection