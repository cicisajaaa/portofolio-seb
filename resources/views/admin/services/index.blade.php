@extends('admin.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto pb-12 space-y-8">
    
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

    {{-- HERO HEADER --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-5">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
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
                        Kelola Layanan
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                        Mengatur daftar jasa dan layanan konsultasi CV Sahabat Eksplorasi Banua.
                    </p>
                </div>
            </div>

            <a href="{{ route('services.create') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#C79A3B] hover:bg-[#b38732] text-white px-5 py-3 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 shrink-0">
                <span>+ Tambah Layanan</span>
            </a>
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

    {{-- LIST LAYANAN --}}
    <section>
        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">

            @forelse($services as $service)

                <div class="company-card overflow-hidden relative group flex flex-col justify-between">
                    <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 z-10"></div>

                    <div>
                        @if($service->gambar)
                            <div class="relative overflow-hidden bg-gray-100">
                                <img src="{{ asset('storage/'.$service->gambar) }}"
                                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @else
                            <div class="w-full h-32 bg-amber-50/50 flex items-center justify-center text-3xl border-b border-gray-100">
                                🛡️
                            </div>
                        @endif

                        <div class="p-6">
                            <h2 class="text-lg font-bold text-[#3B2508] tracking-tight">
                                {{ $service->nama_layanan }}
                            </h2>
                            <p class="mt-2 text-xs text-gray-600 leading-relaxed line-clamp-3">
                                {{ $service->deskripsi_singkat }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-2 flex justify-between items-center border-t border-gray-100/80 mt-2">
                        <a href="{{ route('services.edit', $service->id) }}"
                           class="inline-flex items-center gap-1.5 bg-amber-50 hover:bg-amber-100 text-[#3B2508] px-4 py-2 rounded-xl font-semibold text-xs transition-all">
                            <span>✏️ Edit</span>
                        </a>

                        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus layanan ini?')"
                                    class="inline-flex items-center gap-1.5 bg-red-50 hover:bg-red-100 text-red-600 px-4 py-2 rounded-xl font-semibold text-xs transition-all">
                                <span>🗑️ Hapus</span>
                            </button>
                        </form>
                    </div>

                </div>

            @empty

                <div class="col-span-full">
                    <div class="company-card p-12 text-center">
                        <div class="w-16 h-16 bg-amber-50 text-[#C79A3B] rounded-2xl flex items-center justify-center mx-auto text-2xl mb-4 border border-amber-100">
                            🛡️
                        </div>
                        <h3 class="text-xl font-bold text-[#3B2508]">
                            Belum Ada Layanan
                        </h3>
                        <p class="mt-1.5 text-sm text-gray-500 max-w-sm mx-auto">
                            Tambahkan jenis jasa atau layanan perusahaan agar tampil di website publik.
                        </p>
                        <a href="{{ route('services.create') }}"
                           class="inline-flex items-center justify-center gap-2 mt-6 bg-[#C79A3B] hover:bg-[#b38732] text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all shadow-md">
                            <span>+ Tambah Layanan</span>
                        </a>
                    </div>
                </div>

            @endforelse

        </div>
    </section>

</div>
@endsection