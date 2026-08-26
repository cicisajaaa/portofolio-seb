@extends('layouts.app')


@section('content')



<!-- HERO -->

<section class="py-24 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="uppercase tracking-[0.3em]
text-sm text-[#C79A3B] font-semibold">

Contact

</p>



<h1 class="mt-4 text-4xl md:text-5xl font-bold text-[#3B2508]">

Hubungi Kami

</h1>



<p class="mt-6 max-w-3xl mx-auto text-gray-600 leading-relaxed">

Diskusikan kebutuhan konsultasi pertambangan
dan lingkungan bersama tim profesional
CV Sahabat Eksplorasi Banua.

</p>



</div>


</section>









<!-- CONTACT SECTION -->


<section class="py-20 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid lg:grid-cols-2 gap-12">







<!-- INFO -->

<div 
data-aos="fade-right">



<p class="text-sm uppercase tracking-widest
text-[#C79A3B] font-semibold">

Contact Information

</p>




<h2 class="mt-3 text-3xl font-bold text-[#3B2508]">

Informasi Perusahaan

</h2>




<p class="mt-5 text-gray-600 leading-relaxed">

CV Sahabat Eksplorasi Banua merupakan perusahaan jasa
penunjang pertambangan yang menyediakan layanan eksplorasi,
kajian teknis, studi kelayakan, survey lapangan, dan
pengelolaan lingkungan.
</p>








<div class="mt-8 space-y-5">





<div class="bg-[#F8F7F2]
rounded-2xl
p-6
border border-gray-100
hover:shadow-lg
transition">


<p class="text-sm text-gray-500">

Alamat

</p>


<p class="mt-2 font-medium text-[#3B2508]">

Jl. Pandawa No.107 RT.03 RW.05
<br>
Kel. Guntung Paikat Kec. Banjarbaru Selatan
<br>
Kota Banjarbaru – Kalimantan Selatan
<br>
70713

</p>

</div>







<div class="bg-[#F8F7F2]
rounded-2xl
p-6
border border-gray-100
hover:shadow-lg
transition">


<p class="text-sm text-gray-500">

WhatsApp / Telepon

</p>


<p class="
mt-2
font-medium
text-[#3B2508]
leading-relaxed">

+62 511 5926485
<br>
+62 852 4851 2861
<br>
+62 813 2121 7662

</p>


</div>








<div class="bg-[#F8F7F2]
rounded-2xl
p-6
border border-gray-100
hover:shadow-lg
transition">


<p class="text-sm text-gray-500">

Email

</p>


<p class="mt-2 font-medium text-[#3B2508]">
    
sahabateksplorasibanua@gmail.com

</p>


</div>






<div class="bg-[#F8F7F2]
rounded-2xl
p-6
border border-gray-100
hover:shadow-lg
transition">


<p class="text-sm text-gray-500">

Jam Operasional

</p>


<p class="mt-2 font-medium text-[#3B2508]">

Senin - Jumat
<br>
09.00 - 17.00 WITA

</p>


</div>




</div>




</div>









<!-- FORM -->


<div

data-aos="fade-left"

class="bg-white
rounded-3xl
p-8
shadow-xl
border border-gray-100">





<h2 class="text-3xl font-bold text-[#3B2508]">

Diskusikan Kebutuhan Proyek Anda

</h2>



<p class="mt-3 text-gray-600">

Sampaikan kebutuhan pekerjaan Anda.
Tim SEB akan membantu memberikan solusi
sesuai kebutuhan proyek.

</p>








@if(session('success'))


<div class="mt-6
bg-green-100
text-green-700
p-4
rounded-xl">


{{ session('success') }}


</div>


@endif







<form

action="{{ route('kontak.store') }}"

method="POST"

class="mt-8 space-y-6">


@csrf







<div>


<label class="text-sm font-semibold text-gray-700">

Nama Lengkap

</label>


<input

name="nama"

value="{{ old('nama') }}"

class="w-full mt-2
rounded-xl
border-gray-200
p-3
focus:ring-[#C79A3B]
focus:border-[#C79A3B]"

placeholder="Masukkan nama">


@error('nama')

<p class="text-red-500 text-sm mt-1">

{{ $message }}

</p>

@enderror


</div>








<div>


<label class="text-sm font-semibold text-gray-700">

Email

</label>


<input

type="email"

name="email"

value="{{ old('email') }}"

class="
w-full
mt-2
rounded-xl
border-gray-200
p-3
focus:ring-2
focus:ring-[#C79A3B]
focus:border-[#C79A3B]
outline-none"

placeholder="email@example.com">


@error('email')

<p class="text-red-500 text-sm mt-1">

{{ $message }}

</p>

@enderror


</div>




<div>


<label class="text-sm font-semibold text-gray-700">

Jenis Layanan

</label>


<select

name="layanan"

class="
w-full
mt-2

rounded-xl

border-gray-200

p-3">


<option value="">

Pilih kebutuhan konsultasi

</option>


<option>

Konsultasi Pertambangan

</option>


<option>

Kajian Lingkungan

</option>


<option>

Survey Lapangan

</option>


<option>

Kajian Teknis

</option>


</select>


</div>


<div>


<label class="text-sm font-semibold text-gray-700">

Nomor WhatsApp

</label>


<input

name="telepon"

value="{{ old('telepon') }}"

class="w-full mt-2
rounded-xl
border-gray-200
p-3"

placeholder="08xxxxxxxxxx">


</div>







<div>


<label class="text-sm font-semibold text-gray-700">

Pesan Konsultasi

</label>



<textarea

name="pesan"

rows="5"

class="w-full mt-2
rounded-xl
border-gray-200
p-3"

placeholder="Tuliskan kebutuhan Anda...">{{ old('pesan') }}</textarea>


@error('pesan')

<p class="text-red-500 text-sm mt-1">

{{ $message }}

</p>

@enderror


</div>








<button

class="w-full

bg-[#3B2508]

hover:bg-[#C79A3B]

hover:text-[#3B2508]

text-white

py-3.5

rounded-xl

font-semibold

transition">


Kirim Pesan


</button>






</form>



</div>





</div>


</div>


</section>









<!-- MAP -->


<section class="py-20 bg-[#F8F7F2]">


<div class="max-w-7xl mx-auto px-6">



<div class="text-center mb-10">


<p class="text-sm uppercase tracking-widest
text-[#C79A3B] font-semibold">

Office Location

</p>



<h2 class="mt-3 text-3xl font-bold text-[#3B2508]">

Lokasi Kami

</h2>



<p class="mt-3 text-gray-600">

Temukan lokasi kantor CV Sahabat Eksplorasi Banua.

</p>



</div>







<div class="rounded-3xl overflow-hidden shadow-xl">


<iframe

src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.553715661441!2d114.83299497534553!3d-3.4580636418574806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681b859b7e403%3A0x127e7ae02ac9ec73!2sCV.%20Sahabat%20Eksplorasi%20Banua!5e0!3m2!1sid!2sid!4v1785604515072!5m2!1sid!2sid"

class="w-full h-[450px]"

style="border:0"

loading="lazy">

</iframe>



</div>



</div>


</section>





@endsection