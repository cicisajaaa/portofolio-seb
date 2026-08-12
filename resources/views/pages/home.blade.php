@extends('layouts.app')


@section('content')


<!-- HERO -->
<!-- HERO -->

<section id="beranda"
class="relative min-h-[92vh] flex items-center overflow-hidden">


<div class="absolute inset-0">


<img
src="{{ asset('assets/images/tambang.jpg') }}"
class="w-full h-full object-cover scale-105">


<div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>


</div>





<div class="relative max-w-7xl mx-auto px-6 w-full">


<div 
class="max-w-4xl text-white"
data-aos="fade-up"
data-aos-duration="1000">



<div class="inline-flex items-center gap-3 
bg-white/10 backdrop-blur-sm
border border-white/20
px-5 py-2
rounded-full">


<span class="w-2 h-2 rounded-full bg-[#C79A3B]"></span>


<p class="text-sm tracking-[0.25em] uppercase">

Mining & Environmental Consultant

</p>


</div>





<h1 class="mt-7 text-4xl md:text-6xl font-bold leading-tight">


Mitra Profesional Dalam
<br>

Pengelolaan Pertambangan
<br>

dan Lingkungan


</h1>





<p class="mt-6 max-w-3xl text-lg text-gray-200 leading-relaxed">


CV Sahabat Eksplorasi Banua menyediakan layanan
konsultasi berbasis data melalui kajian teknis,
eksplorasi, survey lapangan, serta pengelolaan
lingkungan berkelanjutan.


</p>







<div class="mt-8 flex flex-wrap gap-4">



<a href="#proyek"

