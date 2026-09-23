@extends('admin.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto pb-12 space-y-8">

    {{-- CUSTOM CSS KHUSUS KARTU & INTERAKTIF --}}
    <style>
        .company-card {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(229, 231, 235, 0.8);
            transition: all 0.3s ease;
        }
        .company-card:hover {
            box-shadow: 0 20px 40px -10px rgba(59, 37, 8, 0.08);
            transform: translateY(-3px);
        }
    </style>

    {{-- HERO HEADER (KONSISTEN DENGAN HALAMAN LAIN) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zM14 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"/>
                </svg>
            </div>
            <div class="text-left text-white">
                <div class="flex items-center gap-2 mb-1">
                    <span class="w-2 h-2 rounded-full bg-[#C79A3B] animate-pulse"></span>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#C79A3B]">
                        Administrator Panel
                    </span>
                </div>
                <h1 class="text-xl sm:text-2xl font-bold tracking-tight">
                    Dashboard Admin SEB
                </h1>
                <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                    Kelola informasi website resmi CV Sahabat Eksplorasi Banua melalui panel administrator.
                </p>
            </div>
        </div>
    </div>

    {{-- STATISTIK KARTU --}}
    <section>
        <div class="grid md:grid-cols-3 gap-6">

            {{-- PROJECT --}}
            <div class="company-card p-6 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Total Proyek</p>
                        <h2 class="mt-3 text-3xl font-extrabold text-[#3B2508]">
                            {{ \App\Models\Project::count() }}
                        </h2>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-[#C79A3B] flex items-center justify-center text-xl border border-amber-100 shadow-sm">
                        📁
                    </div>
                </div>
                <p class="mt-4 text-xs text-gray-500 font-medium pt-3 border-t border-gray-100">
                    Dokumentasi pekerjaan perusahaan
                </p>
            </div>

            {{-- GALERI --}}
            <div class="company-card p-6 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Total Galeri</p>
                        <h2 class="mt-3 text-3xl font-extrabold text-[#3B2508]">
                            {{ \App\Models\Gallery::count() }}
                        </h2>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-[#C79A3B] flex items-center justify-center text-xl border border-amber-100 shadow-sm">
                        📷
                    </div>
                </div>
                <p class="mt-4 text-xs text-gray-500 font-medium pt-3 border-t border-gray-100">
                    Dokumentasi kegiatan lapangan
                </p>
            </div>

            {{-- PESAN --}}
            <div class="company-card p-6 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Pesan Masuk</p>
                        <h2 class="mt-3 text-3xl font-extrabold text-[#3B2508]">
                            {{ \App\Models\Contact::count() }}
                        </h2>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-[#C79A3B] flex items-center justify-center text-xl border border-amber-100 shadow-sm">
                        ✉️
                    </div>
                </div>
                <p class="mt-4 text-xs text-gray-500 font-medium pt-3 border-t border-gray-100">
                    Permintaan konsultasi pelanggan
                </p>
            </div>

        </div>
    </section>

    {{-- RINGKASAN SISTEM --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold text-[#3B2508]">Ringkasan Sistem</h2>
            <p class="text-sm text-gray-500">Informasi umum mengenai website dan sistem administrator.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="company-card p-6">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-11 h-11 rounded-xl bg-amber-50 text-[#C79A3B] flex items-center justify-center border border-amber-100">
                        📊
                    </div>
                    <h3 class="font-bold text-[#3B2508]">Data Website</h3>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Data proyek, galeri, dan informasi perusahaan dapat dikelola melalui panel administrator.
                </p>
            </div>

            <div class="company-card p-6">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-11 h-11 rounded-xl bg-amber-50 text-[#C79A3B] flex items-center justify-center border border-amber-100">
                        ⚙️
                    </div>
                    <h3 class="font-bold text-[#3B2508]">Status Sistem</h3>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Sistem menggunakan Laravel dengan database MySQL untuk pengelolaan data.
                </p>
            </div>

            <div class="company-card p-6">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-11 h-11 rounded-xl bg-amber-50 text-[#C79A3B] flex items-center justify-center border border-amber-100">
                        👤
                    </div>
                    <h3 class="font-bold text-[#3B2508]">Administrator</h3>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Pengelolaan website dilakukan oleh administrator yang memiliki hak akses sistem.
                </p>
            </div>

        </div>
    </section>

    {{-- INFO FOOTER BANNER --}}
    <section class="bg-gradient-to-r from-[#3B2508] to-[#241505] rounded-3xl p-6 sm:p-8 text-white shadow-lg border border-amber-900/20">
        <div class="grid md:grid-cols-3 gap-6">
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Perusahaan</p>
                <p class="mt-1 font-bold text-base text-[#C79A3B]">CV Sahabat Eksplorasi Banua</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Status Website</p>
                <p class="mt-1 font-bold text-base text-emerald-400 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Online
                </p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold">Versi Sistem</p>
                <p class="mt-1 font-bold text-base">Company Profile v1.0</p>
            </div>
        </div>
    </section>

</div>
@endsection