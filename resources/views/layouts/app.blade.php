<!DOCTYPE html>
<html lang="id">
<head>


<meta charset="UTF-8">


<meta name="viewport" 
content="width=device-width, initial-scale=1.0">



<title>

{{ $title ?? 'CV Sahabat Eksplorasi Banua | Konsultan Pertambangan dan Lingkungan' }}

</title>



<!-- Favicon -->

<link rel="icon"
type="image/png"
href="{{ asset('assets/images/logo-seb.png') }}">





<!-- SEO -->

<meta name="description"
content="{{ $description ?? 'CV Sahabat Eksplorasi Banua merupakan perusahaan konsultan pertambangan dan lingkungan yang menyediakan layanan eksplorasi, kajian teknis, survei, pemetaan, dan pengelolaan lingkungan berkelanjutan.' }}">



<meta name="keywords"
content="konsultan pertambangan, konsultan lingkungan, eksplorasi tambang, survei tambang, kajian lingkungan">



<meta name="author"
content="CV Sahabat Eksplorasi Banua">





<!-- OPEN GRAPH -->

<meta property="og:title"
content="{{ $title ?? 'CV Sahabat Eksplorasi Banua | Konsultan Pertambangan dan Lingkungan' }}">



<meta property="og:description"
content="{{ $description ?? 'Solusi profesional dalam bidang pertambangan dan lingkungan berbasis data dan keberlanjutan.' }}">



<meta property="og:image"
content="{{ asset('assets/images/logo-seb.png') }}">



<meta property="og:url"
content="{{ url()->current() }}">



<meta property="og:type"
content="website">





<!-- Twitter Card -->

<meta name="twitter:card"
content="summary_large_image">


<meta name="twitter:title"
content="CV Sahabat Eksplorasi Banua">



<meta name="twitter:description"
content="Konsultan pertambangan dan lingkungan profesional.">



<meta name="twitter:image"
content="{{ asset('assets/images/logo-seb.png') }}">





@vite([
'resources/css/app.css',
'resources/js/app.js'
])


</head>


<body class="bg-[#F8F7F2]">


@include('components.navbar')



<main class="pt-20">

@yield('content')

</main>



@include('components.footer')





<!-- Tombol WhatsApp -->
<a 
href="https://wa.me/6285252452303"
target="_blank"

class="fixed bottom-6 right-6 
bg-green-600 text-white
w-14 h-14 rounded-full
flex items-center justify-center
shadow-lg z-50
hover:scale-110 transition">


<svg 
xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 448 512"
class="w-7 h-7 fill-white">

<path d="M380.9 97.1C339-10.9 204.6-31.2 119.2 35.8C33.8 102.8 12.1 223.5 69.5 322.4L39.6 434l115.6-30.3c94.4 51.5 210.8 10.2 255.7-78.8c44.9-89 13-193.5-30-227.8z"/>

</svg>


</a>


</body>


</html>