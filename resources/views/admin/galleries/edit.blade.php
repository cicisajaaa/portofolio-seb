@extends('admin.layouts.app')

@section('content')
<div class="max-w-4xl mx-auto pb-12 space-y-8">

    {{-- CUSTOM CSS KHUSUS KARTU & INTERAKTIF --}}
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
                    Edit Galeri
                </h1>
                <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                    Perbarui dokumentasi kegiatan perusahaan CV Sahabat Eksplorasi Banua.
                </p>
            </div>
        </div>
    </div>

    {{-- FORM SECTION --}}
    <section class="company-card p-7 sm:p-9">
        <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- PILIH PROYEK --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Pilih Proyek Terkait <span class="text-gray-400 font-normal">(Opsional)</span>
                </label>
                <select name="project_id"
                        class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition">
                    <option value="">-- Pilih Proyek --</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" {{ old('project_id', $gallery->project_id) == $project->id ? 'selected' : '' }}>
                            {{ $project->nama_proyek }} - {{ $project->perusahaan }}
                        </option>
                    @endforeach
                </select>
                @error('project_id')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- JUDUL DOKUMENTASI --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Judul Dokumentasi
                </label>
                <input type="text"
                       name="judul"
                       value="{{ old('judul', $gallery->judul) }}"
                       class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition"
                       placeholder="Contoh: Kegiatan Survey Lapangan Geologi">
                @error('judul')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- GAMBAR SAAT INI --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Gambar Saat Ini
                </label>
                @if($gallery->gambar)
                    <div class="overflow-hidden rounded-2xl border border-gray-200 inline-block shadow-sm">
                        <img src="{{ asset('storage/'.$gallery->gambar) }}" class="w-64 h-48 object-cover">
                    </div>
                @else
                    <div class="w-64 h-48 bg-gray-50 rounded-2xl flex items-center justify-center text-gray-400 text-xs font-medium border border-gray-200">
                        Tidak Ada Gambar
                    </div>
                @endif
            </div>

            {{-- GANTI GAMBAR BARU --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Ganti Dokumentasi <span class="text-gray-400 font-normal">(Opsional)</span>
                </label>
                <input type="file"
                       name="gambar"
                       id="gambar"
                       accept="image/*"
                       class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-xl text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-amber-50 file:text-[#C79A3B] hover:file:bg-amber-100 transition">
                <p class="text-xs text-gray-400 mt-1.5">
                    Kosongkan jika tidak ingin mengganti gambar. Format JPG, JPEG, PNG maksimal 2MB.
                </p>

                {{-- PREVIEW GAMBAR BARU --}}
                <div id="preview-container" class="hidden mt-6">
                    <p class="text-xs font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                        Preview Gambar Baru
                    </p>
                    <img id="preview" class="w-64 h-48 object-cover rounded-2xl border border-gray-200 shadow-md">
                </div>

                @error('gambar')
                    <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- TOMBOL AKSI --}}
            <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                <a href="{{ route('galleries.index') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 font-semibold text-sm transition">
                    ← Kembali
                </a>

                <button type="submit"
                        class="inline-flex items-center gap-2 bg-[#3B2508] hover:bg-[#241505] text-white px-7 py-3 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <span>Update Galeri</span>
                </button>
            </div>

        </form>
    </section>

</div>

{{-- SCRIPT PREVIEW GAMBAR BARU --}}
<script>
const input = document.getElementById('gambar');
const preview = document.getElementById('preview');
const container = document.getElementById('preview-container');

if(input){
    input.addEventListener('change', function(e){
        const file = e.target.files[0];
        if(file){
            preview.src = URL.createObjectURL(file);
            container.classList.remove('hidden');
        }
    });
}
</script>
@endsection