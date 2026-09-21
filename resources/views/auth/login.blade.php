<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - CV Sahabat Eksplorasi Banua</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

<div class="min-h-screen relative overflow-hidden">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0">

        <img
            src="{{ asset('assets/images/tambang.jpg') }}"
            alt="Background Tambang"
            class="w-full h-full object-cover"
        >

        <div class="absolute inset-0 bg-gradient-to-r
                    from-[#3B2508]/95
                    via-[#3B2508]/80
                    to-black/50">
        </div>

    </div>


    {{-- CONTENT --}}
    <div class="relative z-10 min-h-screen flex items-center">

        <div class="w-full max-w-7xl mx-auto px-6 lg:px-12">

            <div class="grid lg:grid-cols-2 gap-12 items-center">


                {{-- LEFT SIDE --}}
                <div
                    class="hidden lg:block text-white"
                    data-aos="fade-right"
                >

                    <div class="inline-flex items-center gap-3
                                bg-white/10
                                backdrop-blur-sm
                                border border-white/20
                                px-5 py-2
                                rounded-full">

                        <span class="w-2 h-2 rounded-full bg-[#C79A3B]"></span>

                        <span class="text-sm tracking-[0.25em] uppercase">
                            Sahabat Eksplorasi Banua
                        </span>

                    </div>


                    <h1 class="mt-7 text-5xl xl:text-6xl font-bold leading-tight">

                        Sistem Informasi

                        <span class="text-[#C79A3B]">
                            SEB
                        </span>

                    </h1>


                    <p class="mt-6 max-w-xl text-lg text-gray-200 leading-relaxed">

                        Kelola aktivitas, proyek, keuangan,
                        serta administrasi CV Sahabat Eksplorasi Banua
                        melalui sistem informasi yang terintegrasi.

                    </p>


                    {{-- LINE --}}
                    <div class="mt-8 flex items-center gap-4">

                        <div class="h-1 w-16 bg-[#C79A3B] rounded-full"></div>

                        <span class="text-sm text-gray-300">
                            Mining & Environmental Consultant
                        </span>

                    </div>

                </div>



                {{-- LOGIN CARD --}}
                <div
                    class="w-full max-w-md lg:ml-auto"
                    data-aos="fade-left"
                >

                    {{-- MOBILE BRAND --}}
                    <div class="lg:hidden text-center mb-6">

                        <div class="inline-flex items-center gap-3
                                    bg-white/10
                                    backdrop-blur-sm
                                    border border-white/20
                                    px-5 py-2
                                    rounded-full">

                            <span class="w-2 h-2 rounded-full bg-[#C79A3B]"></span>

                            <span class="text-sm text-white tracking-[0.2em] uppercase">
                                Sahabat Eksplorasi Banua
                            </span>

                        </div>

                    </div>


                    {{-- CARD --}}
                    <div class="bg-white/95
                                backdrop-blur-xl
                                rounded-3xl
                                shadow-2xl
                                p-8 md:p-10">


                        {{-- HEADER --}}
                        <div class="mb-7">

                            <p class="text-xs uppercase
                                      tracking-[0.3em]
                                      text-[#C79A3B]
                                      font-semibold">

                                Login

                            </p>


                            <h2 class="mt-3
                                       text-3xl
                                       font-bold
                                       text-[#3B2508]">

                                Selamat Datang

                            </h2>


                            <p class="mt-2 text-sm text-gray-500">

                                Masuk untuk mengakses sistem SEB.

                            </p>

                        </div>



                        {{-- SESSION STATUS --}}
                        <x-auth-session-status
                            class="mb-5"
                            :status="session('status')"
                        />



                        {{-- FORM --}}
                        <form method="POST" action="{{ route('login') }}">

                            @csrf


                            {{-- EMAIL --}}
                            <div>

                                <x-input-label
                                    for="email"
                                    :value="__('Email')"
                                    class="text-[#3B2508] font-semibold"
                                />


                                <div class="relative mt-2">

                                    <div class="absolute inset-y-0 left-0
                                                pl-4
                                                flex items-center
                                                pointer-events-none">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-gray-400"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M21.75 6.75v10.5A2.25 2.25 0 0119.5 19.5h-15a2.25 2.25 0 01-2.25-2.25V6.75A2.25 2.25 0 014.5 4.5h15a2.25 2.25 0 012.25 2.25z"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M3 6l8.03 5.62a1.7 1.7 0 001.94 0L21 6"
                                            />
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
                                        placeholder="Masukkan email"

                                        class="w-full
                                               pl-12
                                               pr-4
                                               py-3.5
                                               rounded-xl
                                               border-gray-200
                                               bg-gray-50
                                               focus:bg-white
                                               focus:border-[#C79A3B]
                                               focus:ring-[#C79A3B]/20
                                               text-gray-700
                                               transition"
                                    >

                                </div>


                                <x-input-error
                                    :messages="$errors->get('email')"
                                    class="mt-2"
                                />

                            </div>



                            {{-- PASSWORD --}}
                            <div class="mt-5">

                                <x-input-label
                                    for="password"
                                    :value="__('Password')"
                                    class="text-[#3B2508] font-semibold"
                                />


                                <div class="relative mt-2">

                                    <div class="absolute inset-y-0 left-0
                                                pl-4
                                                flex items-center
                                                pointer-events-none">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-gray-400"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 00-9 0v3.75"
                                            />

                                            <rect
                                                width="15"
                                                height="11"
                                                x="4.5"
                                                y="10.5"
                                                rx="2.25"
                                            />
                                        </svg>

                                    </div>


                                    <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Masukkan password"

                                        class="w-full
                                               pl-12
                                               pr-12
                                               py-3.5
                                               rounded-xl
                                               border-gray-200
                                               bg-gray-50
                                               focus:bg-white
                                               focus:border-[#C79A3B]
                                               focus:ring-[#C79A3B]/20
                                               text-gray-700
                                               transition"
                                    >


                                    {{-- EYE --}}
                                    <button
                                        type="button"
                                        onclick="togglePassword()"
                                        class="absolute inset-y-0 right-0
                                               pr-4
                                               flex items-center
                                               text-gray-400
                                               hover:text-[#C79A3B]"
                                    >

                                        <svg
                                            id="eyeOpen"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                            />

                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="3"
                                            />
                                        </svg>


                                        <svg
                                            id="eyeClosed"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 hidden"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M3 3l18 18M10.58 10.58a2 2 0 102.83 2.83"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M9.88 5.09A10.45 10.45 0 0112 4.5c4.64 0 8.58 3.01 9.96 7.18a1 1 0 010 .64 10.7 10.7 0 01-3.04 4.31M6.23 6.23A10.7 10.7 0 002.04 11.68a1 1 0 000 .64C3.42 16.49 7.36 19.5 12 19.5c1.64 0 3.19-.37 4.58-1.04"
                                            />
                                        </svg>

                                    </button>

                                </div>


                                <x-input-error
                                    :messages="$errors->get('password')"
                                    class="mt-2"
                                />

                            </div>



                            {{-- REMEMBER --}}
                            <div class="mt-5 flex items-center justify-between">

                                <label
                                    for="remember_me"
                                    class="inline-flex items-center cursor-pointer"
                                >

                                    <input
                                        id="remember_me"
                                        type="checkbox"
                                        name="remember"

                                        class="rounded
                                               border-gray-300
                                               text-[#C79A3B]
                                               focus:ring-[#C79A3B]"
                                    >

                                    <span class="ms-2 text-sm text-gray-600">
                                        {{ __('Remember me') }}
                                    </span>

                                </label>


                                @if (Route::has('password.request'))

                                    <a
                                        href="{{ route('password.request') }}"
                                        class="text-sm
                                               font-semibold
                                               text-[#C79A3B]
                                               hover:text-[#3B2508]
                                               transition"
                                    >
                                        Lupa Password?
                                    </a>

                                @endif

                            </div>



                            {{-- BUTTON --}}
                            <button
                                type="submit"

                                class="mt-6
                                       w-full
                                       flex items-center
                                       justify-center
                                       gap-2
                                       bg-[#3B2508]
                                       hover:bg-[#241505]
                                       text-white
                                       py-3.5
                                       rounded-xl
                                       font-semibold
                                       shadow-lg
                                       hover:shadow-xl
                                       transition"
                            >

                                Masuk

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                    />
                                </svg>

                            </button>

                        </form>

                    </div>


                    {{-- FOOTER --}}
                    <div class="text-center mt-5">

                        <p class="text-xs text-white/70">
                            © {{ date('Y') }} CV Sahabat Eksplorasi Banua
                        </p>

                        <p class="text-xs text-white/50 mt-1">
                            Sistem Informasi Manajemen
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- PASSWORD TOGGLE --}}
<script>

function togglePassword()
{
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