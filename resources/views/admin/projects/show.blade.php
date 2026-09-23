@extends('admin.layouts.app')

@section('content')
<div class="max-w-5xl mx-auto pb-12 space-y-8">

    {{-- CUSTOM CSS KHUSUS KARTU --}}
    <style>
        .company-card {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(229, 231, 235, 0.8);
            transition: all 0.3s ease;
        }
    </style>

    {{-- HERO HEADER (KONSISTEN DENGAN HALAMAN LAIN) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-5">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-[#C79A3B] animate-pulse"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#C79A3B]">
                            Portfolio Detail
                        </span>
                    </div>
                    <h1 class="text-xl sm:text-2xl font-bold tracking-tight line-clamp-1">
                        {{ $project->nama_proyek }}
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                        Detail pengalaman pekerjaan CV Sahabat Eksplorasi Banua.
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('projects.edit', $project->id) }}"
                   class="inline-flex items-center gap-1.5 bg-[#C79A3B] hover:bg-[#b38732] text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-md">
                    <span>✏️ Edit</span>
                </a>

                <a href="{{ route('projects.index') }}"
                   class="inline-flex items-center gap-1.5 bg-white/10 hover:bg-white/20 text-white border border-white/20 px-5 py-2.5 rounded-xl font-semibold text-sm transition-all backdrop-blur-md">
                    <span>← Kembali</span>
                </a>
            </div>
        </div>
    </div>

    {{-- FOTO DOKUMENTASI PROYEK --}}
    @if($project->gambar)
        <div class="company-card overflow-hidden">
            <img src="{{ asset('storage/'.$project->gambar) }}"
                 class="w-full h-[400px] object-cover">
        </div>
    @endif

    {{-- IDENTITAS PROYEK --}}
    <div class="company-card p-7 sm:p-9">
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">
                    Instansi Pelaksana
                </p>
                <h3 class="mt-1.5 text-base font-bold text-[#3B2508]">
                    {{ $project->instansi ?? '-' }}
                </h3>
            </div>

            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">
                    Perusahaan / Pemrakarsa
                </p>
                <h3 class="mt-1.5 text-base font-bold text-[#3B2508]">
                    {{ $project->perusahaan ?? '-' }}
                </h3>
            </div>
        </div>
    </div>

    {{-- INFORMASI UTAMA PROYEK --}}
    <div class="company-card p-7 sm:p-9">
        <h2 class="text-lg font-bold text-[#3B2508] mb-6 pb-3 border-b border-gray-100">
            Informasi Proyek
        </h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50/70 p-4 rounded-2xl border border-gray-100">
                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">Lokasi</p>
                <p class="mt-1 font-semibold text-[#3B2508] text-sm">{{ $project->lokasi ?? '-' }}</p>
            </div>

            <div class="bg-gray-50/70 p-4 rounded-2xl border border-gray-100">
                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">Tahun Pelaksanaan</p>
                <p class="mt-1 font-semibold text-[#3B2508] text-sm">{{ $project->tahun ?? '-' }}</p>
            </div>

            <div class="bg-gray-50/70 p-4 rounded-2xl border border-gray-100">
                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">Kegiatan</p>
                <p class="mt-1 font-semibold text-[#3B2508] text-sm">{{ $project->kegiatan ?? '-' }}</p>
            </div>
        </div>
    </div>

    {{-- JENIS PEKERJAAN --}}
    <div class="company-card p-7 sm:p-9">
        <h2 class="text-lg font-bold text-[#3B2508] mb-4">
            Jenis Pekerjaan
        </h2>
        <p class="text-sm text-gray-600 leading-relaxed bg-gray-50/50 p-4 rounded-2xl border border-gray-100">
            {{ $project->jenis_pekerjaan ?? '-' }}
        </p>
    </div>

    {{-- DESKRIPSI PROYEK --}}
    <div class="company-card p-7 sm:p-9 bg-amber-50/30 border-amber-100/60">
        <h2 class="text-lg font-bold text-[#3B2508] mb-4">
            Deskripsi Proyek
        </h2>
        <p class="text-sm text-gray-700 leading-relaxed">
            {{ $project->deskripsi ?? '-' }}
        </p>
    </div>

</div>
@endsection