@extends('layouts.app')


@section('content')



<!-- HERO -->

<section class="py-24 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="uppercase tracking-[0.3em] text-sm text-[#C79A3B] font-semibold">

Portfolio

</p>



<h1 class="mt-4 text-4xl md:text-5xl font-bold text-[#3B2508]">

Pengalaman Kerjasama

</h1>



<p class="mt-6 max-w-3xl mx-auto text-gray-600 leading-relaxed">

CV Sahabat Eksplorasi Banua memiliki pengalaman
dalam berbagai pekerjaan konsultasi pertambangan,
lingkungan, dan pengelolaan sumber daya alam
bersama berbagai instansi pemerintah maupun pihak swasta.

</p>


</div>


</section>







<!-- EXPERIENCE LIST -->


<section class="py-16 bg-white">


<div class="max-w-7xl mx-auto px-6">



@if($projects->count())


<div class="
grid
sm:grid-cols-2
lg:grid-cols-3
gap-6">



@foreach($projects as $project)



<div

data-aos="fade-up"

class="
group
bg-white
rounded-2xl
overflow-hidden
border
border-gray-100
hover:shadow-xl
hover:-translate-y-1
transition
duration-500">







<!-- IMAGE -->

<div class="
relative
overflow-hidden">


@if($project->gambar)


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="
w-full
h-[190px]
object-cover
group-hover:scale-105
transition
duration-500">



@else


<div class="
h-[190px]
bg-[#F8F7F2]
flex
items-center
justify-center">


<p class="text-sm text-gray-400">

Tidak Ada Dokumentasi

</p>


</div>


@endif






<div class="
absolute
top-4
left-4">


<span

class="
bg-[#C79A3B]
text-white
text-[11px]
font-semibold
px-3
py-1.5
rounded-full">


{{ $project->tahun }}


</span>


</div>




</div>









<!-- CONTENT -->

<div class="p-5">





<p class="
text-[11px]
uppercase
tracking-widest
text-[#C79A3B]
font-semibold">


{{ $project->instansi }}


</p>







<h2 class="
mt-2
text-lg
font-bold
leading-snug
text-[#3B2508]">


{{ $project->perusahaan }}


</h2>








<div class="
mt-4
space-y-2
text-sm
text-gray-600">



<p>

<span class="
font-semibold
text-[#3B2508]">

Kegiatan:

</span>

<br>


{{ Str::limit($project->kegiatan,50) }}


</p>






<p>

<span class="
font-semibold
text-[#3B2508]">

Lokasi:

</span>

<br>


{{ Str::limit($project->lokasi,45) }}


</p>






</div>









<div class="
mt-4
pt-4
border-t">


<p class="
text-sm
font-semibold
text-[#3B2508]">


{{ Str::limit($project->nama_proyek,55) }}


</p>


</div>







<a href="{{ route('proyek.detail',$project->id) }}"

class="
inline-flex
items-center
gap-2
mt-4
text-sm
font-semibold
text-[#3B2508]
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



<div class="
bg-white
rounded-3xl
border
p-12
text-center">


<div class="text-5xl">

📂

</div>


<h3 class="
mt-5
text-xl
font-bold
text-[#3B2508]">


Belum Ada Pengalaman


</h3>



<p class="
mt-3
text-gray-500">


Data pengalaman akan muncul setelah
ditambahkan melalui administrator.


</p>


</div>



@endif



</div>


</section>



<!-- CTA -->


<section class="py-20 bg-[#3B2508] text-white">


<div class="max-w-5xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="
text-[#C79A3B]
uppercase
tracking-widest
text-sm
font-semibold">


Let's Work Together


</p>





<h2 class="
mt-4
text-3xl
md:text-4xl
font-bold">


Bangun Solusi Pertambangan dan Lingkungan Bersama Kami


</h2>





<p class="
mt-5
text-gray-300
max-w-2xl
mx-auto">


CV Sahabat Eksplorasi Banua siap mendukung
kegiatan konsultasi, pengelolaan lingkungan,
dan pengembangan sumber daya alam.


</p>







<a href="{{ route('kontak') }}"

class="
inline-flex
mt-8

bg-[#C79A3B]

hover:bg-[#b38732]

px-8

py-3.5

rounded-xl

font-semibold

transition">


Hubungi Kami →


</a>




</div>


</section>




@endsection