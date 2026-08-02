@extends('layouts.app')


@section('content')


<!-- HERO -->

<section id="beranda"
class="relative min-h-[90vh] flex items-center overflow-hidden pt-20">


<div class="absolute inset-0">


<img
src="{{ asset('assets/images/tambang.jpg') }}"
class="w-full h-full object-cover scale-105 transition duration-[5000ms] hover:scale-110">


<div class="absolute inset-0 bg-black/60"></div>


</div>



<div class="relative max-w-6xl mx-auto px-6 text-white">

<div 
class="max-w-3xl"
data-aos="fade-up"
data-aos-duration="1000">


<h1 class="text-4xl md:text-5xl font-bold leading-snug">

Solusi Profesional Dalam Pengelolaan
Pertambangan dan Lingkungan

</h1>



<p class="mt-5 text-lg text-gray-200 leading-relaxed">

CV Sahabat Eksplorasi Banua menyediakan layanan
konsultasi berbasis data, kajian teknis,
serta pengelolaan lingkungan berkelanjutan.

</p>



<div class="mt-7 flex flex-wrap gap-4">


<a href="/kontak"
class="bg-[#C79A3B] px-7 py-3 rounded-lg font-semibold hover:bg-[#b38732] transition">

Konsultasi Sekarang

</a>



<a href="/tentang"
class="border border-white px-7 py-3 rounded-lg hover:bg-white hover:text-black transition">

Tentang Kami

</a>


</div>


</div>


</div>


</section>





<!-- TENTANG SINGKAT -->


<section class="py-14 bg-white">


<div class="max-w-6xl mx-auto px-6">


<div class="grid md:grid-cols-2 gap-8 items-center">



<div 
data-aos="fade-right"
data-aos-duration="1000">


<img

src="{{ asset('storage/tentang/tentang-kami.jpg') }}"

class="rounded-2xl shadow-lg w-full h-[380px] object-cover">


</div>





<div 
data-aos="fade-left"
data-aos-delay="200"
data-aos-duration="1000">

<h2 class="text-3xl font-bold text-[#3B2508]">

Tentang Kami

</h2>



<h3 class="mt-4 text-xl font-semibold">

CV Sahabat Eksplorasi Banua

</h3>



<p class="mt-4 text-gray-600 leading-relaxed">

Perusahaan konsultan yang bergerak dalam bidang
pertambangan dan lingkungan dengan pendekatan
profesional, teknis, dan berkelanjutan.

</p>



<p class="mt-3 text-gray-600 leading-relaxed">

Kami mendukung kegiatan eksplorasi, kajian teknis,
serta pengelolaan lingkungan melalui analisis data
dan pemahaman regulasi.

</p>



<a href="/tentang"

class="inline-block mt-5 bg-[#3B2508]
text-white px-6 py-2.5 rounded-lg">

Selengkapnya →

</a>


</div>



</div>


</div>


</section>







<!-- LAYANAN -->


<section class="py-16 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6">


<div 
class="text-center mb-10"
data-aos="fade-up">


<h2 class="text-3xl font-bold text-[#3B2508]">

Layanan Kami

</h2>


<p class="mt-3 text-gray-600">

Solusi profesional untuk kebutuhan pertambangan
dan lingkungan.

</p>


</div>




<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">



<div 
data-aos="fade-up"
data-aos-delay="0"
class="bg-white p-7 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">


<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-2xl">

⛏️

</div>


<h3 class="mt-5 font-bold text-lg text-[#3B2508]">

Pertambangan

</h3>


<p class="mt-2 text-gray-600 text-sm">

Kajian teknis, eksplorasi mineral,
dan perencanaan tambang.

</p>


</div>




<div 
data-aos="fade-up"
data-aos-delay="100"
class="bg-white p-7 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">


<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-2xl">

🌱

</div>


<h3 class="mt-5 font-bold text-lg text-[#3B2508]">

Lingkungan

</h3>


<p class="mt-2 text-gray-600 text-sm">

Dokumen lingkungan dan pemantauan
dampak kegiatan.

</p>


</div>



<div 
data-aos="fade-up"
data-aos-delay="200"
class="bg-white p-7 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">


<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-2xl">

🗺️

</div>


<h3 class="mt-5 font-bold text-lg text-[#3B2508]">

Survey

</h3>


<p class="mt-2 text-gray-600 text-sm">

Survey lapangan dan pemetaan wilayah.

</p>


</div>




<div 
data-aos="fade-up"
data-aos-delay="300"
class="bg-white p-7 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300">

<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-2xl">

📊

</div>


<h3 class="mt-5 font-bold text-lg text-[#3B2508]">

Kajian Teknis

</h3>


<p class="mt-2 text-gray-600 text-sm">

Analisis data dan laporan teknis.

</p>


</div>


</div>



<div class="text-center mt-8">


<a href="/layanan"
class="text-[#C79A3B] font-semibold">

Lihat Semua Layanan →

</a>


</div>


</div>


</section>







<!-- PROYEK -->


<section class="py-16 bg-white">


<div class="max-w-6xl mx-auto px-6">


<div 
class="text-center mb-10"
data-aos="fade-up">


<h2 class="text-3xl font-bold text-[#3B2508]">

Proyek Kami

</h2>


<p class="mt-3 text-gray-600">

Dokumentasi pengalaman pekerjaan SEB.

</p>


</div>




<div class="grid md:grid-cols-3 gap-6">



@foreach($projects->take(3) as $project)


<div 
data-aos="zoom-in"
class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition duration-300">


@if($project->gambar)

<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-48 object-cover">

@endif



<div class="p-5">


<h3 class="font-bold text-[#3B2508]">

{{ $project->nama_proyek }}

</h3>


<p class="mt-2 text-sm text-gray-500">

📍 {{ $project->lokasi }}

</p>


</div>


</div>


@endforeach


</div>



<div class="text-center mt-8">


<a href="/proyek"
class="text-[#C79A3B] font-semibold">

Lihat Semua Proyek →

</a>


</div>


</div>


</section>






<!-- CTA -->


<section class="py-12 bg-[#3B2508] text-white">


<div 
data-aos="fade-up"
class="max-w-5xl mx-auto px-6 text-center">

<h2 class="text-3xl font-bold">

Siap Berkonsultasi Dengan Kami?

</h2>


<p class="mt-3 text-gray-200">

Diskusikan kebutuhan pertambangan dan lingkungan
bersama tim profesional SEB.

</p>


<a href="/kontak"

class="inline-block mt-6 bg-[#C79A3B]
px-8 py-3 rounded-lg font-semibold">

Hubungi Kami

</a>


</div>


</section>



@endsection