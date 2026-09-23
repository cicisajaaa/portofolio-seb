@extends('admin.layouts.app')

@section('content')
<div class="max-w-5xl mx-auto pb-12">
    
    {{-- CUSTOM CSS KHUSUS INTERAKTIF & PASSWORD BOX --}}
    <style>
        .custom-password-box {
            position: relative;
            display: flex;
            align-items: center;
        }
        .custom-password-box input {
            width: 100%;
            padding: 14px 56px 14px 16px;
            background-color: #f9fafb;
            border: 1.5px solid #e5e7eb;
            border-radius: 14px;
            font-size: 0.95rem;
            color: #1f2937;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .custom-password-box input:hover {
            border-color: #cbd5e1;
            background-color: #fff;
        }
        .custom-password-box input:focus {
            outline: none;
            background-color: #fff;
            border-color: #C79A3B;
            box-shadow: 0 0 0 4px rgba(199, 154, 59, 0.15);
        }
        .custom-toggle-btn {
            position: absolute;
            right: 12px;
            background: #f3f4f6;
            border: none;
            cursor: pointer;
            color: #6b7280;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            transition: all 0.2s ease;
            z-index: 10;
        }
        .custom-toggle-btn:hover {
            background-color: #fef3c7;
            color: #C79A3B;
            transform: scale(1.05);
        }
        .company-card {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(229, 231, 235, 0.8);
            transition: all 0.3s ease;
        }
        .company-card:hover {
            box-shadow: 0 20px 40px -10px rgba(59, 37, 8, 0.08);
        }
    </style>

    {{-- HERO HEADER (PROFESIONAL, MINIMALIS, RATA KIRI) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 mb-8 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div class="text-left text-white">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-[#C79A3B] animate-pulse"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#C79A3B]">
                            Pengaturan Akun Admin
                        </span>
                    </div>
                    <h1 class="text-xl sm:text-2xl font-bold tracking-tight">
                        Kelola Profil & Keamanan
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                        Perbarui profil, alamat email, dan keamanan sandi akun Anda secara berkala.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- KONTEN UTAMA DENGAN GRID RESPONSIF MOBILE-FRIENDLY --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        {{-- KOLOM KIRI (7 Kolom): PROFIL & HAPUS AKUN --}}
        <div class="lg:col-span-7 space-y-8">
            
            {{-- KARTU 1: UPDATE PROFILE INFORMATION --}}
            <div class="company-card p-7 sm:p-8 relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-[#C79A3B] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                
                <div class="flex items-start gap-4 mb-8">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-[#C79A3B] shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-[#3B2508]">Informasi Pribadi</h2>
                        <p class="mt-1 text-sm text-gray-500">Perbarui nama tampilan dan alamat email yang terhubung dengan akun ini.</p>
                    </div>
                </div>

                <div class="pl-0 sm:pl-16">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- KARTU 2: DELETE USER --}}
            <div class="company-card p-7 sm:p-8 relative overflow-hidden group border-red-100">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-red-500 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-500 shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-red-600">Zona Berbahaya</h2>
                        <p class="mt-1 text-sm text-gray-500">Aksi ini bersifat permanen dan tidak dapat dibatalkan.</p>
                    </div>
                </div>

                <div class="pl-0 sm:pl-16">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN (5 Kolom): UBAH PASSWORD DENGAN TOGGLE AMAN --}}
        <div class="lg:col-span-5">
            
            <div class="company-card p-7 sm:p-8 sticky top-28">
                
                <div class="flex items-start gap-4 mb-8">
                    <div class="w-12 h-12 rounded-xl bg-gray-50 flex items-center justify-center text-[#3B2508] shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-[#3B2508]">Keamanan Akun</h2>
                        <p class="mt-1 text-sm text-gray-500 leading-relaxed">Pastikan Anda menggunakan password yang rumit untuk melindungi data perusahaan.</p>
                    </div>
                </div>

                <form method="post" action="{{ route('password.update') }}" class="space-y-5">
                    @csrf
                    @method('put')

                    {{-- Password Saat Ini --}}
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-1.5" for="update_password_current_password">Password Saat Ini</label>
                        <div class="custom-password-box">
                            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" placeholder="••••••••••••">
                            <button type="button" onclick="togglePass('update_password_current_password', 'iconCurrentOpen', 'iconCurrentClosed')" class="custom-toggle-btn">
                                <svg id="iconCurrentOpen" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <svg id="iconCurrentClosed" class="w-4 h-4 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M9.88 9.88a3 3 0 104.24 4.24"/></svg>
                            </button>
                        </div>
                        @error('current_password', 'updatePassword')
                            <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password Baru --}}
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-1.5" for="update_password_password">Password Baru</label>
                        <div class="custom-password-box">
                            <input id="update_password_password" name="password" type="password" autocomplete="new-password" placeholder="••••••••••••">
                            <button type="button" onclick="togglePass('update_password_password', 'iconNewOpen', 'iconNewClosed')" class="custom-toggle-btn">
                                <svg id="iconNewOpen" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <svg id="iconNewClosed" class="w-4 h-4 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M9.88 9.88a3 3 0 104.24 4.24"/></svg>
                            </button>
                        </div>
                        @error('password', 'updatePassword')
                            <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Konfirmasi Password Baru --}}
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#3B2508] mb-1.5" for="update_password_password_confirmation">Konfirmasi Password</label>
                        <div class="custom-password-box">
                            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" placeholder="••••••••••••">
                            <button type="button" onclick="togglePass('update_password_password_confirmation', 'iconConfirmOpen', 'iconConfirmClosed')" class="custom-toggle-btn">
                                <svg id="iconConfirmOpen" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <svg id="iconConfirmClosed" class="w-4 h-4 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M9.88 9.88a3 3 0 104.24 4.24"/></svg>
                            </button>
                        </div>
                        @error('password_confirmation', 'updatePassword')
                            <p class="text-red-500 text-xs mt-1.5 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                        @if (session('status') === 'password-updated')
                            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="flex items-center gap-1.5 text-sm text-green-600 bg-green-50 px-3 py-1.5 rounded-lg border border-green-100">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <span class="font-medium">Berhasil disimpan.</span>
                            </div>
                        @else
                            <div></div>
                        @endif

                        <button type="submit" class="bg-[#3B2508] hover:bg-[#241505] text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 active:translate-y-0 flex items-center gap-2">
                            <span>Perbarui Sandi</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

{{-- SCRIPT TOGGLE PASSWORD --}}
<script>
function togglePass(inputId, openId, closedId) {
    const input = document.getElementById(inputId);
    const openIcon = document.getElementById(openId);
    const closedIcon = document.getElementById(closedId);

    if (input.type === 'password') {
        input.type = 'text';
        openIcon.style.display = 'none';
        closedIcon.style.display = 'block';
    } else {
        input.type = 'password';
        openIcon.style.display = 'block';
        closedIcon.style.display = 'none';
    }
}
</script>
@endsection