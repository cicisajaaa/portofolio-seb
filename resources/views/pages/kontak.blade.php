@extends('layouts.app')


@section('content')



<!-- HEADER -->

<section class="py-24 bg-[#F8F7F2]">


<div class="max-w-6xl mx-auto px-6 text-center"
data-aos="fade-up">


<p class="uppercase tracking-widest text-sm text-[#C79A3B] font-semibold">

Contact

</p>


<h1 class="mt-3 text-4xl md:text-5xl font-bold text-[#3B2508]">

Hubungi Kami

</h1>



<p class="mt-5 text-gray-600 max-w-3xl mx-auto">

Diskusikan kebutuhan konsultasi pertambangan
dan lingkungan bersama tim profesional
CV Sahabat Eksplorasi Banua.

</p>


</div>


</section>







<!-- CONTACT -->

<section class="py-16 bg-white">


<div class="max-w-7xl mx-auto px-6">


<div class="grid md:grid-cols-2 gap-10">





<!-- COMPANY INFO -->


<div
data-aos="fade-right"
class="bg-[#F8F7F2] rounded-2xl p-8">



<h2 class="text-2xl font-bold text-[#3B2508]">

Informasi Perusahaan

</h2>




<p class="mt-5 text-gray-600 leading-relaxed">

CV Sahabat Eksplorasi Banua merupakan perusahaan
konsultan yang bergerak dalam bidang pertambangan
dan lingkungan dengan pendekatan profesional,
teknis, dan berkelanjutan.

</p>



<div class="mt-8 space-y-5">





<div class="bg-white p-5 rounded-xl">


<h3 class="font-bold text-[#3B2508]">

📍 Alamat

</h3>


<p class="mt-2 text-gray-600">

Jl. Janaka, Guntungmanggis,
Kec. Banjarbaru Utara,
Kota Banjarbaru,
Kalimantan Selatan 70714

</p>


</div>






<div class="bg-white p-5 rounded-xl">


<h3 class="font-bold text-[#3B2508]">

📞 Telepon

</h3>


<p class="mt-2 text-gray-600">

085252452303

</p>


</div>






<div class="bg-white p-5 rounded-xl">


<h3 class="font-bold text-[#3B2508]">

✉️ Email

</h3>


<p class="mt-2 text-gray-600">

email@seb.co.id

</p>


</div>






<div class="bg-white p-5 rounded-xl">


<h3 class="font-bold text-[#3B2508]">

🕒 Jam Operasional

</h3>


<p class="mt-2 text-gray-600">

Senin - Jumat
<br>
08.00 - 17.00 WITA

</p>


</div>




</div>



</div>








<!-- FORM -->


<div
data-aos="fade-left"
class="bg-white rounded-2xl shadow-lg border p-8">



<h2 class="text-2xl font-bold text-[#3B2508]">

Kirim Pesan Konsultasi

</h2>



<p class="mt-3 text-gray-600">

Isi formulir berikut dan tim kami akan
menghubungi Anda.

</p>






@if(session('success'))

<div class="mt-5 bg-green-100 text-green-700 p-4 rounded-lg">

{{ session('success') }}

</div>

@endif





<form

action="{{ route('kontak.store') }}"

method="POST"

class="mt-8 space-y-5">


@csrf





<div>

<label class="font-medium text-gray-700">

Nama

</label>


<input

name="nama"

value="{{ old('nama') }}"

class="w-full mt-2 border rounded-lg p-3 focus:ring-2 focus:ring-[#C79A3B]"

placeholder="Masukkan nama">


@error('nama')

<p class="text-red-500 text-sm">

{{ $message }}

</p>

@enderror


</div>







<div>


<label class="font-medium text-gray-700">

Email

</label>


<input

type="email"

name="email"

value="{{ old('email') }}"

class="w-full mt-2 border rounded-lg p-3 focus:ring-2 focus:ring-[#C79A3B]"

placeholder="email@example.com">


@error('email')

<p class="text-red-500 text-sm">

{{ $message }}

</p>

@enderror


</div>








<div>


<label class="font-medium text-gray-700">

Nomor WhatsApp

</label>


<input

name="telepon"

value="{{ old('telepon') }}"

class="w-full mt-2 border rounded-lg p-3 focus:ring-2 focus:ring-[#C79A3B]"

placeholder="08xxxxxxxxxx">


</div>







<div>


<label class="font-medium text-gray-700">

Pesan

</label>



<textarea

name="pesan"

rows="5"

class="w-full mt-2 border rounded-lg p-3 focus:ring-2 focus:ring-[#C79A3B]"

placeholder="Tuliskan kebutuhan konsultasi">{{ old('pesan') }}</textarea>



@error('pesan')

<p class="text-red-500 text-sm">

{{ $message }}

</p>

@enderror


</div>







<button

class="w-full bg-[#C79A3B]
hover:bg-[#b58a32]
text-white
py-3
rounded-lg
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


<div
data-aos="fade-up"
class="text-center mb-10">


<h2 class="text-3xl font-bold text-[#3B2508]">

Lokasi Kami

</h2>


<p class="mt-3 text-gray-600">

Temukan lokasi kantor CV Sahabat Eksplorasi Banua.

</p>


</div>





<div class="rounded-2xl overflow-hidden shadow-xl">


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