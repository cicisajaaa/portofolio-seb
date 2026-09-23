@extends('admin.layouts.app')

@section('content')
<div class="max-w-4xl mx-auto pb-12 space-y-8">

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

    {{-- HERO HEADER --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
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
                    Edit Layanan
                </h1>
                <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                    Perbarui informasi jasa atau layanan konsultasi perusahaan.
                </p>
            </div>
        </div>
    </div>

    {{-- FORM SECTION --}}
    <section class="company-card p-7 sm:p-9">
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- NAMA LAYANAN --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Nama Layanan
                </label>
                <input type="text"
                       name="nama_layanan"
                       value="{{ old('nama_layanan', $service->nama_layanan) }}"
                       class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition"
                       placeholder="Contoh: Eksplorasi Mineral & Batubara">
                @error('nama_layanan')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- DESKRIPSI SINGKAT --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Deskripsi Singkat (Ringkasan Kartu)
                </label>
                <textarea name="deskripsi_singkat"
                          rows="3"
                          class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition"
                          placeholder="Tulis ringkasan singkat layanan ini...">{{ old('deskripsi_singkat', $service->deskripsi_singkat) }}</textarea>
                @error('deskripsi_singkat')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- DESKRIPSI LENGKAP --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Deskripsi Lengkap <span class="text-gray-400 font-normal">(Opsional)</span>
                </label>
                <textarea name="deskripsi_lengkap"
                          rows="5"
                          class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition"
                          placeholder="Tulis penjelasan mendetail mengenai layanan...">{{ old('deskripsi_lengkap', $service->deskripsi_lengkap) }}</textarea>
                @error('deskripsi_lengkap')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- GAMBAR SAAT INI --}}
            @if($service->gambar)
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                        Dokumentasi Saat Ini
                    </label>
                    <div class="overflow-hidden rounded-2xl border border-gray-200 inline-block shadow-sm">
                        <img src="{{ asset('storage/'.$service->gambar) }}" class="w-64 h-40 object-cover">
                    </div>
                </div>
            @endif

            {{-- GANTI GAMBAR BARU --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Ganti Dokumentasi <span class="text-gray-400 font-normal">(Opsional)</span>
                </label>
                <input type="file"
                       name="gambar"
                       accept="image/*"
                       class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-xl text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-amber-50 file:text-[#C79A3B] hover:file:bg-amber-100 transition">
                <p class="text-xs text-gray-400 mt-1.5">
                    Kosongkan jika tidak ingin mengganti gambar lama. Format JPG, JPEG, PNG maksimal 2MB.
                </p>
                @error('gambar')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- TOMBOL AKSI --}}
            <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                <a href="{{ route('services.index') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 font-semibold text-sm transition">
                    ← Kembali
                </a>

                <button type="submit"
                        class="inline-flex items-center gap-2 bg-[#3B2508] hover:bg-[#241505] text-white px-7 py-3 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <span>Simpan Perubahan</span>
                </button>
            </div>

        </form>
    </section>

</div>
@endsection