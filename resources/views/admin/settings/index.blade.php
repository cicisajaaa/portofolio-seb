@extends('admin.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto pb-16 space-y-8 px-4 sm:px-6 lg:px-8">
    
    {{-- CUSTOM STYLING UNTUK EFEK MEWAH & ESTETIK --}}
    <style>
        .admin-glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 28px;
            box-shadow: 0 20px 40px -15px rgba(59, 37, 8, 0.05), 0 0 0 1px rgba(229, 231, 235, 0.8);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .admin-glass-card:hover {
            box-shadow: 0 25px 50px -12px rgba(59, 37, 8, 0.09), 0 0 0 1px rgba(199, 154, 59, 0.3);
        }
        .input-lux {
            background-color: #faf9f5;
            border: 1.5px solid #e5e2d9;
            transition: all 0.3s ease;
        }
        .input-lux:focus {
            background-color: #ffffff;
            border-color: #C79A3B;
            box-shadow: 0 0 0 4px rgba(199, 154, 59, 0.12);
        }
    </style>

    {{-- HERO HEADER YANG MEGAH & RESPONSIF --}}
    <div class="relative bg-gradient-to-br from-[#3B2508] via-[#52350c] to-[#241505] rounded-3xl p-6 sm:p-10 shadow-xl border-l-4 sm:border-l-8 border-[#C79A3B] overflow-hidden">
        {{-- Aksen Lingkaran Cahaya Estetik di Background Header --}}
        <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-[#C79A3B]/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute right-20 -top-10 w-40 h-40 bg-amber-200/5 rounded-full blur-2xl pointer-events-none"></div>

        <div class="relative z-10 flex flex-col md:flex-row justify-between md:items-center gap-6">
            <div class="flex items-start sm:items-center gap-4 sm:gap-6">
                <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-white/10 backdrop-blur-xl border border-white/20 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <div class="flex items-center gap-2 mb-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#C79A3B] animate-pulse"></span>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-[#C79A3B]">
                            System Configuration
                        </span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Pengaturan Identitas Perusahaan
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-1 max-w-2xl leading-relaxed">
                        Kelola informasi kontak, multi-nomor WhatsApp, jam operasional, dan optimasi SEO website secara terpusat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- SUCCESS NOTIFICATION --}}
    @if(session('success'))
        <div class="bg-emerald-50/90 backdrop-blur-md border border-emerald-200/80 text-emerald-900 px-6 py-4 rounded-2xl flex items-center gap-3.5 shadow-sm animate-fade-in">
            <div class="w-8 h-8 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0 shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span class="text-sm font-semibold">{{ session('success') }}</span>
        </div>
    @endif

    {{-- FORM UTAMA DENGAN TATA LETAK RESPONSIF --}}
    <section class="admin-glass-card p-6 sm:p-10">
        <form action="{{ route('settings.update') }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            {{-- 1. IDENTITAS UTAMA --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#3B2508]">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" value="{{ $settings['nama_perusahaan'] ?? '' }}" class="w-full px-4 py-3.5 input-lux rounded-2xl text-sm font-medium text-gray-800">
                </div>

                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#3B2508]">Email Perusahaan</label>
                    <input type="email" name="email" value="{{ $settings['email'] ?? '' }}" class="w-full px-4 py-3.5 input-lux rounded-2xl text-sm font-medium text-gray-800">
                </div>
            </div>

            {{-- 2. PENGATURAN NOMOR TELEPON / WHATSAPP (3 KOLOM RESPONSIF) --}}
            <div class="p-6 sm:p-8 bg-gradient-to-br from-amber-50/70 via-amber-50/30 to-white border border-amber-200/60 rounded-3xl space-y-5 shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center shadow-md text-base">
                        📞
                    </div>
                    <div>
                        <h3 class="text-sm font-bold uppercase tracking-wider text-[#3B2508]">Pengaturan Nomor Telepon & WhatsApp</h3>
                        <p class="text-xs text-gray-500">Nomor 1 akan menjadi kontak utama, nomor 2 dan 3 bersifat opsional.</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-600">Nomor 1 (Utama)</label>
                        <input type="text" name="telepon_1" value="{{ $settings['telepon_1'] ?? '' }}" class="w-full px-3.5 py-3 bg-white input-lux rounded-xl text-sm font-medium" placeholder="+62 ...">
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-600">Nomor 2 (Opsional)</label>
                        <input type="text" name="telepon_2" value="{{ $settings['telepon_2'] ?? '' }}" class="w-full px-3.5 py-3 bg-white input-lux rounded-xl text-sm font-medium" placeholder="+62 ...">
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-600">Nomor 3 (Opsional)</label>
                        <input type="text" name="telepon_3" value="{{ $settings['telepon_3'] ?? '' }}" class="w-full px-3.5 py-3 bg-white input-lux rounded-xl text-sm font-medium" placeholder="+62 ...">
                    </div>
                </div>
            </div>

            {{-- 3. JAM OPERASIONAL & TOMBOL WHATSAPP CHAT --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#3B2508]">Jam Operasional Kantor</label>
                    <textarea name="jam_operasional" rows="3" class="w-full px-4 py-3.5 input-lux rounded-2xl text-sm font-medium text-gray-800 leading-relaxed">{{ $settings['jam_operasional'] ?? '' }}</textarea>
                </div>

                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#3B2508]">Nomor WhatsApp Tombol Chat (Tanpa +)</label>
                    <input type="text" name="whatsapp" value="{{ $settings['whatsapp'] ?? '' }}" class="w-full px-4 py-3.5 input-lux rounded-2xl text-sm font-medium text-gray-800" placeholder="Contoh: 6285248512861">
                    <p class="text-[11px] text-gray-400 mt-1">Digunakan untuk tombol melayang (*floating button*) di pojok kanan bawah web.</p>
                </div>
            </div>

            {{-- 4. ALAMAT LENGKAP --}}
            <div class="space-y-2">
                <label class="block text-xs font-bold uppercase tracking-wider text-[#3B2508]">Alamat Kantor Lengkap</label>
                <textarea name="alamat" rows="3" class="w-full px-4 py-3.5 input-lux rounded-2xl text-sm font-medium text-gray-800 leading-relaxed">{{ $settings['alamat'] ?? '' }}</textarea>
            </div>

            {{-- 5. PENGATURAN SEO & META TAGS --}}
            <div class="p-6 sm:p-8 bg-gradient-to-br from-blue-50/70 via-blue-50/25 to-white border border-blue-200/60 rounded-3xl space-y-5 shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-blue-600 text-white flex items-center justify-center shadow-md text-base">
                        🌐
                    </div>
                    <div>
                        <h3 class="text-sm font-bold uppercase tracking-wider text-[#3B2508]">Pengaturan SEO & Meta Tags Website</h3>
                        <p class="text-xs text-gray-500">Mengoptimalkan visibilitas website perusahaan di mesin pencari Google.</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-600">Meta Title (Judul Website di Google/Tab)</label>
                        <input type="text" name="meta_title" value="{{ $settings['meta_title'] ?? '' }}" class="w-full px-4 py-3 bg-white input-lux rounded-xl text-sm font-medium">
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-600">Meta Description (Deskripsi Singkat)</label>
                        <textarea name="meta_description" rows="3" class="w-full px-4 py-3 bg-white input-lux rounded-xl text-sm font-medium leading-relaxed">{{ $settings['meta_description'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            {{-- TOMBOL SIMPAN YANG ELEGAN --}}
            <div class="flex flex-col sm:flex-row justify-end items-center pt-6 border-t border-gray-100 gap-4">
                <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-[#3B2508] to-[#52350c] hover:from-[#241505] hover:to-[#3B2508] text-white px-10 py-4 rounded-2xl font-bold text-sm transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-0.5">
                    <svg class="w-5 h-5 text-[#C79A3B]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Simpan Pengaturan</span>
                </button>
            </div>
        </form>
    </section>

</div>
@endsection