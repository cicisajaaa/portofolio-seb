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

Proyek Kami

</h1>



<p class="mt-6 max-w-3xl mx-auto text-gray-600 leading-relaxed">

Dokumentasi pengalaman pekerjaan
CV Sahabat Eksplorasi Banua dalam bidang
pertambangan, eksplorasi, dan lingkungan
melalui pendekatan teknis dan profesional.

</p>


</div>


</section>









<!-- PROJECT LIST -->


<section class="py-20 bg-white">


<div class="max-w-7xl mx-auto px-6">



@if($projects->count())


<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">



@foreach($projects as $project)



<div

data-aos="fade-up"

class="group bg-white
rounded-3xl
overflow-hidden
border border-gray-100
hover:shadow-2xl
transition duration-500">







<!-- IMAGE -->

<div class="relative overflow-hidden">



@if($project->gambar)


<img

src="{{ asset('storage/'.$project->gambar) }}"

class="w-full h-72 object-cover
group-hover:scale-110
transition duration-700">


@else


<div class="h-72 bg-[#F8F7F2]
flex items-center justify-center">


<p class="text-gray-400">

Tidak Ada Dokumentasi

</p>


</div>


@endif





<div class="absolute inset-0
bg-gradient-to-t
from-black/40
to-transparent
opacity-0
group-hover:opacity-100
transition">

</div>



</div>









<!-- CONTENT -->


<div class="p-7">





<span

class="inline-flex
bg-[#C79A3B]/20
text-[#8b6b20]
text-xs
font-semibold
px-4
py-1.5
rounded-full">


Pertambangan & Lingkungan


</span>







<h2 class="mt-5 text-xl font-bold text-[#3B2508]">

{{ $project->nama_proyek }}

</h2>








<div class="mt-5 space-y-2 text-sm text-gray-500">


<p>

Lokasi:
<span class="text-gray-700 font-medium">

{{ $project->lokasi }}

</span>

</p>




<p>

Tahun:
<span class="text-gray-700 font-medium">

{{ $project->tahun }}

</span>

</p>



</div>








<p class="mt-5 text-gray-600 text-sm leading-relaxed">


{{ Str::limit($project->deskripsi,150) }}


</p>







<a href="{{ route('proyek.detail',$project->id) }}"

class="inline-flex items-center gap-2 mt-7

font-semibold
text-[#3B2508]

hover:text-[#C79A3B]

transition">


Lihat Detail Proyek


<span>

→

</span>


</a>





</div>




</div>





@endforeach



</div>





@else



<div class="bg-white rounded-3xl border p-12 text-center">


<div class="text-5xl">

📂

</div>


<h3 class="mt-5 text-xl font-bold text-[#3B2508]">

Belum Ada Proyek

</h3>



<p class="mt-3 text-gray-500">

Data proyek akan muncul setelah ditambahkan melalui administrator.

</p>


</div>



@endif



</div>


</section>









<!-- CTA -->


<section class="py-20 bg-[#3B2508] text-white">


<div class="max-w-5xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="text-[#C79A3B]
uppercase
tracking-widest
text-sm
font-semibold">

Let's Work Together

</p>





<h2 class="mt-4 text-3xl md:text-4xl font-bold">

Memiliki Kebutuhan Serupa?

</h2>





<p class="mt-5 text-gray-300 max-w-2xl mx-auto">

Diskusikan kebutuhan konsultasi pertambangan
dan lingkungan bersama tim profesional
CV Sahabat Eksplorasi Banua.

</p>







<a href="{{ route('kontak') }}"

class="inline-flex mt-8

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