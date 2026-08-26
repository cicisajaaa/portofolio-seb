@extends('admin.layouts.app')


@section('content')


<div class="max-w-5xl mx-auto space-y-8">



<!-- HEADER -->

<section class="bg-white rounded-2xl border border-gray-100 p-8">


<div class="flex items-start gap-5">


<div class="
w-1.5
rounded-full
bg-[#C79A3B]">

</div>


<div>


<p class="
text-xs
uppercase
tracking-[0.25em]
font-semibold
text-[#C79A3B]">

Management

</p>



<h1 class="
mt-2
text-3xl
font-bold
text-[#3B2508]">

Import Pengalaman Kerjasama

</h1>




<p class="
mt-3
text-gray-500
leading-relaxed
max-w-2xl">


Tambahkan data pengalaman pekerjaan CV Sahabat Eksplorasi Banua
melalui file Excel untuk memperbarui daftar proyek perusahaan.


</p>



</div>


</div>


</section>







<!-- FORM -->

<section class="
bg-white
rounded-2xl
border
border-gray-100
p-8">





<form

action="{{ route('projects.import.store') }}"

method="POST"

enctype="multipart/form-data">


@csrf





<div>


<label class="
block
text-sm
font-semibold
text-[#3B2508]">


Upload File Excel


</label>




<div class="
mt-4
border
border-dashed
border-gray-300
rounded-2xl
p-10
text-center
hover:border-[#C79A3B]
transition">


<div class="
mx-auto
w-14
h-14
rounded-full
bg-[#F8F7F2]
flex
items-center
justify-center">


<span class="
text-xl
text-[#C79A3B]">

XLS

</span>


</div>



<h3 class="
mt-5
font-semibold
text-[#3B2508]">


Pilih dokumen Excel


</h3>



<p class="
mt-2
text-sm
text-gray-500">


Gunakan format .xlsx atau .xls sesuai template pengalaman kerjasama.


</p>



<input

type="file"

name="file"

accept=".xlsx,.xls"

class="
mt-6
mx-auto
block
text-sm
text-gray-600">


</div>





@error('file')

<p class="
mt-3
text-sm
text-red-500">

{{ $message }}

</p>

@enderror



</div>









<!-- NOTES -->

<div class="
mt-8
bg-[#F8F7F2]
rounded-xl
p-6">


<h3 class="
font-semibold
text-[#3B2508]">


Catatan Import


</h3>


<ul class="
mt-3
space-y-2
text-sm
text-gray-600">


<li>
• Pastikan nama kolom Excel sesuai dengan format sistem.
</li>


<li>
• Data yang berhasil diimport akan otomatis masuk ke daftar pengalaman kerjasama.
</li>


<li>
• Periksa kembali data sebelum melakukan proses import.
</li>


</ul>


</div>









<!-- BUTTON -->

<div class="
flex
justify-between
items-center
mt-8
pt-6
border-t">





<a href="{{ route('projects.index') }}"

class="
px-6
py-3
rounded-xl

border
border-gray-200

text-gray-600

font-medium

hover:bg-gray-100

transition">


Kembali


</a>






<button

type="submit"

class="
px-8
py-3

rounded-xl

bg-[#3B2508]

hover:bg-[#C79A3B]

text-white

font-semibold

transition">


Import Data


</button>




</div>





</form>


</section>




</div>


@endsection