class="bg-[#C79A3B]
hover:bg-[#b38732]
px-8
py-3.5
rounded-xl
font-semibold
shadow-lg
transition">


Lihat Portofolio


</a>




<a href="{{ route('kontak') }}"

class="border border-white/70
hover:bg-white
hover:text-[#3B2508]
px-8
py-3.5
rounded-xl
font-semibold
transition">


Konsultasi Sekarang


</a>



</div>








<!-- STATISTIK -->


<div class="mt-14 grid grid-cols-3 gap-6 max-w-xl">



<div>

<h3 class="text-3xl font-bold text-[#C79A3B]">

10+

</h3>

<p class="text-sm text-gray-300">

Proyek Terlaksana

</p>


</div>





<div>

<h3 class="text-3xl font-bold text-[#C79A3B]">

4

</h3>

<p class="text-sm text-gray-300">

Bidang Layanan

</p>


</div>





<div>

<h3 class="text-3xl font-bold text-[#C79A3B]">

100%

</h3>

<p class="text-sm text-gray-300">

Komitmen Profesional

</p>


</div>



</div>



</div>


</div>


</section>
<!-- TENTANG SINGKAT -->

<section class="py-24 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid lg:grid-cols-2 gap-14 items-center">





<!-- IMAGE -->


<div 
data-aos="fade-right"
class="relative">


<img

src="{{ asset('storage/tentang/tentang-kami.jpg') }}"

class="rounded-3xl shadow-xl w-full h-[450px] object-cover">





<div class="absolute -bottom-6 -right-6 
bg-[#3B2508]
text-white
rounded-2xl
p-6
shadow-xl
hidden md:block">


<p class="text-3xl font-bold text-[#C79A3B]">

SEB

</p>


<p class="text-sm text-gray-300">

Professional Mining Consultant

</p>


</div>



</div>







<!-- CONTENT -->


<div data-aos="fade-left">



<p class="text-sm uppercase tracking-[0.3em] 
text-[#C79A3B] font-semibold">

Tentang Kami

</p>




<h2 class="mt-4 text-4xl font-bold text-[#3B2508] leading-tight">


Membangun Solusi
Pertambangan dan Lingkungan
Yang Berkelanjutan


</h2>





<p class="mt-6 text-gray-600 leading-relaxed">


CV Sahabat Eksplorasi Banua merupakan perusahaan
konsultan yang bergerak dalam bidang pertambangan
dan lingkungan dengan pendekatan profesional,
teknis, dan berbasis data.


</p>





<p class="mt-4 text-gray-600 leading-relaxed">


Kami mendukung kegiatan eksplorasi, kajian teknis,
survey lapangan, serta pengelolaan lingkungan
melalui pemahaman regulasi dan standar industri.


</p>






<!-- POINT -->

<div class="mt-8 grid sm:grid-cols-2 gap-5">



<div class="flex gap-3 items-start">


<div class="w-10 h-10 rounded-xl 
bg-[#C79A3B]/20
flex items-center justify-center">


✓


</div>


<div>


<h4 class="font-bold text-[#3B2508]">

Profesional

</h4>


<p class="text-sm text-gray-500">

Pelayanan berbasis kompetensi teknis.

</p>


</div>


</div>







<div class="flex gap-3 items-start">


<div class="w-10 h-10 rounded-xl 
bg-[#C79A3B]/20
flex items-center justify-center">


✓


</div>


<div>


<h4 class="font-bold text-[#3B2508]">

Berbasis Data

</h4>


<p class="text-sm text-gray-500">

Analisis akurat dan terukur.

</p>


</div>


</div>







<div class="flex gap-3 items-start">


<div class="w-10 h-10 rounded-xl 
bg-[#C79A3B]/20
flex items-center justify-center">


✓


</div>


<div>


<h4 class="font-bold text-[#3B2508]">

Berorientasi Lingkungan

</h4>


<p class="text-sm text-gray-500">

Mendukung keberlanjutan.

</p>


</div>


</div>







<div class="flex gap-3 items-start">


<div class="w-10 h-10 rounded-xl 
bg-[#C79A3B]/20
flex items-center justify-center">


✓


</div>


<div>


<h4 class="font-bold text-[#3B2508]">

Solusi Terpercaya

</h4>


<p class="text-sm text-gray-500">

Pendekatan profesional.

</p>


</div>


</div>



</div>






<a href="{{ route('tentang') }}"

class="inline-flex mt-9
bg-[#3B2508]
text-white
px-8
py-3
rounded-xl
font-semibold
hover:bg-[#241505]
transition">


Kenali Kami Lebih Lanjut →


</a>



</div>




</div>


</div>


</section>
<!-- LAYANAN -->

<section 
id="layanan"
class="py-24 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6">





<!-- HEADER -->

<div 
class="text-center max-w-3xl mx-auto mb-14"
data-aos="fade-up">


<p class="uppercase tracking-[0.3em]
text-sm text-[#C79A3B]
font-semibold">

Services

</p>


<h2 class="mt-4 text-4xl font-bold text-[#3B2508]">

Layanan Profesional Kami

</h2>


<p class="mt-5 text-gray-600 leading-relaxed">

Menyediakan solusi konsultasi pertambangan
dan lingkungan melalui pendekatan teknis,
analisis data, dan standar profesional.

</p>


</div>








<!-- SERVICE GRID -->


<div class="grid md:grid-cols-2 gap-8">







<!-- ITEM 1 -->

<div

class="group bg-white rounded-3xl p-8
border border-gray-100
hover:shadow-xl
transition duration-300"

data-aos="fade-up">


<div class="flex justify-between items-start">


<div>


<p class="text-[#C79A3B] font-bold text-lg">

01

</p>


<h3 class="mt-3 text-2xl font-bold text-[#3B2508]">

Pertambangan

</h3>


</div>




<div class="w-14 h-14 rounded-2xl
bg-[#C79A3B]/20
flex items-center justify-center
text-3xl">


⛏️


</div>



</div>



<p class="mt-6 text-gray-600 leading-relaxed">


Kajian teknis pertambangan,
eksplorasi mineral, perencanaan
tambang, dan analisis kegiatan
pertambangan.


</p>



</div>









<!-- ITEM 2 -->

<div

class="group bg-white rounded-3xl p-8
border border-gray-100
hover:shadow-xl
transition duration-300"

data-aos="fade-up"
data-aos-delay="100">


<div class="flex justify-between items-start">


<div>


<p class="text-[#C79A3B] font-bold text-lg">

02

</p>


<h3 class="mt-3 text-2xl font-bold text-[#3B2508]">

Lingkungan

</h3>


</div>




<div class="w-14 h-14 rounded-2xl
bg-[#C79A3B]/20
flex items-center justify-center
text-3xl">


🌱


</div>



</div>



<p class="mt-6 text-gray-600 leading-relaxed">


Penyusunan kajian lingkungan,
pemantauan dampak kegiatan,
serta dukungan pengelolaan
lingkungan berkelanjutan.


</p>



</div>









<!-- ITEM 3 -->


<div

class="group bg-white rounded-3xl p-8
border border-gray-100
hover:shadow-xl
transition duration-300"

data-aos="fade-up"
data-aos-delay="200">


<div class="flex justify-between items-start">


<div>


<p class="text-[#C79A3B] font-bold text-lg">

03

</p>


<h3 class="mt-3 text-2xl font-bold text-[#3B2508]">

Survey & Pemetaan

</h3>


</div>




<div class="w-14 h-14 rounded-2xl
bg-[#C79A3B]/20
flex items-center justify-center
text-3xl">


🗺️


</div>



</div>



<p class="mt-6 text-gray-600 leading-relaxed">


Kegiatan survey lapangan,
pengumpulan data teknis,
dan pemetaan wilayah
untuk kebutuhan analisis.


</p>



</div>









<!-- ITEM 4 -->


<div

class="group bg-white rounded-3xl p-8
border border-gray-100
hover:shadow-xl
transition duration-300"

data-aos="fade-up"
data-aos-delay="300">


<div class="flex justify-between items-start">


<div>


<p class="text-[#C79A3B] font-bold text-lg">

04

</p>


<h3 class="mt-3 text-2xl font-bold text-[#3B2508]">

Kajian Teknis

</h3>


</div>




<div class="w-14 h-14 rounded-2xl
bg-[#C79A3B]/20
flex items-center justify-center
text-3xl">

📑

</div>


</div>



<p class="mt-6 text-gray-600 leading-relaxed">


Analisis data, penyusunan laporan,
serta kajian teknis berdasarkan
kebutuhan pekerjaan.


</p>



</div>





</div>







<div class="text-center mt-12">


<a href="{{ route('layanan') }}"

class="inline-flex items-center gap-2
text-[#C79A3B]
font-semibold
hover:text-[#3B2508]
transition">


Lihat Semua Layanan

→


</a>


</div>




</div>


</section>



<!-- KEUNGGULAN KAMI -->

<section class="py-24 bg-[#3B2508] text-white">


<div class="max-w-7xl mx-auto px-6">





<!-- HEADER -->

<div 
class="text-center max-w-3xl mx-auto mb-14"
data-aos="fade-up">


<p class="text-sm uppercase tracking-[0.3em]
text-[#C79A3B]
font-semibold">

Why Choose Us

</p>




<h2 class="mt-4 text-4xl font-bold">

Keunggulan CV Sahabat Eksplorasi Banua

</h2>




<p class="mt-5 text-gray-300">

Mengutamakan profesionalisme, ketepatan teknis,
dan komitmen terhadap keberlanjutan lingkungan.

</p>


</div>








<!-- CARD -->

<div class="grid md:grid-cols-4 gap-8">







<!-- ITEM 1 -->


<div
class="bg-white/10
backdrop-blur-sm
rounded-2xl
p-7
border border-white/10
hover:bg-white/20
transition"
data-aos="fade-up">


<div class="w-14 h-14
rounded-xl
bg-[#C79A3B]
flex items-center justify-center
text-2xl">


⚒️


</div>




<h3 class="mt-6 text-xl font-bold">

Tenaga Profesional

</h3>




<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Didukung oleh pendekatan teknis
dan kompetensi di bidang pertambangan
serta lingkungan.

</p>



</div>









<!-- ITEM 2 -->


<div
class="bg-white/10
backdrop-blur-sm
rounded-2xl
p-7
border border-white/10
hover:bg-white/20
transition"
data-aos="fade-up"
data-aos-delay="100">


<div class="w-14 h-14
rounded-xl
bg-[#C79A3B]
flex items-center justify-center
text-2xl">


📊


</div>




<h3 class="mt-6 text-xl font-bold">

Berbasis Data

</h3>




<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Menggunakan analisis data dan
kajian teknis untuk menghasilkan
solusi yang tepat.

</p>



</div>









<!-- ITEM 3 -->


<div
class="bg-white/10
backdrop-blur-sm
rounded-2xl
p-7
border border-white/10
hover:bg-white/20
transition"
data-aos="fade-up"
data-aos-delay="200">


<div class="w-14 h-14
rounded-xl
bg-[#C79A3B]
flex items-center justify-center
text-2xl">


🌱


</div>




<h3 class="mt-6 text-xl font-bold">

Berorientasi Lingkungan

</h3>




<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Mendukung pengelolaan lingkungan
yang berkelanjutan dan bertanggung jawab.

</p>



</div>









<!-- ITEM 4 -->


<div
class="bg-white/10
backdrop-blur-sm
rounded-2xl
p-7
border border-white/10
hover:bg-white/20
transition"
data-aos="fade-up"
data-aos-delay="300">


<div class="w-14 h-14
rounded-xl
bg-[#C79A3B]
flex items-center justify-center
text-2xl">


🤝


</div>




<h3 class="mt-6 text-xl font-bold">

Pelayanan Terpercaya

</h3>




<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Memberikan pelayanan profesional
dengan komunikasi dan koordinasi yang baik.

</p>



</div>





</div>



</div>


</section>

<!-- PORTFOLIO -->

<section 
id="proyek"
class="py-24 bg-white">


<div class="max-w-7xl mx-auto px-6">





<!-- HEADER -->

<div 
class="text-center max-w-3xl mx-auto mb-14"
data-aos="fade-up">


<p class="text-sm uppercase tracking-[0.3em]
text-[#C79A3B]
font-semibold">

Portofolio

</p>



<h2 class="mt-4 text-4xl font-bold text-[#3B2508]">

Dokumentasi Proyek Kami

</h2>



<p class="mt-5 text-gray-600">

Berbagai pengalaman pekerjaan
CV Sahabat Eksplorasi Banua
dalam bidang pertambangan dan lingkungan.

</p>


</div>








<!-- PROJECT GRID -->


<div class="grid md:grid-cols-3 gap-8">



@foreach($projects->take(3) as $project)



<div

class="group relative
rounded-3xl
overflow-hidden
shadow-lg
hover:shadow-2xl
transition duration-500"

data-aos="fade-up">





<!-- IMAGE -->


@if($project->gambar)


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-[380px]
object-cover
group-hover:scale-110
transition duration-700">


@else


<div class="h-[380px]
bg-gray-200
flex items-center justify-center">

Tidak Ada Dokumentasi

</div>


@endif







<!-- OVERLAY -->


<div class="absolute inset-0
bg-gradient-to-t
from-black/80
via-black/30
to-transparent">


</div>








<!-- CONTENT -->


<div class="absolute bottom-0 left-0 right-0 p-7 text-white">



<span class="inline-block
bg-[#C79A3B]
text-white
text-xs
font-semibold
px-4 py-1
rounded-full">


Pertambangan & Lingkungan


</span>





<h3 class="mt-4 text-2xl font-bold">


{{ $project->nama_proyek }}


</h3>





<div class="mt-3 space-y-1 text-sm text-gray-200">



<p>

📍 {{ $project->lokasi }}

</p>



<p>

📅 {{ $project->tahun }}

</p>



</div>



</div>





</div>





@endforeach



</div>







<!-- BUTTON -->


<div class="text-center mt-12">


<a href="{{ route('proyek') }}"

class="inline-flex items-center gap-2
text-[#C79A3B]
font-semibold
hover:text-[#3B2508]
transition">


Lihat Semua Portofolio


→


</a>


</div>






</div>


</section>

<!-- CTA -->

<section class="relative py-20 bg-[#3B2508]">


<div 
class="max-w-5xl mx-auto px-6 text-center text-white"
data-aos="fade-up">



<p class="text-[#C79A3B]
uppercase
tracking-[0.3em]
text-sm
font-semibold">

Ayo Kolaborasi 

</p>





<h2 class="mt-5 text-3xl md:text-4xl font-bold">

Siap Mengembangkan Proyek
Bersama Kami?

</h2>





<p class="mt-5 text-gray-300 max-w-2xl mx-auto leading-relaxed">

Diskusikan kebutuhan pertambangan dan lingkungan
bersama tim profesional CV Sahabat Eksplorasi Banua.

</p>







<div class="mt-8 flex flex-wrap justify-center gap-4">



<a href="{{ route('kontak') }}"

class="bg-[#C79A3B]
hover:bg-[#b38732]
text-white
px-8
py-3.5
rounded-xl
font-semibold
transition
shadow-lg">


Hubungi Kami


</a>





<a href="{{ route('proyek') }}"

class="border border-white/40
hover:bg-white
hover:text-[#3B2508]
text-white
px-8
py-3.5
rounded-xl
font-semibold
transition">


Lihat Proyek


</a>



</div>




</div>


</section>

@endsection