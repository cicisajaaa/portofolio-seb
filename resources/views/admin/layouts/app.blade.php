<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
Admin SEB
</title>


@vite([
'resources/css/app.css',
'resources/js/app.js'
])

</head>




<body class="bg-[#F8F7F2]">



<div class="min-h-screen flex">






<!-- SIDEBAR -->


<aside 
class="w-64
bg-gradient-to-b 
from-[#3B2508] 
to-[#241505]
text-white
min-h-screen
flex
flex-col
shrink-0
sticky
top-0">







<!-- LOGO -->


<div class="p-5 border-b border-white/10">



<div class="flex items-center gap-4">



<div class="w-11 h-11 rounded-full overflow-hidden ring-2 ring-[#C79A3B] flex items-center justify-center">


<img

src="{{ asset('assets/images/logo-seb.png') }}"

class="w-full h-full object-cover">


</div>





<div>


<h1 class="font-bold text-lg">

Admin SEB

</h1>


<p class="text-xs text-gray-300 leading-relaxed">

CV Sahabat Eksplorasi Banua

</p>


</div>



</div>



</div>










<!-- NAVIGATION -->


<nav class="flex-1 px-5 py-6 space-y-1">





<p class="px-4 mb-3 text-xs uppercase tracking-widest text-gray-400">

Menu Utama

</p>








<!-- DASHBOARD -->


<a href="{{ route('admin.dashboard') }}"


class="relative flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200

{{ request()->routeIs('admin.dashboard')

? 'bg-white/20 text-white shadow-lg'

: 'text-gray-300 hover:bg-white/10 hover:text-white' }}">



@if(request()->routeIs('admin.dashboard'))

<span class="absolute left-0 w-1 h-8 bg-[#C79A3B] rounded-r-full"></span>

@endif



<span class="text-xl">

🏠

</span>


<span class="text-sm font-medium">

Dashboard

</span>


</a>









<!-- PROJECT -->


<a href="{{ route('projects.index') }}"


class="relative flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200

{{ request()->routeIs('projects.*')

? 'bg-white/20 text-white shadow-lg'

: 'text-gray-300 hover:bg-white/10 hover:text-white' }}">



@if(request()->routeIs('projects.*'))

<span class="absolute left-0 w-1 h-8 bg-[#C79A3B] rounded-r-full"></span>

@endif



<span class="text-base">

📁

</span>


<span class="text-sm font-medium">

Proyek

</span>


</a>









<!-- GALLERY -->


<a href="{{ route('galleries.index') }}"


class="relative flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200

{{ request()->routeIs('galleries.*')

? 'bg-white/20 text-white shadow-lg'

: 'text-gray-300 hover:bg-white/10 hover:text-white' }}">



@if(request()->routeIs('galleries.*'))

<span class="absolute left-0 w-1 h-8 bg-[#C79A3B] rounded-r-full"></span>

@endif



<span class="text-xl">

📷

</span>


<span class="text-sm font-medium">

Galeri

</span>


</a>









<!-- CONTACT -->


<a href="{{ route('contacts.index') }}"


class="relative flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200

{{ request()->routeIs('contacts.*')

? 'bg-white/20 text-white shadow-lg'

: 'text-gray-300 hover:bg-white/10 hover:text-white' }}">



@if(request()->routeIs('contacts.*'))

<span class="absolute left-0 w-1 h-8 bg-[#C79A3B] rounded-r-full"></span>

@endif



<span class="text-xl">

✉️

</span>


<span class="text-sm font-medium">
    
Pesan Konsultasi

</span>


</a>






</nav>









<!-- USER AREA -->


<div class="p-4 border-t border-white/10">





<div class="bg-white/10 rounded-xl p-4 mb-4">



<p class="text-xs text-gray-300">

Login sebagai

</p>



<p class="mt-1 font-semibold">

{{ Auth::user()->name }}

</p>



</div>







<form method="POST" action="{{ route('logout') }}">


@csrf


<button

type="submit"

class="w-full bg-[#C79A3B]
hover:bg-[#b38732]
py-3
rounded-xl
font-semibold
transition">


Logout


</button>



</form>






<p class="text-center text-xs text-gray-400 mt-5">

SEB Admin Panel v1.0

</p>



</div>







</aside>









<!-- CONTENT -->


<main class="flex-1 min-h-screen bg-[#F8F7F2]">


<div class="px-6 py-6 lg:px-8">


@yield('content')


</div>


</main>






</div>



</body>


</html>