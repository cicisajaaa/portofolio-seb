@extends('layouts.app')


@section('content')


<section class="py-24 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 gap-12 items-center">



<!-- FOTO TIM -->


<div data-aos="fade-right">


@if(file_exists(storage_path('app/public/tentang/tentang-kami.jpg')))

<img
src="{{ asset('storage/tentang/tentang-kami.jpg') }}"
class="rounded-2xl shadow-lg w-full h-[450px] object-cover">

@else

<div class="h-[450px] bg-gray-200 rounded-2xl flex items-center justify-center">

Foto Tim SEB

</div>

@endif


</div>




<!-- PROFIL -->


<div data-aos="fade-left">


<h1 class="text-4xl font-bold text-[#3B2508]">

Tentang Kami

</h1>



<h2 class="mt-6 text-2xl font-bold">

CV Sahabat Eksplorasi Banua

</h2>



<p class="mt-5 text-gray-600 leading-relaxed">

CV Sahabat Eksplorasi Banua merupakan perusahaan
konsultan yang bergerak dalam bidang pertambangan
dan lingkungan.

</p>



<p class="mt-4 text-gray-600 leading-relaxed">

Kami menyediakan layanan konsultasi profesional
melalui pendekatan kajian teknis, analisis data,
serta pemahaman terhadap regulasi pertambangan
dan lingkungan yang berlaku.
</p>



</div>


</div>


</div>


</section>





<!-- VISI MISI -->


<section class="py-20 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 gap-10">


<div class="bg-[#F8F7F2] p-8 rounded-2xl">


<h2 class="text-3xl font-bold text-[#3B2508]">

Visi

</h2>


<p class="mt-5 text-gray-600 leading-relaxed">

Menjadi perusahaan konsultan pertambangan dan
lingkungan yang terpercaya melalui profesionalisme,
inovasi, serta penerapan prinsip keberlanjutan.

</p>


</div>





<div class="bg-[#F8F7F2] p-8 rounded-2xl">


<h2 class="text-3xl font-bold text-[#3B2508]">

Misi

</h2>



<ul class="mt-5 space-y-3 text-gray-600">


<li>
✓ Memberikan layanan konsultasi profesional
</li>


<li>
✓ Menghasilkan kajian berbasis data
</li>


<li>
✓ Mendukung kegiatan pertambangan bertanggung jawab
</li>


<li>
✓ Menjaga keseimbangan aspek lingkungan
</li>


</ul>


</div>


</div>


</div>


</section>





<!-- NILAI PERUSAHAAN -->


<section class="py-20 bg-[#3B2508] text-white">


<div class="max-w-7xl mx-auto px-6">


<div class="text-center mb-12">


<h2 class="text-3xl font-bold">

Nilai Perusahaan

</h2>


</div>



<div class="grid md:grid-cols-4 gap-8 text-center">


<div>

<h3 class="text-xl font-bold text-[#C79A3B]">

Profesional

</h3>


<p class="mt-3 text-gray-200">

Bekerja berdasarkan kompetensi dan standar teknis.

</p>

</div>



<div>

<h3 class="text-xl font-bold text-[#C79A3B]">

Integritas

</h3>


<p class="mt-3 text-gray-200">

Mengutamakan kejujuran dalam setiap pekerjaan.

</p>

</div>



<div>

<h3 class="text-xl font-bold text-[#C79A3B]">

Inovasi

</h3>


<p class="mt-3 text-gray-200">

Menggunakan pendekatan dan teknologi terbaru.

</p>

</div>



<div>

<h3 class="text-xl font-bold text-[#C79A3B]">

Keberlanjutan

</h3>


<p class="mt-3 text-gray-200">

Memperhatikan aspek lingkungan.

</p>

</div>



</div>


</div>


</section>



@endsection