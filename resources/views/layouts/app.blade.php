<!DOCTYPE html>
<html lang="id">

<head>


<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/images/logo-seb.png') }}">

<link rel="apple-touch-icon" href="{{ asset('assets/images/logo-seb.png') }}">

<link 
rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
CV Sahabat Eksplorasi Banua | Konsultan Pertambangan & Lingkungan
</title>


@vite([
'resources/css/app.css',
'resources/js/app.js'
])


</head>



<body class="font-sans antialiased bg-[#F8F7F2] overflow-x-hidden">


<div class="min-h-screen">

  <!-- NAVBAR PUBLIC -->

<nav class="
fixed
top-0
left-0
w-full
z-50
bg-white/90
backdrop-blur-lg
border-b
border-gray-100
shadow-sm
">


<div class="
w-full
px-6
md:px-10
py-3
flex
items-center
justify-between
">


<!-- LOGO -->

<div class="flex items-center gap-4 flex-shrink-0">


<div class="
w-12
h-12
md:w-14
md:h-14
rounded-full
overflow-hidden
border
border-[#C79A3B]/30
bg-white
p-1
">


<img
src="{{ asset('assets/images/logo-seb.png') }}"
class="w-full h-full object-contain">


</div>




<div>

<h1 class="
font-bold
text-[#3B2508]
text-sm
md:text-base
leading-tight
whitespace-nowrap
">

CV Sahabat Eksplorasi Banua

</h1>


<p class="
text-xs
text-gray-500
">

Company Profile

</p>


</div>


</div>







<!-- MENU DESKTOP -->

<div class="
hidden
md:flex
items-center
ml-auto
gap-8
lg:gap-10
text-gray-600
font-medium
">



<a href="{{ route('home') }}"
class="
relative
py-2
transition
{{ request()->routeIs('home')
? 'text-[#C79A3B]'
: 'hover:text-[#C79A3B]' }}
">

Beranda

@if(request()->routeIs('home'))
<span class="
absolute
bottom-0
left-0
w-full
h-0.5
bg-[#C79A3B]
rounded-full
"></span>
@endif

</a>





<a href="{{ route('tentang') }}"
class="
relative
py-2
transition
{{ request()->routeIs('tentang')
? 'text-[#C79A3B]'
: 'hover:text-[#C79A3B]' }}
">

Tentang

@if(request()->routeIs('tentang'))
<span class="
absolute
bottom-0
left-0
w-full
h-0.5
bg-[#C79A3B]
rounded-full
"></span>
@endif

</a>





<a href="{{ route('legalitas') }}"
class="
relative
py-2
transition
{{ request()->routeIs('legalitas')
? 'text-[#C79A3B]'
: 'hover:text-[#C79A3B]' }}
">

Legalitas

@if(request()->routeIs('legalitas'))
<span class="
absolute
bottom-0
left-0
w-full
h-0.5
bg-[#C79A3B]
rounded-full
"></span>
@endif

</a>





<a href="{{ route('layanan') }}"
class="
relative
py-2
transition
{{ request()->routeIs('layanan')
? 'text-[#C79A3B]'
: 'hover:text-[#C79A3B]' }}
">

Layanan

@if(request()->routeIs('layanan'))
<span class="
absolute
bottom-0
left-0
w-full
h-0.5
bg-[#C79A3B]
rounded-full
"></span>
@endif

</a>





<a href="{{ route('proyek') }}"
class="
relative
py-2
transition
{{ request()->routeIs('proyek')
? 'text-[#C79A3B]'
: 'hover:text-[#C79A3B]' }}
">

Portofolio

@if(request()->routeIs('proyek'))
<span class="
absolute
bottom-0
left-0
w-full
h-0.5
bg-[#C79A3B]
rounded-full
"></span>
@endif

</a>





<a href="{{ route('kontak') }}"
class="
relative
py-2
transition
{{ request()->routeIs('kontak')
? 'text-[#C79A3B]'
: 'hover:text-[#C79A3B]' }}
">

Konsultasi

@if(request()->routeIs('kontak'))
<span class="
absolute
bottom-0
left-0
w-full
h-0.5
bg-[#C79A3B]
rounded-full
"></span>
@endif

</a>



</div>





</div>


</nav>
<!-- CONTENT -->
<main class="pt-20">


@yield('content')


</main>


<!-- FOOTER -->

<footer class="bg-[#3B2508] text-white py-6">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <p class="text-sm text-gray-300">
            © {{ date('Y') }} CV Sahabat Eksplorasi Banua. All Rights Reserved.
        </p>

    </div>

</footer>



</div>




<div class="fixed bottom-6 right-6 z-50 group">


<div class="
absolute
right-20
top-1/2
-translate-y-1/2

bg-[#3B2508]
text-white

text-sm

px-4
py-2

rounded-lg

opacity-0
group-hover:opacity-100

transition
duration-300

whitespace-nowrap
">


Hubungi via WhatsApp


</div>





<a href="https://wa.me/6285828125783"

target="_blank"

class="
w-16
h-16

bg-[#25D366]

rounded-full

flex
items-center
justify-center

shadow-xl
shadow-green-500/30

hover:scale-110

transition">


<i class="fa-brands fa-whatsapp text-white text-4xl"></i>


</a>


</div>

</body>


</html>