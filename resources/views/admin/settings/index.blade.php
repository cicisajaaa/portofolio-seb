@extends('admin.layouts.app')

@section('content')
<div class="max-w-4xl mx-auto pb-12 space-y-8">
    
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div class="text-left text-white">
                <div class="flex items-center gap-2 mb-1">
                    <span class="w-2 h-2 rounded-full bg-[#C79A3B] animate-pulse"></span>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#C79A3B]">
                        Configuration
                    </span>
                </div>
                <h1 class="text-xl sm:text-2xl font-bold tracking-tight">
                    Pengaturan Identitas Perusahaan
                </h1>
                <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                    Kelola informasi kontak, alamat, dan nomor WhatsApp perusahaan secara terstruktur.
                </p>
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

    {{-- FORM SETTINGS --}}
    <section class="company-card p-7 sm:p-9">
        <form action="{{ route('settings.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" value="{{ $settings['nama_perusahaan'] ?? '' }}" class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition">
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">Email Perusahaan</label>
                    <input type="email" name="email" value="{{ $settings['email'] ?? '' }}" class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition">
                </div>
            </div>

            {{-- 3 KOLOM NOMOR TELEPON / WHATSAPP --}}
            <div class="p-6 bg-amber-50/40 border border-amber-100/80 rounded-2xl space-y-4">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#3B2508] flex items-center gap-2">
                    <span>📞</span> Pengaturan Nomor Telepon / WhatsApp
                </h3>
                
                <div class="grid sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-600 mb-1.5">Nomor 1 (Utama)</label>
                        <input type="text" name="telepon_1" value="{{ $settings['telepon_1'] ?? '' }}" class="w-full px-3.5 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:border-[#C79A3B] focus:ring-2 focus:ring-[#C79A3B]/10 transition" placeholder="+62 ...">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-600 mb-1.5">Nomor 2 (Opsional)</label>
                        <input type="text" name="telepon_2" value="{{ $settings['telepon_2'] ?? '' }}" class="w-full px-3.5 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:border-[#C79A3B] focus:ring-2 focus:ring-[#C79A3B]/10 transition" placeholder="+62 ...">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-600 mb-1.5">Nomor 3 (Opsional)</label>
                        <input type="text" name="telepon_3" value="{{ $settings['telepon_3'] ?? '' }}" class="w-full px-3.5 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:border-[#C79A3B] focus:ring-2 focus:ring-[#C79A3B]/10 transition" placeholder="+62 ...">
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">Jam Operasional Kantor</label>
                    <textarea name="jam_operasional" rows="3" class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition">{{ $settings['jam_operasional'] ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">Nomor WhatsApp Tombol Chat (Tanpa +)</label>
                    <input type="text" name="whatsapp" value="{{ $settings['whatsapp'] ?? '' }}" class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition" placeholder="Contoh: 6285248512861">
                </div>
            </div>

            <div>
                <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-2">Alamat Kantor Lengkap</label>
                <textarea name="alamat" rows="4" class="w-full px-4 py-3.5 bg-gray-50/50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 transition">{{ $settings['alamat'] ?? '' }}</textarea>
            </div>


            {{-- PENGATURAN SEO / META TAGS --}}
            <div class="p-6 bg-blue-50/40 border border-blue-100/80 rounded-2xl space-y-4">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#3B2508] flex items-center gap-2">
                    <span>🌐</span> Pengaturan SEO & Meta Tags Website
                </h3>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-600 mb-1.5">Meta Title (Judul Website di Google/Tab)</label>
                        <input type="text" name="meta_title" value="{{ $settings['meta_title'] ?? '' }}" class="w-full px-3.5 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:border-[#C79A3B] focus:ring-2 focus:ring-[#C79A3B]/10 transition">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-600 mb-1.5">Meta Description (Deskripsi singkat untuk Google)</label>
                        <textarea name="meta_description" rows="3" class="w-full px-3.5 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:border-[#C79A3B] focus:ring-2 focus:ring-[#C79A3B]/10 transition">{{ $settings['meta_description'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>
            <div class="flex justify-end pt-6 border-t border-gray-100">
                <button type="submit" class="inline-flex items-center gap-2 bg-[#3B2508] hover:bg-[#241505] text-white px-8 py-3.5 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl">
                    <span>Simpan Pengaturan</span>
                </button>
            </div>
        </form>
    </section>

</div>
@endsection