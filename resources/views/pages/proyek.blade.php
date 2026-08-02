@extends('layouts.app')


@section('content')



<!-- HERO PROYEK -->

<section class="relative py-24 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="uppercase tracking-widest text-sm text-[#C79A3B] font-semibold">

Portfolio

</p>



<h1 class="mt-3 text-4xl md:text-5xl font-bold text-[#3B2508]">

Proyek Kami

</h1>



<p class="mt-5 max-w-3xl mx-auto text-gray-600 leading-relaxed">

Dokumentasi pengalaman pekerjaan
CV Sahabat Eksplorasi Banua dalam bidang
pertambangan, eksplorasi, dan lingkungan
dengan pendekatan profesional berbasis data.

</p>


</div>


</section>







<!-- PROJECT LIST -->


<section class="py-16 bg-white">


<div class="max-w-6xl mx-auto px-6">



@if($projects->count())


<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">



@foreach($projects as $project)



<div
data-aos="fade-up"
class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition duration-500">





<!-- IMAGE -->


<div class="relative overflow-hidden">



@if($project->gambar)


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-60 object-cover
group-hover:scale-110 transition duration-700">


@else


<div class="w-full h-60 bg-gray-200 flex items-center justify-center">

<span class="text-gray-500">

Tidak Ada Dokumentasi

</span>


</div>


@endif




<div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition duration-500">

</div>



</div>







<!-- CONTENT -->


<div class="p-6">





<span class="inline-block
bg-[#C79A3B]/20
text-[#8b6b20]
text-xs
font-semibold
px-3 py-1
rounded-full">


Pertambangan & Lingkungan


</span>






<h2 class="mt-4 text-xl font-bold text-[#3B2508]">


{{ $project->nama_proyek }}


</h2>







<div class="mt-4 space-y-2 text-sm text-gray-500">


<p>

📍 {{ $project->lokasi }}

</p>



<p>

📅 {{ $project->tahun }}

</p>


</div>






<p class="mt-4 text-gray-600 text-sm leading-relaxed">


{{ Str::limit($project->deskripsi,130) }}


</p>






<a href="/proyek/{{ $project->id }}"

class="inline-flex items-center gap-2 mt-6
text-[#3B2508]
font-semibold
hover:text-[#C79A3B]
transition">


Lihat Detail

<span>

→

</span>


</a>



</div>




</div>



@endforeach



</div>




@else



<div class="text-center py-20">


<div class="text-5xl">

📂

</div>


<h3 class="mt-5 text-xl font-bold text-[#3B2508]">

Belum Ada Proyek

</h3>


<p class="mt-2 text-gray-500">

Dokumentasi proyek akan ditampilkan pada halaman ini.

</p>


</div>



@endif




</div>


</section>





<!-- CTA -->


<section class="py-16 bg-[#3B2508] text-white">


<div class="max-w-5xl mx-auto px-6 text-center"
data-aos="fade-up">



<h2 class="text-3xl font-bold">

Memiliki Kebutuhan Serupa?

</h2>



<p class="mt-4 text-gray-300">

Diskusikan kebutuhan konsultasi pertambangan
dan lingkungan bersama tim SEB.

</p>




<a href="/kontak"

class="inline-block mt-7
bg-[#C79A3B]
px-8 py-3
rounded-lg
font-semibold
hover:bg-[#b58a32]
transition">


Hubungi Kami


</a>


</div>


</section>




@endsection