@extends('layouts.app')


@section('content')


<!-- HERO -->

<section class="py-24 bg-[#F8F7F2]">

<div class="max-w-7xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="
uppercase
tracking-[0.3em]
text-sm
font-semibold
text-[#C79A3B]">

Company Legal

</p>


<h1 class="
mt-4
text-4xl
md:text-5xl
font-bold
text-[#3B2508]">

Legalitas Perusahaan

</h1>


<p class="
mt-6
max-w-3xl
mx-auto
text-gray-600
leading-relaxed">

CV Sahabat Eksplorasi Banua merupakan perusahaan
konsultan yang bergerak dalam bidang jasa aktivitas
penunjang pertambangan dan penggalian lainnya
dengan komitmen terhadap pengelolaan sumber daya
alam yang berwawasan lingkungan.

</p>


</div>

</section>







<!-- IDENTITAS LEGAL -->

<section class="py-20 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-3 gap-8">



<div class="
bg-[#F8F7F2]
rounded-3xl
p-8
border
hover:shadow-lg
transition">

<p class="text-gray-500 text-sm">
Akta Pendirian
</p>


<h3 class="
mt-3
text-2xl
font-bold
text-[#3B2508]">

No. 45

</h3>


<p class="mt-2 text-gray-600">

05 Januari 2019

</p>


<p class="mt-2 text-sm text-gray-500">

Notaris Andry Irawan Prasatyo, SH, M.Kn

</p>

</div>





<div class="
bg-[#F8F7F2]
rounded-3xl
p-8
border
hover:shadow-lg
transition">

<p class="text-gray-500 text-sm">
Akta Perubahan
</p>


<h3 class="
mt-3
text-2xl
font-bold
text-[#3B2508]">

No. 16

</h3>


<p class="mt-2 text-gray-600">

30 Desember 2021

</p>


</div>





<div class="
bg-[#F8F7F2]
rounded-3xl
p-8
border
hover:shadow-lg
transition">


<p class="text-gray-500 text-sm">

Nomor Induk Berusaha

</p>


<h3 class="
mt-3
text-xl
font-bold
text-[#3B2508]">

9120108492557

</h3>


<p class="mt-2 text-gray-600">

NIB Perusahaan

</p>


</div>


</div>


</div>


</section>









<!-- BIDANG USAHA -->

<section class="py-20 bg-[#3B2508] text-white">


<div class="max-w-7xl mx-auto px-6">


<div class="text-center mb-12">


<p class="
text-[#C79A3B]
uppercase
tracking-widest
text-sm">

Bidang Usaha

</p>


<h2 class="
mt-3
text-3xl
font-bold">

Aktivitas Perusahaan

</h2>


</div>



<div class="grid md:grid-cols-3 gap-8">



<div class="
bg-white/10
rounded-2xl
p-8">


<h3 class="
text-xl
font-bold
text-[#C79A3B]">

KBLI 09900

</h3>


<p class="
mt-4
text-gray-300
leading-relaxed">

Jasa Aktivitas Penunjang Pertambangan
dan Penggalian Lainnya.

</p>


</div>





<div class="
bg-white/10
rounded-2xl
p-8">


<h3 class="
text-xl
font-bold
text-[#C79A3B]">

IUJP

</h3>


<p class="
mt-4
text-gray-300
leading-relaxed">

Izin Usaha Jasa Pertambangan sebagai
dasar pelaksanaan kegiatan jasa
penunjang pertambangan.

</p>


</div>





<div class="
bg-white/10
rounded-2xl
p-8">


<h3 class="
text-xl
font-bold
text-[#C79A3B]">

Lingkungan

</h3>


<p class="
mt-4
text-gray-300
leading-relaxed">

Pelaksanaan kajian lingkungan,
UKL-UPL, AMDAL, pemantauan lingkungan,
reklamasi dan pascatambang.

</p>


</div>



</div>


</div>


</section>






<!-- DOKUMEN LEGAL -->

<section class="py-20 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="text-center mb-14">


<p class="
uppercase
tracking-[0.3em]
text-sm
text-[#C79A3B]
font-semibold">

Legal Document

</p>


<h2 class="
mt-4
text-4xl
font-bold
text-[#3B2508]">

Dokumen Legal Perusahaan

</h2>


<p class="
mt-4
text-gray-600
max-w-3xl
mx-auto">

Dokumen pendukung legalitas CV Sahabat Eksplorasi Banua
sebagai perusahaan konsultan pertambangan dan lingkungan.

</p>


</div>




<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">



@foreach([

[
'title'=>'Akta Pendirian',
'image'=>'legalitas/akta-pendirian.jpg',
'desc'=>'Akta pendirian perusahaan No.45 tanggal 05 Januari 2019'
],

[
'title'=>'Akta Perubahan',
'image'=>'legalitas/akta-perubahan.jpg',
'desc'=>'Akta perubahan perusahaan No.16 tanggal 30 Desember 2021'
],

[
'title'=>'NIB RBA',
'image'=>'legalitas/nib.jpg',
'desc'=>'Nomor Induk Berusaha 9120108492557'
],

[
'title'=>'IUJP',
'image'=>'legalitas/iujp.jpg',
'desc'=>'Izin Usaha Jasa Pertambangan'
],

[
'title'=>'Dokumen Pajak',
'image'=>'legalitas/pajak.jpg',
'desc'=>'Dokumen administrasi perpajakan perusahaan'
]


] as $doc)

<div class="
group
bg-white
rounded-3xl
border
overflow-hidden
shadow-sm
hover:shadow-xl
transition">



<div class="
h-48
bg-gray-100
overflow-hidden">

<img

src="{{ asset('storage/'.$doc['image']) }}"

class="
w-full
h-full
object-cover
group-hover:scale-110
transition
duration-500">


</div>





<div class="p-5">


<h3 class="
text-xl
font-bold
text-[#3B2508]">

{{ $doc['title'] }}

</h3>


<p class="
mt-3
text-sm
text-gray-600
leading-relaxed">

{{ $doc['desc'] }}

</p>


<a

href="{{ asset('storage/'.$doc['image']) }}"

target="_blank"

class="
inline-flex
mt-5
text-sm
font-semibold
text-[#C79A3B]
hover:text-[#3B2508]">


Lihat Dokumen →

</a>


</div>


</div>



@endforeach



</div>


</div>


</section>




<!-- CTA -->


<section class="py-16 bg-[#F8F7F2]">


<div class="max-w-5xl mx-auto px-6 text-center">


<h2 class="
text-3xl
font-bold
text-[#3B2508]">

Mitra Profesional Untuk Pertambangan dan Lingkungan

</h2>


<p class="
mt-4
text-gray-600">

CV Sahabat Eksplorasi Banua siap mendukung
kegiatan konsultasi pertambangan dan pengelolaan
lingkungan sesuai regulasi yang berlaku.

</p>



<a href="{{ route('kontak') }}"

class="
inline-flex
mt-7
bg-[#C79A3B]
text-white
px-8
py-3
rounded-xl
font-semibold
hover:bg-[#b38732]
transition">

Hubungi Kami →

</a>


</div>


</section>



@endsection