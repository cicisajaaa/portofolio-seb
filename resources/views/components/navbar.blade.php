<nav class="fixed top-0 left-0 w-full z-50 bg-white shadow">


<div class="w-full px-4 md:px-8">


<div class="flex justify-between items-center h-20">



<!-- Logo -->

<a href="/"
class="flex items-center gap-3">


<img
src="{{ asset('assets/images/logo-seb.png') }}"
class="w-12 h-12 object-contain">


<div>


<h1 class="font-bold text-[#3B2508] text-base">

CV Sahabat Eksplorasi Banua

</h1>


<p class="text-xs text-gray-500">

Pertambangan & Lingkungan

</p>


</div>


</a>





<!-- Menu Desktop -->


<div class="hidden md:flex items-center gap-7 font-medium">


<a href="/"
class="{{ request()->is('/') ? 'text-[#C79A3B]' : 'text-gray-700' }}">

Beranda

</a>



<a href="/tentang"
class="{{ request()->is('tentang') ? 'text-[#C79A3B]' : 'text-gray-700' }}">

Tentang

</a>



<a href="/layanan"
class="{{ request()->is('layanan') ? 'text-[#C79A3B]' : 'text-gray-700' }}">

Layanan

</a>



<a href="/proyek"
class="{{ request()->is('proyek') || request()->is('proyek/*') ? 'text-[#C79A3B]' : 'text-gray-700' }}">

Proyek

</a>



<a href="/galeri"
class="{{ request()->is('galeri') ? 'text-[#C79A3B]' : 'text-gray-700' }}">

Galeri

</a>



<a href="/kontak"
class="{{ request()->is('kontak') ? 'text-[#C79A3B]' : 'text-gray-700' }}">

Kontak

</a>



</div>



</div>


</div>


</nav>