<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - CV Sahabat Eksplorasi Banua</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans text-gray-900 bg-gray-900">

<div class="min-h-screen relative overflow-hidden flex items-center justify-center">

    {{-- BACKGROUND WITH ENHANCED OVERLAY --}}
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('assets/images/tambang.jpg') }}"
            alt="Background Tambang"
            class="w-full h-full object-cover scale-105 transform duration-1000"
        >
        {{-- Deep multi-layer gradient for professional compro look --}}
        <div class="absolute inset-0 bg-gradient-to-tr from-[#1a1004]/95 via-[#3B2508]/85 to-black/60"></div>
        <div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
    </div>

    {{-- MAIN CONTAINER --}}
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-12 py-12">
        <div class="grid lg:grid-cols-12 gap-12 items-center">

            {{-- LEFT SIDE: COMPANY BRANDING (7 Columns) --}}
            <div class="hidden lg:block lg:col-span-7 text-white space-y-6" data-aos="fade-right">
                <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-md border border-white/15 px-4 py-2 rounded-full shadow-lg">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#C79A3B] animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-[0.25em] uppercase text-gray-200">
                        CV Sahabat Eksplorasi Banua
                    </span>
                </div>

                <h1 class="text-5xl xl:text-6xl font-extrabold tracking-tight leading-none">
                    Sistem Informasi <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#C79A3B] to-amber-200">
                        Terintegrasi SEB
                    </span>
                </h1>

                <p class="max-w-xl text-lg text-gray-300 leading-relaxed font-light">
                    Solusi terpusat untuk mengelola aktivitas operasional, proyek, keuangan, serta administrasi perusahaan secara profesional dan transparan.
                </p>

                <div class="pt-4 flex items-center gap-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-[#C79A3B]">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm">Mining & Environmental</h4>
                            <p class="text-xs text-gray-400">Professional Consultant</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT SIDE: LOGIN CARD (5 Columns) --}}
            <div class="w-full max-w-md lg:col-span-5 lg:ml-auto" data-aos="fade-left">
                
                {{-- MOBILE BRAND HEADER --}}
                <div class="lg:hidden text-center mb-6">
                    <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-1.5 rounded-full text-xs font-medium text-white tracking-widest uppercase">
                        <span class="w-2 h-2 rounded-full bg-[#C79A3B]"></span>
                        Sahabat Eksplorasi Banua
                    </span>
                </div>

                {{-- GLASSMORPHISM FORM CARD --}}
                <div class="bg-white/95 backdrop-blur-2xl rounded-3xl shadow-2xl border border-white/40 p-8 sm:p-10">
                    
                    <div class="mb-8">
                        <span class="inline-block text-[11px] font-bold uppercase tracking-[0.25em] text-[#C79A3B] bg-amber-50 px-3 py-1 rounded-md mb-3 border border-amber-100">
                            Secure Portal
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#3B2508] tracking-tight">
                            Selamat Datang
                        </h2>
                        <p class="text-sm text-gray-500 mt-1">
                            Silakan masuk menggunakan akun resmi SEB.
                        </p>
                    </div>

                    <x-auth-session-status class="mb-5" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        {{-- EMAIL FIELD --}}
                        <div>
                            <x-input-label for="email" :value="__('Email Perusahaan')" class="text-[#3B2508] font-semibold text-xs uppercase tracking-wider mb-1.5" />
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus
                                    autocomplete="username"
                                    placeholder="nama@sebconsulting.co.id"
                                    class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 bg-gray-50/80 focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 text-sm text-gray-800 transition-all shadow-sm"
                                >
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                        </div>

                        {{-- PASSWORD FIELD --}}
                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <x-input-label for="password" :value="__('Password')" class="text-[#3B2508] font-semibold text-xs uppercase tracking-wider" />
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="••••••••••••"
                                    class="w-full pl-11 pr-12 py-3 rounded-xl border border-gray-200 bg-gray-50/80 focus:bg-white focus:border-[#C79A3B] focus:ring-4 focus:ring-[#C79A3B]/10 text-sm text-gray-800 transition-all shadow-sm"
                                >
                                <button
                                    type="button"
                                    onclick="togglePassword()"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#C79A3B] transition-colors"
                                >
                                    <svg id="eyeOpen" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg id="eyeClosed" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                        </div>

                        {{-- REMEMBER & FORGOT --}}
                        <div class="flex items-center justify-between text-sm pt-1">
                            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                                <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-[#C79A3B] focus:ring-[#C79A3B]/20 w-4 h-4">
                                <span class="ms-2 text-gray-600 text-xs font-medium">{{ __('Ingat Saya') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs font-semibold text-[#C79A3B] hover:text-[#3B2508] transition-colors">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>

                        {{-- SUBMIT BUTTON --}}
                        <button
                            type="submit"
                            class="w-full mt-2 flex items-center justify-center gap-2 bg-[#3B2508] hover:bg-[#241505] text-white py-3.5 px-6 rounded-xl font-medium text-sm shadow-lg shadow-[#3B2508]/20 hover:shadow-xl transition-all duration-200 transform active:scale-[0.99]"
                        >
                            <span>Masuk ke Sistem</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </form>
                </div>

                {{-- FOOTER INFO --}}
                <div class="text-center mt-6 space-y-1">
                    <p class="text-xs text-white/80 font-medium">
                        &copy; {{ date('Y') }} CV Sahabat Eksplorasi Banua. All rights reserved.
                    </p>
                    <p class="text-[11px] text-white/50 tracking-wider uppercase">
                        Enterprise Resource Planning & Management System
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- PASSWORD TOGGLE SCRIPT --}}
<script>
function togglePassword() {
    const password = document.getElementById('password');
    const eyeOpen = document.getElementById('eyeOpen');
    const eyeClosed = document.getElementById('eyeClosed');

    if (password.type === 'password') {
        password.type = 'text';
        eyeOpen.classList.add('hidden');
        eyeClosed.classList.remove('hidden');
    } else {
        password.type = 'password';
        eyeOpen.classList.remove('hidden');
        eyeClosed.classList.add('hidden');
    }
}
</script>

</body>
</html>