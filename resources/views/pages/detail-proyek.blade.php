@extends('layouts.app')


@section('content')



<!-- HERO PROJECT -->

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



<p class="text-sm uppercase tracking-widest text-[#C79A3B] mb-4">

Portofolio Proyek

</p>



<h1 class="text-4xl md:text-6xl font-bold leading-tight max-w-4xl">

{{ $project->nama_proyek }}

</h1>



<p class="mt-5 text-lg text-gray-200 max-w-2xl">

Dokumentasi pengalaman pekerjaan
CV Sahabat Eksplorasi Banua dalam mendukung
kegiatan pertambangan dan lingkungan.

</p>



</div>


</div>


</div>


</section>







<!-- INFORMASI UTAMA -->


<section class="relative -mt-20 z-10">


<div class="max-w-6xl mx-auto px-6">



<div class="bg-white rounded-2xl shadow-xl p-8">


<div class="grid md:grid-cols-3 gap-6">



<div>


<p class="text-sm text-gray-500">

Lokasi Proyek

</p>


<h3 class="mt-2 font-bold text-[#3B2508] text-lg">

📍 {{ $project->lokasi }}

</h3>


</div>




<div>


<p class="text-sm text-gray-500">

Tahun Pelaksanaan

</p>


<h3 class="mt-2 font-bold text-[#3B2508] text-lg">

📅 {{ $project->tahun }}

</h3>


</div>




<div>


<p class="text-sm text-gray-500">

Kategori

</p>


<h3 class="mt-2 font-bold text-[#3B2508] text-lg">

Pertambangan & Lingkungan

</h3>


</div>



</div>


</div>


</div>


</section>








<!-- DETAIL PROYEK -->


<section class="py-20 bg-white">


<div class="max-w-6xl mx-auto px-6">


<div class="grid md:grid-cols-3 gap-10">



<!-- Deskripsi -->


<div class="md:col-span-2"
data-aos="fade-right">


<h2 class="text-3xl font-bold text-[#3B2508]">

Ringkasan Proyek

</h2>



<p class="mt-5 text-gray-600 leading-relaxed text-lg">


{{ $project->deskripsi }}


</p>



<p class="mt-5 text-gray-600 leading-relaxed">


CV Sahabat Eksplorasi Banua melaksanakan pekerjaan
dengan pendekatan profesional melalui proses
pengumpulan data, analisis teknis, serta penyusunan
hasil kajian berdasarkan kebutuhan pekerjaan.

</p>


</div>







<!-- SIDEBAR -->


<div 
data-aos="fade-left"
class="bg-[#F8F7F2] rounded-2xl p-7">


<h3 class="text-xl font-bold text-[#3B2508]">

Informasi Pekerjaan

</h3>



<div class="mt-6 space-y-5">



<div>

<p class="text-sm text-gray-500">

Bidang

</p>

<p class="font-semibold">

Konsultasi Pertambangan

</p>

</div>




<div>

<p class="text-sm text-gray-500">

Metode

</p>

<p class="font-semibold">

Kajian Teknis & Analisis Data

</p>

</div>




<div>

<p class="text-sm text-gray-500">

Pendekatan

</p>

<p class="font-semibold">

Profesional dan Berkelanjutan

</p>

</div>



</div>


</div>



</div>


</div>


</section>







<!-- RUANG LINGKUP -->


<section class="py-16 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6">


<div class="text-center mb-10">


<h2 class="text-3xl font-bold text-[#3B2508]">

Ruang Lingkup Pekerjaan

</h2>


<p class="mt-3 text-gray-600">

Tahapan pekerjaan yang mendukung keberhasilan proyek.

</p>


</div>





<div class="grid md:grid-cols-4 gap-6">



<div class="bg-white rounded-xl p-6 text-center shadow-sm">


<div class="text-3xl">

🔎

</div>


<h3 class="mt-4 font-bold">

Survey

</h3>


<p class="mt-2 text-sm text-gray-600">

Pengumpulan data lapangan.

</p>


</div>





<div class="bg-white rounded-xl p-6 text-center shadow-sm">


<div class="text-3xl">

📊

</div>


<h3 class="mt-4 font-bold">

Analisis

</h3>


<p class="mt-2 text-sm text-gray-600">

Pengolahan data teknis.

</p>


</div>





<div class="bg-white rounded-xl p-6 text-center shadow-sm">


<div class="text-3xl">

📝

</div>


<h3 class="mt-4 font-bold">

Kajian

</h3>


<p class="mt-2 text-sm text-gray-600">

Penyusunan hasil pekerjaan.

</p>


</div>





<div class="bg-white rounded-xl p-6 text-center shadow-sm">


<div class="text-3xl">

✅

</div>


<h3 class="mt-4 font-bold">

Evaluasi

</h3>


<p class="mt-2 text-sm text-gray-600">

Rekomendasi teknis.

</p>


</div>



</div>


</div>


</section>







<!-- CTA -->


<section class="py-16 bg-[#3B2508] text-white">


<div class="max-w-5xl mx-auto px-6 text-center">


<h2 class="text-3xl font-bold">

Memiliki Kebutuhan Pekerjaan Serupa?

</h2>



<p class="mt-4 text-gray-300">

Hubungi CV Sahabat Eksplorasi Banua untuk
konsultasi pertambangan dan lingkungan.

</p>



<a href="/kontak"

class="inline-block mt-7 bg-[#C79A3B]
px-8 py-3 rounded-lg font-semibold
hover:bg-[#b58a32] transition">


Konsultasi Sekarang

</a>


</div>


</section>





@endsection