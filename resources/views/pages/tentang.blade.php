@extends('layouts.app')


@section('content')



<!-- HERO -->

<section class="relative py-24 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="uppercase tracking-[0.3em] text-sm font-semibold text-[#C79A3B]">

Company Profile

</p>


<h1 class="mt-4 text-4xl md:text-5xl font-bold text-[#3B2508]">

Tentang Kami

</h1>



<p class="mt-5 max-w-3xl mx-auto text-gray-600 leading-relaxed">

Mengenal CV Sahabat Eksplorasi Banua sebagai perusahaan konsultan yang bergerak dalam bidang pertambangan, eksplorasi, dan pengelolaan lingkungan.

</p>


</div>


</section>







<!-- PROFIL -->

<section class="py-20 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 gap-14 items-center">



<div data-aos="fade-right">


<img

src="{{ asset('storage/tentang/tentang-kami.jpg') }}"

class="rounded-3xl shadow-xl w-full h-[450px] object-cover">


</div>







<div data-aos="fade-left">



<p class="text-sm uppercase tracking-widest text-[#C79A3B] font-semibold">

Profil Perusahaan

</p>



<h2 class="mt-4 text-3xl font-bold text-[#3B2508]">

CV Sahabat Eksplorasi Banua

</h2>




<p class="mt-6 text-gray-600 leading-relaxed">

CV Sahabat Eksplorasi Banua merupakan perusahaan konsultan yang menyediakan layanan profesional dalam bidang pertambangan dan lingkungan.

</p>



<p class="mt-4 text-gray-600 leading-relaxed">

Dengan pendekatan berbasis data, kajian teknis, dan pemahaman regulasi, SEB mendukung kegiatan eksplorasi serta pengelolaan lingkungan yang bertanggung jawab.

</p>





<div class="mt-8">


<a href="{{ route('kontak') }}"

class="inline-flex items-center gap-2

bg-[#3B2508]
hover:bg-[#C79A3B]

text-white

px-7 py-3

rounded-xl

font-semibold

transition">


Hubungi Tim Kami

<span>

→

</span>


</a>


</div>



</div>


</div>


</div>


</section>








<!-- KEUNGGULAN -->

<section class="py-20 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6">


<div class="text-center mb-12">


<p class="text-sm uppercase tracking-widest text-[#C79A3B] font-semibold">

Komitmen Kami

</p>


<h2 class="mt-3 text-3xl font-bold text-[#3B2508]">

Visi & Misi

</h2>


<p class="mt-4 text-gray-600">

Landasan SEB dalam memberikan layanan profesional.

</p>


</div>






<div class="grid md:grid-cols-2 gap-8">



<!-- VISI -->


<div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-lg transition">


<div class="w-14 h-14 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center">


<span class="text-[#3B2508] text-xl font-bold">

01

</span>


</div>



<h3 class="mt-6 text-2xl font-bold text-[#3B2508]">

Visi

</h3>



<p class="mt-4 text-gray-600 leading-relaxed">

Menjadi perusahaan konsultan pertambangan dan lingkungan yang terpercaya melalui profesionalisme, inovasi, serta penerapan prinsip keberlanjutan.

</p>


</div>








<!-- MISI -->


<div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-lg transition">


<div class="w-14 h-14 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center">


<span class="text-[#3B2508] text-xl font-bold">

02

</span>


</div>



<h3 class="mt-6 text-2xl font-bold text-[#3B2508]">

Misi

</h3>




<ul class="mt-5 space-y-3 text-gray-600">


<li class="flex gap-3">

<span class="text-[#C79A3B]">
✓
</span>

Memberikan layanan konsultasi profesional.

</li>


<li class="flex gap-3">

<span class="text-[#C79A3B]">
✓
</span>

Menghasilkan kajian berdasarkan data teknis.

</li>


<li class="flex gap-3">

<span class="text-[#C79A3B]">
✓
</span>

Mendukung kegiatan pertambangan yang bertanggung jawab.

</li>


<li class="flex gap-3">

<span class="text-[#C79A3B]">
✓
</span>

Menjaga keseimbangan aspek lingkungan.

</li>


</ul>



</div>




</div>


</div>


</section>









<!-- NILAI PERUSAHAAN -->


<section class="py-20 bg-[#3B2508] text-white">


<div class="max-w-7xl mx-auto px-6">



<div class="text-center mb-14">


<p class="text-[#C79A3B] uppercase tracking-widest text-sm font-semibold">

Core Value

</p>


<h2 class="mt-3 text-3xl font-bold">

Nilai Perusahaan

</h2>


</div>







<div class="grid md:grid-cols-4 gap-10">



<div class="text-center">


<h3 class="text-xl font-bold text-[#C79A3B]">

Profesional

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Mengutamakan kompetensi dan standar kerja teknis.

</p>


</div>







<div class="text-center">


<h3 class="text-xl font-bold text-[#C79A3B]">

Integritas

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Menjalankan pekerjaan dengan tanggung jawab dan kejujuran.

</p>


</div>







<div class="text-center">


<h3 class="text-xl font-bold text-[#C79A3B]">

Inovasi

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Mengembangkan pendekatan kerja yang efektif dan adaptif.

</p>


</div>







<div class="text-center">


<h3 class="text-xl font-bold text-[#C79A3B]">

Keberlanjutan

</h3>


<p class="mt-3 text-gray-300 text-sm leading-relaxed">

Memperhatikan aspek lingkungan dalam setiap kegiatan.

</p>


</div>





</div>


</div>


</section>





@endsection