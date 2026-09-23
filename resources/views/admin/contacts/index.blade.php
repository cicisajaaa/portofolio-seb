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

    {{-- HERO HEADER (DISAMAKAN PERSIS DENGAN KELOLA GALERI) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-5">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
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
                        Pesan Konsultasi
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                        Daftar pesan konsultasi dari pengunjung website CV Sahabat Eksplorasi Banua.
                    </p>
                </div>
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

    {{-- LIST PESAN --}}
    <section>
        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">

            @forelse($contacts as $contact)

                <div class="company-card p-6 relative overflow-hidden group flex flex-col justify-between">
                    {{-- Aksen Garis Emas di Samping Kartu saat Hover --}}
                    <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>

                    <div>
                        {{-- HEADER CARD --}}
                        <div class="flex justify-between items-start gap-3 mb-5">
                            <div>
                                <h2 class="text-lg font-bold text-[#3B2508] tracking-tight">
                                    {{ $contact->nama }}
                                </h2>
                                <p class="text-xs text-gray-500 mt-0.5 break-all">
                                    {{ $contact->email }}
                                </p>
                            </div>

                            <div class="w-10 h-10 rounded-xl bg-amber-50 text-[#C79A3B] flex items-center justify-center shrink-0 border border-amber-100">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                        </div>

                        {{-- DETAIL KONTEN --}}
                        <div class="space-y-4 pt-3 border-t border-gray-100">
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">
                                    WhatsApp
                                </p>
                                <p class="mt-0.5 font-semibold text-gray-800 text-sm">
                                    {{ $contact->telepon ?? '-' }}
                                </p>
                            </div>

                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-400">
                                    Pesan Konsultasi
                                </p>
                                <p class="mt-1 text-sm text-gray-600 leading-relaxed bg-gray-50/70 p-3.5 rounded-xl border border-gray-100">
                                    {{ $contact->pesan }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- ACTION BUTTONS --}}
                    <div class="mt-6 pt-4 border-t border-gray-100/80 flex justify-between items-center">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/','',$contact->telepon) }}"
                           target="_blank"
                           class="inline-flex items-center gap-1.5 bg-emerald-50 hover:bg-emerald-100 text-emerald-700 px-4 py-2 rounded-xl font-semibold text-xs transition-all">
                            <span>💬 Balas WA</span>
                        </a>

                        <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus pesan konsultasi ini?')"
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
                            📭
                        </div>
                        <h3 class="text-xl font-bold text-[#3B2508]">
                            Belum Ada Pesan Masuk
                        </h3>
                        <p class="mt-1.5 text-sm text-gray-500 max-w-sm mx-auto">
                            Pesan konsultasi yang dikirimkan oleh pelanggan melalui website akan muncul di sini secara real-time.
                        </p>
                    </div>
                </div>

            @endforelse

        </div>
    </section>

</div>
@endsection