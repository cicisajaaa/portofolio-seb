@extends('admin.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto pb-12 space-y-8">
    
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

    {{-- HERO HEADER (DISAMAKAN PERSIS DENGAN ADMIN LAINNYA) --}}
    <div class="relative bg-gradient-to-r from-[#3B2508] via-[#4d320b] to-[#3B2508] rounded-2xl p-6 sm:p-7 shadow-md border-l-4 border-[#C79A3B] overflow-hidden">
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-5">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center justify-center shrink-0 shadow-inner text-[#C79A3B]">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-[#C79A3B] animate-pulse"></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#C79A3B]">
                            Account Management
                        </span>
                    </div>
                    <h1 class="text-xl sm:text-2xl font-bold tracking-tight">
                        Kelola Akun Admin
                    </h1>
                    <p class="text-gray-300 text-xs sm:text-sm mt-0.5">
                        Perbarui informasi profil akun, alamat email, dan keamanan kata sandi administrator.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- KONTINUASI FORM PROFIL (DIBUNGKUS DALAM COMPANY-CARD) --}}
    <div class="space-y-6">
        
        {{-- UPDATE PROFILE INFORMATION --}}
        <div class="company-card p-7 sm:p-9">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        {{-- UPDATE PASSWORD --}}
        <div class="company-card p-7 sm:p-9">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        {{-- DELETE USER FORM (Opsional jika ingin disertakan) --}}
        <div class="company-card p-7 sm:p-9">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>

</div>
@endsection