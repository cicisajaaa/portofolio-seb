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

    {{-- HERO HEADER (DISAMAKAN PERSIS DENGAN HALAMAN LAIN) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-5">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-[#C79A3B] animate-pulse"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#C79A3B]">
                            Management
                        </span>
                    </div>
                    <h1 class="text-xl sm:text-2xl font-bold tracking-tight">
                        Pengalaman Kerjasama
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                        Mengatur riwayat pekerjaan dan pengalaman CV Sahabat Eksplorasi Banua.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <a href="{{ route('projects.import') }}"
                   class="inline-flex items-center justify-center gap-1.5 bg-emerald-600 hover:bg-emerald-700 text-white px-5 py-3 rounded-xl font-semibold text-sm transition-all shadow-md">
                    <span>📥 Import Excel</span>
                </a>

                <a href="{{ route('projects.create') }}"
                   class="inline-flex items-center justify-center gap-1.5 bg-[#C79A3B] hover:bg-[#b38732] text-white px-5 py-3 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <span>+ Tambah Pengalaman</span>
                </a>
            </div>
        </div>
    </div>

    {{-- SUCCESS NOTIFICATION --}}
    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-5 py-4 rounded-2xl flex items-center gap-3 shadow-sm">
            <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-sm font-medium">{{ session('success') }}</span>
        </div>
    @endif

    {{-- FILTER SECTION --}}
    <section class="bg-white rounded-3xl border border-gray-100 p-6 shadow-sm">
        <form method="GET">
            <div class="grid md:grid-cols-4 gap-4">
                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari perusahaan atau proyek..."
                       class="h-12 w-full px-4 rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 text-sm transition">

                <select name="tahun"
                        class="h-12 w-full px-4 rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 text-sm transition">
                    <option value="">Semua Tahun</option>
                    @foreach($tahun as $item)
                        <option value="{{ $item }}" {{ request('tahun') == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                    @endforeach
                </select>

                <select name="kegiatan"
                        class="h-12 w-full px-4 rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 text-sm transition">
                    <option value="">Semua Kegiatan</option>
                    @foreach($kegiatan as $item)
                        <option value="{{ $item }}" {{ request('kegiatan') == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                    @endforeach
                </select>

                <button type="submit"
                        class="h-12 w-full rounded-xl bg-[#3B2508] hover:bg-[#C79A3B] text-white font-semibold text-sm transition shadow-md">
                    Cari Data
                </button>
            </div>
        </form>
    </section>

    {{-- LIST PROYEK --}}
    <section>
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

            @forelse($projects as $project)

                <div class="company-card overflow-hidden relative group flex flex-col justify-between">
                    {{-- Aksen Garis Emas di Samping Kartu saat Hover --}}
                    <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 z-10"></div>

                    <div>
                        {{-- GAMBAR PROYEK --}}
                        <div class="relative overflow-hidden bg-gray-100">
                            @if($project->gambar)
                                <img src="{{ asset('storage/'.$project->gambar) }}"
                                     loading="lazy"
                                     class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="h-52 bg-gray-50 flex items-center justify-center text-gray-400 text-sm font-medium">
                                    Tidak Ada Dokumentasi
                                </div>
                            @endif

                            <div class="absolute top-4 left-4 z-10">
                                <span class="bg-[#3B2508]/85 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border border-white/15 shadow-sm">
                                    {{ $project->tahun }}
                                </span>
                            </div>
                        </div>

                        {{-- DETAIL KONTEN --}}
                        <div class="p-6">
                            <h2 class="text-lg font-bold text-[#3B2508] tracking-tight line-clamp-1">
                                {{ $project->perusahaan }}
                            </h2>
                            <p class="mt-0.5 text-xs text-gray-500 font-medium">
                                {{ $project->instansi }}
                            </p>

                            <div class="mt-5 space-y-3 text-xs text-gray-600 bg-gray-50/70 p-4 rounded-2xl border border-gray-100">
                                <div>
                                    <span class="font-bold uppercase tracking-wider text-[#3B2508] text-[10px]">Kegiatan:</span>
                                    <p class="mt-0.5 font-medium text-gray-700">{{ $project->kegiatan }}</p>
                                </div>
                                <div>
                                    <span class="font-bold uppercase tracking-wider text-[#3B2508] text-[10px]">Lokasi:</span>
                                    <p class="mt-0.5 font-medium text-gray-700">{{ $project->lokasi }}</p>
                                </div>
                                <div>
                                    <span class="font-bold uppercase tracking-wider text-[#3B2508] text-[10px]">Pekerjaan:</span>
                                    <p class="mt-0.5 text-gray-600 leading-relaxed">{{ Str::limit($project->jenis_pekerjaan, 100) }}</p>
                                </div>
                            </div>

                            <div class="mt-5 pt-4 border-t border-gray-100">
                                <p class="text-xs font-bold text-[#3B2508] line-clamp-1">
                                    📁 {{ $project->nama_proyek }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ACTION BUTTONS --}}
                    <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-100/80 mt-2">
                        <div class="flex gap-2">
                            <a href="{{ route('projects.show',$project->id) }}"
                               class="inline-flex items-center gap-1 bg-blue-50 hover:bg-blue-100 text-blue-700 px-3 py-2 rounded-xl font-semibold text-xs transition-all">
                                Lihat
                            </a>
                            <a href="{{ route('projects.edit',$project->id) }}"
                               class="inline-flex items-center gap-1 bg-amber-50 hover:bg-amber-100 text-[#3B2508] px-3 py-2 rounded-xl font-semibold text-xs transition-all">
                                Edit
                            </a>
                        </div>

                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus pengalaman ini?')"
                                    class="inline-flex items-center gap-1 bg-red-50 hover:bg-red-100 text-red-600 px-3 py-2 rounded-xl font-semibold text-xs transition-all">
                                Hapus
                            </button>
                        </form>
                    </div>

                </div>

            @empty

                <div class="col-span-full">
                    <div class="company-card p-12 text-center">
                        <div class="w-16 h-16 bg-amber-50 text-[#C79A3B] rounded-2xl flex items-center justify-center mx-auto text-2xl mb-4 border border-amber-100">
                            📂
                        </div>
                        <h3 class="text-xl font-bold text-[#3B2508]">
                            Belum Ada Pengalaman Kerjasama
                        </h3>
                        <p class="mt-1.5 text-sm text-gray-500 max-w-sm mx-auto">
                            Tambahkan riwayat pekerjaan atau impor data dari Excel untuk menampilkannya di sini.
                        </p>
                        <a href="{{ route('projects.create') }}"
                           class="inline-flex items-center justify-center gap-2 mt-6 bg-[#C79A3B] hover:bg-[#b38732] text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all shadow-md">
                            <span>+ Tambah Pengalaman</span>
                        </a>
                    </div>
                </div>

            @endforelse

        </div>
    </section>

</div>
@endsection