<x-guest-layout>

    <div class="min-h-screen relative flex items-center justify-center px-4 py-10 overflow-hidden">

        {{-- BACKGROUND --}}
        <div class="absolute inset-0">
            <img
                src="{{ asset('assets/images/tambang.jpg') }}"
                alt="Background Tambang"
                class="w-full h-full object-cover scale-105"
            >

            {{-- Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-br from-black/85 via-[#3B2508]/80 to-black/70"></div>
        </div>


        {{-- DECORATION --}}
        <div class="absolute top-10 left-10 w-72 h-72 bg-[#C79A3B]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-[#C79A3B]/10 rounded-full blur-3xl"></div>


        {{-- LOGIN WRAPPER --}}
        <div class="relative z-10 w-full max-w-md">

            {{-- BRAND --}}
            <div class="text-center mb-8">

                <div class="inline-flex items-center gap-3
                            bg-white/10
                            backdrop-blur-md
                            border border-white/20
                            px-5 py-2
                            rounded-full">

                    <span class="w-2 h-2 rounded-full bg-[#C79A3B]"></span>

                    <p class="text-xs md:text-sm text-white tracking-[0.2em] uppercase">
                        Sahabat Eksplorasi Banua
                    </p>

                </div>


                <h1 class="mt-6 text-3xl md:text-4xl font-bold text-white">
                    Selamat Datang
                </h1>

                <p class="mt-2 text-sm text-gray-300">
                    Silakan masuk untuk mengakses sistem SEB
                </p>

            </div>


            {{-- CARD --}}
            <div class="bg-white/95
                        backdrop-blur-xl
                        rounded-3xl
                        shadow-2xl
                        border border-white/20
                        p-7 md:p-9">

                {{-- HEADER CARD --}}
                <div class="mb-7">

                    <p class="text-xs uppercase tracking-[0.25em] font-semibold text-[#C79A3B]">
                        Login
                    </p>

                    <h2 class="mt-2 text-2xl font-bold text-[#3B2508]">
                        Masuk ke Akun
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Masukkan email dan password akun Anda.
                    </p>

                </div>


                {{-- SESSION STATUS --}}
                <x-auth-session-status
                    class="mb-5 text-sm font-medium text-green-600"
                    :status="session('status')"
                />


                {{-- FORM --}}
                <form method="POST" action="{{ route('login') }}" class="space-y-5">

                    @csrf


                    {{-- EMAIL --}}
                    <div>

                        <x-input-label
                            for="email"
                            :value="__('Email')"
                            class="text-sm font-semibold text-[#3B2508]"
                        />

                        <div class="relative mt-2">

                            {{-- ICON EMAIL --}}
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-gray-400"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21.75 6.75v10.5A2.25 2.25 0 0119.5 19.5h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0l-8.69 5.52a2 2 0 01-2.12 0L2.25 6.75"
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
                                       pl-12 pr-4 py-3.5
                                       rounded-xl
                                       border border-gray-200
                                       bg-gray-50
                                       text-gray-700
                                       placeholder-gray-400
                                       focus:bg-white
                                       focus:border-[#C79A3B]
                                       focus:ring-2
                                       focus:ring-[#C79A3B]/20
                                       outline-none
                                       transition"
                            >

                        </div>

                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2"
                        />

                    </div>



                    {{-- PASSWORD --}}
                    <div>

                        <x-input-label
                            for="password"
                            :value="__('Password')"
                            class="text-sm font-semibold text-[#3B2508]"
                        />


                        <div class="relative mt-2">

                            {{-- LOCK ICON --}}
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-gray-400"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 00-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0119.5 12.75v6A2.25 2.25 0 0117.25 21H6.75A2.25 2.25 0 014.5 18.75v-6a2.25 2.25 0 012.25-2.25z"
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
                                       pl-12 pr-12 py-3.5
                                       rounded-xl
                                       border border-gray-200
                                       bg-gray-50
                                       text-gray-700
                                       placeholder-gray-400
                                       focus:bg-white
                                       focus:border-[#C79A3B]
                                       focus:ring-2
                                       focus:ring-[#C79A3B]/20
                                       outline-none
                                       transition"
                            >


                            {{-- SHOW/HIDE PASSWORD --}}
                            <button
                                type="button"
                                onclick="togglePassword()"
                                class="absolute inset-y-0 right-0 pr-4
                                       flex items-center
                                       text-gray-400
                                       hover:text-[#C79A3B]
                                       transition"
                            >

                                {{-- EYE OPEN --}}
                                <svg
                                    id="eyeOpen"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                                </svg>


                                {{-- EYE CLOSED --}}
                                <svg
                                    id="eyeClosed"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 hidden"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 002.036 11.683a1.012 1.012 0 000 .639C3.423 16.49 7.36 19.5 12 19.5c1.67 0 3.256-.39 4.657-1.085M6.228 6.228A10.451 10.451 0 0112 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639a10.51 10.51 0 01-1.246 2.367M6.228 6.228L3 3m3.228 3.228l3.65 3.65m6.244 6.244L21 21m-4.878-4.878l-3.65-3.65"
                                    />
                                </svg>

                            </button>

                        </div>


                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2"
                        />

                    </div>



                    {{-- REMEMBER + FORGOT PASSWORD --}}
                    <div class="flex items-center justify-between gap-4">

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
                                       shadow-sm
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



                    {{-- LOGIN BUTTON --}}
                    <button
                        type="submit"
                        class="w-full
                               bg-[#3B2508]
                               hover:bg-[#2b1905]
                               text-white
                               py-3.5
                               px-6
                               rounded-xl
                               font-semibold
                               shadow-lg
                               hover:shadow-xl
                               transition
                               duration-300
                               flex items-center
                               justify-center
                               gap-2"
                    >

                        Masuk

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                            />
                        </svg>

                    </button>

                </form>

            </div>


            {{-- FOOTER --}}
            <div class="text-center mt-6">

                <p class="text-xs text-gray-300">
                    © {{ date('Y') }} CV Sahabat Eksplorasi Banua
                </p>

                <p class="mt-1 text-xs text-gray-400">
                    Sistem Informasi Manajemen
                </p>

            </div>

        </div>

    </div>


    {{-- PASSWORD TOGGLE --}}
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

</x-guest-layout>