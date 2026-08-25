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


Environmental & Mining Consultant
<br>

Dalam Pengelolaan
<br>

Pertambangan & Lingkungan


</h1>





<p class="mt-6 max-w-3xl text-lg text-gray-200 leading-relaxed">

CV Sahabat Eksplorasi Banua Consultant merupakan perusahaan
yang bergerak dalam Jasa Aktivitas Penunjang Pertambangan
dan Penggalian Lainnya dengan Kode KBLI 09900.

Melayani penyelidikan umum, eksplorasi, studi kelayakan,
pemantauan lingkungan, UKL-UPL/AMDAL, reklamasi,
dan pascatambang.

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

09900

</h3>

<p class="text-sm text-gray-300">

Kode KBLI

</p>


</div>





<div>
<h3 class="text-3xl font-bold text-[#C79A3B]">

2019

</h3>

<p class="text-sm text-gray-300">

Tahun Berdiri

</p>


</div>





<div>
<h3 class="text-3xl font-bold text-[#C79A3B]">

50+

</h3>

<p class="text-sm text-gray-300">

Pengalaman Proyek

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

CV. Sahabat Eksplorasi Banua merupakan perusahaan 
yang bergerak dalam Jasa Aktivitas Penunjang Pertambangan 
dan Penggalian Lainnya dengan Kode KBLI 09900.

Perusahaan berfokus pada kegiatan konsultasi pertambangan,
pengelolaan lingkungan, serta pengembangan sumber daya alam
secara optimal dan berwawasan lingkungan.


</p>





<p class="mt-4 text-gray-600 leading-relaxed">


Ruang lingkup pekerjaan meliputi penyelidikan umum,
eksplorasi, studi kelayakan (FS), pemantauan lingkungan,
UKL-UPL/AMDAL, reklamasi, dan pascatambang dengan
mengikuti regulasi yang berlaku.

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

Tenaga Ahli Profesional

</h4>


<p class="text-sm text-gray-500">

Didukung tenaga ahli pertambangan

dan lingkungan.

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

Berbasis Regulasi

</h4>


<p class="text-sm text-gray-500">

Pekerjaan mengikuti standar

dan peraturan yang berlaku.

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

Berwawasan Lingkungan

</h4>


<p class="text-sm text-gray-500">

Berwawasan Lingkungan

Mendukung pengelolaan sumber daya alam
yang berkelanjutan.

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

Pengalaman Teruji 

</h4>


<p class="text-sm text-gray-500">

Memiliki pengalaman pekerjaan

pertambangan dan lingkungan.
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

Penyelidikan Umum & Eksplorasi

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

Pelaksanaan penyelidikan umum dan eksplorasi
untuk memperoleh data teknis mengenai kondisi
geologi, potensi sumber daya mineral, serta
informasi pendukung kegiatan pertambangan.

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

Studi Kelayakan (FS)

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

Penyusunan studi kelayakan (Feasibility Study)
sebagai dasar analisis teknis, ekonomi, dan
perencanaan pengembangan kegiatan pertambangan.

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

Pemantauan Lingkungan

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




Pelaksanaan pemantauan lingkungan,

penyusunan dokumen UKL-UPL/AMDAL,

kajian teknis lingkungan, serta evaluasi

dampak kegiatan terhadap lingkungan.


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

    Reklamasi & Pascatambang

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

Perencanaan reklamasi dan pascatambang
untuk mendukung pemulihan lahan bekas kegiatan
pertambangan serta pengelolaan lingkungan
yang berkelanjutan.

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

Tenaga Ahli Profesional

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Didukung tenaga ahli pertambangan,
geologi, lingkungan, reklamasi, sipil,
dan bidang teknis lainnya.

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

Sistem Kerja Profesional

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Mengandalkan sistem dan prosedur kerja
yang terstruktur untuk menjaga kualitas
hasil pekerjaan.

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

Berwawasan Lingkungan

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Mendukung pengelolaan sumber daya alam
yang optimal dengan prinsip keberlanjutan.

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

Pengalaman Teruji

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Memiliki pengalaman kerja sama dengan
pemerintah dan perusahaan swasta dalam
bidang pertambangan dan lingkungan.

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

Pengalaman Pekerjaan Kami

</h2>



<p class="mt-5 text-gray-600">

Pengalaman pekerjaan CV Sahabat Eksplorasi Banua
dalam mendukung kegiatan pertambangan, lingkungan,
dan pengelolaan sumber daya alam bersama instansi
pemerintah maupun perusahaan swasta.

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


Environmental & Mining Consultant


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


<p>

📌 {{ $project->kategori ?? 'Pertambangan & Lingkungan' }}

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

Bangun Pengelolaan Sumber Daya Alam
Bersama Konsultan Profesional Kami


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