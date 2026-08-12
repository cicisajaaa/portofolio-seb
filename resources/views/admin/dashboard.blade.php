@extends('admin.layouts.app')


@section('content')


<div class="max-w-7xl mx-auto space-y-8">



<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-7">


<p class="text-xs font-semibold text-[#C79A3B] uppercase tracking-widest">

Administrator Panel

</p>


<h1 class="mt-2 text-3xl font-bold text-[#3B2508]">

Dashboard Admin SEB

</h1>


<p class="mt-2 text-gray-500">

Kelola informasi website resmi
CV Sahabat Eksplorasi Banua melalui panel administrator.

</p>


</section>






<!-- STATISTIK -->


<section>


<div class="grid md:grid-cols-3 gap-6">





<!-- PROJECT -->

<div class="bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-lg transition">


<div class="flex justify-between items-start">


<div>

<p class="text-sm text-gray-500">

Total Proyek

</p>


<h2 class="mt-3 text-3xl font-bold text-[#C79A3B]">

{{ \App\Models\Project::count() }}

</h2>


</div>



<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-xl">

📁

</div>


</div>


<p class="mt-4 text-xs text-gray-400">

Dokumentasi pekerjaan perusahaan

</p>


</div>








<!-- GALERI -->

<div class="bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-lg transition">


<div class="flex justify-between items-start">


<div>


<p class="text-sm text-gray-500">

Total Galeri

</p>


<h2 class="mt-3 text-3xl font-bold text-[#C79A3B]">

{{ \App\Models\Gallery::count() }}

</h2>


</div>



<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-xl">

📷

</div>


</div>



<p class="mt-4 text-xs text-gray-400">

Dokumentasi kegiatan lapangan

</p>


</div>








<!-- PESAN -->


<div class="bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-lg transition">


<div class="flex justify-between items-start">


<div>


<p class="text-sm text-gray-500">

Pesan Masuk

</p>


<h2 class="mt-3 text-3xl font-bold text-[#C79A3B]">

{{ \App\Models\Contact::count() }}

</h2>


</div>



<div class="w-12 h-12 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center text-xl">

✉️

</div>


</div>



<p class="mt-4 text-xs text-gray-400">

Permintaan konsultasi pelanggan

</p>


</div>




</div>


</section>








<!-- RINGKASAN -->


<section>


<div class="mb-5">


<h2 class="text-xl font-bold text-[#3B2508]">

Ringkasan Sistem

</h2>


<p class="text-sm text-gray-500">

Informasi umum mengenai website dan sistem administrator.

</p>


</div>





<div class="grid md:grid-cols-3 gap-6">





<div class="bg-white rounded-2xl border border-gray-100 p-6">


<div class="flex items-center gap-4">


<div class="w-11 h-11 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center">

📊

</div>



<h3 class="font-bold text-[#3B2508]">

Data Website

</h3>


</div>



<p class="mt-4 text-sm text-gray-500 leading-relaxed">

Data proyek, galeri, dan informasi perusahaan
dapat dikelola melalui panel administrator.

</p>



</div>







<div class="bg-white rounded-2xl border border-gray-100 p-6">


<div class="flex items-center gap-4">


<div class="w-11 h-11 rounded-xl bg-[#C79A3B]/20 flex items-center justify-center">

⚙️

</div>


<h3 class="font-bold text-[#3B2508]">

Status Sistem

</h3>


</div>



<p class="mt-4 text-sm text-gray-500 leading-relaxed">

Sistem menggunakan Laravel dengan database
MySQL untuk pengelolaan data.

</p>


</div>








<div class="bg-white rounded-2xl border border-gray-100 p-6">


<div class="flex items-center gap-4">


<div class="w-11 h-11 rounded-xl bg-[#C79A3B]/20 flex itmes-center justify-center">

👤

</div>


<h3 class="font-bold text-[#3B2508]">

Administrator

</h3>


</div>



<p class="mt-4 text-sm text-gray-500 leading-relaxed">

Pengelolaan website dilakukan oleh administrator
yang memiliki hak akses sistem.

</p>


</div>




</div>


</section>








<!-- INFO -->


<section class="bg-[#3B2508] rounded-2xl p-6 text-white">


<div class="grid md:grid-cols-3 gap-6">



<div>

<p class="text-xs text-gray-300">

Perusahaan

</p>


<p class="mt-2 font-semibold">

CV Sahabat Eksplorasi Banua

</p>

</div>






<div>


<p class="text-xs text-gray-300">

Status Website

</p>


<p class="mt-2 font-semibold text-green-400">

● Online

</p>


</div>






<div>


<p class="text-xs text-gray-300">

Versi Sistem

</p>


<p class="mt-2 font-semibold">

Company Profile v1.0

</p>


</div>



</div>


</section>



</div>


@endsection