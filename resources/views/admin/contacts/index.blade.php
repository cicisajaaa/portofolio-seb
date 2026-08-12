@extends('admin.layouts.app')


@section('content')


<div class="max-w-7xl mx-auto space-y-8">





<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Management

</p>



<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

Pesan Konsultasi

</h1>



<p class="mt-2 text-gray-500">

Daftar pesan konsultasi dari pengunjung website
CV Sahabat Eksplorasi Banua.

</p>



</section>









<!-- SUCCESS -->


@if(session('success'))


<div class="bg-green-100 text-green-700 px-5 py-4 rounded-xl">

{{ session('success') }}

</div>


@endif







<!-- LIST PESAN -->


<section>


<div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">



@forelse($contacts as $contact)





<div class="bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-xl transition duration-300">





<!-- HEADER CARD -->


<div class="flex justify-between items-start">



<div>


<h2 class="text-xl font-bold text-[#3B2508]">

{{ $contact->nama }}

</h2>


<p class="mt-1 text-sm text-gray-500">

{{ $contact->email }}

</p>



</div>




<span class="bg-[#C79A3B]/20 text-[#C79A3B] w-10 h-10 rounded-xl flex items-center justify-center">

✉️

</span>



</div>









<!-- DETAIL -->


<div class="mt-6 space-y-4">





<div>


<p class="text-xs text-gray-400 uppercase tracking-wide">

WhatsApp

</p>


<p class="mt-1 font-medium text-gray-700">

{{ $contact->telepon ?? '-' }}

</p>


</div>







<div>


<p class="text-xs text-gray-400 uppercase tracking-wide">

Pesan

</p>


<p class="mt-2 text-sm text-gray-600 leading-relaxed">

{{ $contact->pesan }}

</p>


</div>





</div>









<!-- ACTION -->


<div class="mt-6 pt-5 border-t border-gray-100 flex justify-between items-center">





<a href="https://wa.me/{{ preg_replace('/[^0-9]/','',$contact->telepon) }}"

target="_blank"

class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-semibold text-sm">


<span>

💬

</span>


Balas WhatsApp


</a>







<form

action="{{ route('contacts.destroy',$contact->id) }}"

method="POST">


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus pesan ini?')"

class="text-red-500 hover:text-red-700 font-semibold text-sm">


Hapus


</button>



</form>




</div>






</div>






@empty





<div class="col-span-full">


<div class="bg-white rounded-2xl border border-gray-100 p-10 text-center">


<div class="text-4xl">

📭

</div>



<h3 class="mt-4 text-xl font-bold text-[#3B2508]">

Belum Ada Pesan Masuk

</h3>



<p class="mt-2 text-gray-500">

Pesan konsultasi pelanggan akan muncul di sini.

</p>



</div>


</div>





@endforelse




</div>


</section>






</div>


@endsection