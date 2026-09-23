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

    {{-- HERO HEADER (KONSISTEN DENGAN HALAMAN LAIN) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
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
                    Import Pengalaman Kerjasama
                </h1>
                <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                    Tambahkan data pengalaman pekerjaan CV Sahabat Eksplorasi Banua melalui file Excel.
                </p>
            </div>
        </div>
    </div>

    {{-- FORM SECTION --}}
    <section class="company-card p-7 sm:p-9">
        <form action="{{ route('projects.import.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- UPLOAD FILE EXCEL --}}
            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">
                    Upload File Excel
                </label>

                <div class="mt-2 border-2 border-dashed border-gray-200 rounded-2xl p-8 sm:p-10 text-center hover:border-[#C79A3B] bg-gray-50/50 transition group">
                    <div class="mx-auto w-14 h-14 rounded-2xl bg-amber-50 text-[#C79A3B] flex items-center justify-center font-bold text-sm shadow-sm border border-amber-100 group-hover:scale-105 transition-transform">
                        XLS
                    </div>

                    <h3 class="mt-4 font-bold text-[#3B2508] text-base">
                        Pilih dokumen Excel
                    </h3>

                    <p class="mt-1 text-xs text-gray-500 max-w-sm mx-auto">
                        Gunakan format .xlsx atau .xls sesuai template pengalaman kerjasama perusahaan.
                    </p>

                    <input type="file"
                           name="file"
                           accept=".xlsx,.xls"
                           class="mt-5 mx-auto block text-xs text-gray-500 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-amber-50 file:text-[#C79A3B] hover:file:bg-amber-100 transition cursor-pointer">
                </div>

                @error('file')
                    <p class="text-red-500 text-xs mt-2 font-medium flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- CATATAN IMPORT --}}
            <div class="bg-amber-50/50 rounded-2xl p-6 border border-amber-100/60">
                <h3 class="font-bold text-[#3B2508] text-sm flex items-center gap-2">
                    <span>💡</span> Catatan Import Data
                </h3>
                <ul class="mt-2.5 space-y-1.5 text-xs text-gray-600 leading-relaxed">
                    <li>• Pastikan nama kolom pada file Excel sudah sesuai dengan format template sistem.</li>
                    <li>• Data yang berhasil diimport akan otomatis masuk ke dalam daftar pengalaman kerjasama.</li>
                    <li>• Disarankan untuk memeriksa kembali isi file Excel sebelum melakukan proses import.</li>
                </ul>
            </div>

            {{-- TOMBOL AKSI --}}
            <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                <a href="{{ route('projects.index') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 font-semibold text-sm transition">
                    ← Kembali
                </a>

                <button type="submit"
                        class="inline-flex items-center gap-2 bg-[#3B2508] hover:bg-[#241505] text-white px-7 py-3 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <span>Import Data</span>
                </button>
            </div>

        </form>
    </section>

</div>
@endsection