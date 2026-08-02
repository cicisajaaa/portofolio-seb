@extends('layouts.app')


@section('content')



<!-- HEADER -->

<section class="py-24 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="uppercase tracking-widest text-sm text-[#C79A3B] font-semibold">

Dokumentasi

</p>


<h1 class="mt-3 text-4xl md:text-5xl font-bold text-[#3B2508]">

Galeri Kegiatan

</h1>



<p class="mt-5 max-w-3xl mx-auto text-gray-600 leading-relaxed">

Dokumentasi aktivitas lapangan, kegiatan survei,
dan pekerjaan teknis CV Sahabat Eksplorasi Banua
dalam mendukung kegiatan pertambangan dan lingkungan.

</p>


</div>


</section>







<!-- GALERI -->


<section class="py-16 bg-white">


<div class="max-w-7xl mx-auto px-6">



@if($galleries->count())


<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">



@foreach($galleries as $gallery)



<div
data-aos="fade-up"
class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-500">





<!-- IMAGE -->


<div class="relative overflow-hidden">


<img

src="{{ asset('storage/'.$gallery->gambar) }}"

loading="lazy"

class="w-full h-72 object-cover
group-hover:scale-110 transition duration-700">



<div class="absolute inset-0 bg-black/0 
group-hover:bg-black/30 transition duration-500">


</div>



</div>







<!-- CONTENT -->


<div class="p-6">



<span class="inline-block
text-xs
font-semibold
text-[#8b6b20]
bg-[#C79A3B]/20
px-3 py-1
rounded-full">


Kegiatan SEB


</span>





<h3 class="mt-4 text-xl font-bold text-[#3B2508]">


{{ $gallery->judul }}


</h3>




<p class="mt-3 text-sm text-gray-600">


Dokumentasi kegiatan profesional
CV Sahabat Eksplorasi Banua.


</p>



</div>



</div>



@endforeach



</div>



@else



<div class="text-center py-20">


<div class="text-5xl">

📷

</div>


<h3 class="mt-5 text-xl font-bold text-[#3B2508]">

Belum Ada Dokumentasi

</h3>


<p class="mt-2 text-gray-500">

Dokumentasi kegiatan akan ditampilkan pada halaman ini.

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

Dokumentasi Pekerjaan SEB

</h2>



<p class="mt-4 text-gray-300 max-w-3xl mx-auto">

Setiap kegiatan dilakukan dengan pendekatan
profesional, teknis, serta memperhatikan aspek
keselamatan dan keberlanjutan lingkungan.

</p>




<a href="/kontak"

class="inline-block mt-7
bg-[#C79A3B]
hover:bg-[#b58a32]
px-8 py-3
rounded-lg
font-semibold
transition">


Konsultasi Sekarang


</a>


</div>


</section>




@endsection