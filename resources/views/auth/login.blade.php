<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - CV Sahabat Eksplorasi Banua</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        body {
            background-color: #1a1004;
            color: #1f2937;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .login-wrapper {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .bg-overlay {
            position: absolute;
            inset: 0;
            z-index: 0;
        }
        .bg-overlay img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.03);
            transition: transform 10s ease;
        }
        .bg-overlay img:hover {
            transform: scale(1.07);
        }
        .bg-overlay .gradient {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(26, 16, 4, 0.96) 0%, rgba(59, 37, 8, 0.88) 50%, rgba(15, 10, 2, 0.90) 100%);
        }
        .container-grid {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            align-items: center;
        }
        @media(min-width: 1024px) {
            .container-grid {
                grid-template-columns: 1.2fr 1fr;
            }
        }
        .brand-side {
            color: white;
            display: none;
            animation: fadeInLefty 1s ease-out forwards;
        }
        @media(min-width: 1024px) {
            .brand-side {
                display: block;
            }
        }
        @keyframes fadeInLefty {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 8px 18px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            font-size: 12px;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }
        .badge-dot {
            width: 8px;
            height: 8px;
            background-color: #C79A3B;
            border-radius: 50%;
            box-shadow: 0 0 10px #C79A3B;
            animation: pulseGlow 2s infinite;
        }
        @keyframes pulseGlow {
            0% { transform: scale(0.95); opacity: 0.8; }
            50% { transform: scale(1.25); opacity: 1; }
            100% { transform: scale(0.95); opacity: 0.8; }
        }
        .brand-side h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.2rem;
            letter-spacing: -0.02em;
        }
        .brand-side h1 span {
            color: #C79A3B;
            text-shadow: 0 2px 15px rgba(199, 154, 59, 0.3);
        }
        .brand-side p {
            font-size: 1.1rem;
            color: #d1d5db;
            line-height: 1.7;
            max-width: 500px;
            font-weight: 400;
        }
        
        .login-card-container {
            animation: fadeInRighty 1s ease-out forwards;
        }
        @keyframes fadeInRighty {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .login-card {
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(255, 255, 255, 0.4);
            padding: 2.75rem;
            width: 100%;
            max-width: 440px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }
        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #3B2508, #C79A3B, #3B2508);
        }
        .card-header {
            margin-bottom: 2rem;
        }
        .card-header .tag {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.25em;
            color: #C79A3B;
            background: #fef8f0;
            padding: 5px 12px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 8px;
            border: 1px solid #fdecd2;
        }
        .card-header h2 {
            font-size: 1.85rem;
            font-weight: 700;
            color: #3B2508;
            letter-spacing: -0.01em;
        }
        .card-header p {
            font-size: 0.875rem;
            color: #6b7280;
            margin-top: 4px;
        }
        .form-group {
            margin-bottom: 1.25rem;
        }
        .form-label {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #3B2508;
            margin-bottom: 0.5rem;
        }
        .input-box {
            position: relative;
            display: flex;
            align-items: center;
        }
        .input-box > svg.left-icon {
            position: absolute;
            left: 14px;
            width: 20px;
            height: 20px;
            color: #9ca3af;
            transition: color 0.3s ease;
            pointer-events: none;
            z-index: 2;
        }
        .input-box input {
            width: 100%;
            padding: 13px 48px 13px 46px;
            background-color: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 14px;
            font-size: 0.95rem;
            color: #1f2937;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .input-box input::placeholder {
            color: #adb5bd;
        }
        .input-box input:hover {
            border-color: #cbd5e1;
            background-color: #fff;
        }
        .input-box input:focus {
            outline: none;
            background-color: #fff;
            border-color: #C79A3B;
            box-shadow: 0 0 0 4px rgba(199, 154, 59, 0.15);
        }
        .input-box input:focus ~ svg.left-icon {
            color: #C79A3B;
        }
        
        /* Tombol Toggle Mata di dalam Input */
        .toggle-password {
            position: absolute;
            right: 12px;
            background: none;
            border: none;
            cursor: pointer;
            color: #9ca3af;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: color 0.2s, background-color 0.2s;
            z-index: 3;
        }
        .toggle-password:hover {
            color: #C79A3B;
            background-color: rgba(199, 154, 59, 0.08);
        }

        .form-footer-flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.85rem;
            margin-top: 1.2rem;
            margin-bottom: 1.75rem;
        }
        .remember-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: #4b5563;
            font-weight: 500;
        }
        .forgot-link {
            color: #C79A3B;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
        }
        .forgot-link:hover {
            color: #3B2508;
            text-decoration: underline;
        }
        
        .btn-submit {
            width: 100%;
            background-color: #3B2508;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 14px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 10px 25px -5px rgba(59, 37, 8, 0.4);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .btn-submit::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.2s;
        }
        .btn-submit:hover {
            background-color: #241505;
            transform: translateY(-2px);
            box-shadow: 0 15px 30px -5px rgba(59, 37, 8, 0.5);
        }
        .btn-submit:active {
            transform: translateY(0);
        }
        .btn-submit:hover::after {
            opacity: 1;
        }
        .btn-submit svg {
            transition: transform 0.3s ease;
        }
        .btn-submit:hover svg {
            transform: translateX(4px);
        }
        
        .footer-text {
            text-align: center;
            margin-top: 1.75rem;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.75rem;
        }
        .footer-text p + p {
            margin-top: 4px;
            color: rgba(255, 255, 255, 0.5);
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 0.65rem;
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    {{-- BACKGROUND --}}
    <div class="bg-overlay">
        <img src="{{ asset('assets/images/tambang.jpg') }}" alt="Background Tambang">
        <div class="gradient"></div>
    </div>

    {{-- CONTENT --}}
    <div class="container-grid">

        {{-- LEFT SIDE (COMPRO BRANDING) --}}
        <div class="brand-side">
            <div class="badge">
                <span class="badge-dot"></span>
                <span>Sahabat Eksplorasi Banua</span>
            </div>
            <h1>Sistem Informasi <br><span>SEB Terintegrasi</span></h1>
            <p>Kelola aktivitas operasional, manajemen proyek, keuangan, serta administrasi perusahaan secara profesional dan terpusat dalam satu platform.</p>
        </div>

        {{-- LOGIN CARD --}}
        <div class="login-card-container">
            <div class="login-card">
                
                <div class="card-header">
                    <span class="tag">Secure Portal</span>
                    <h2>Selamat Datang</h2>
                    <p>Silakan masuk untuk mengakses sistem SEB.</p>
                </div>

                <x-auth-session-status class="mb-5" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- EMAIL --}}
                    <div class="form-group">
                        <label class="form-label" for="email">Email Perusahaan</label>
                        <div class="input-box">
                            <svg class="left-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="nama@sebconsulting.co.id"
                            >
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- PASSWORD --}}
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-box">
                            <svg class="left-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="••••••••••••"
                                class="password-input"
                            >
                            <button type="button" onclick="togglePassword()" class="toggle-password">
                                <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" style="width:20px;height:20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" style="width:20px;height:20px;" class="hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 3l18 18M9.88 9.88a3 3 0 104.24 4.24" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- REMEMBER & FORGOT --}}
                    <div class="form-footer-flex">
                        <label class="remember-label">
                            <input id="remember_me" type="checkbox" name="remember" style="width: 16px; height: 16px; accent-color: #C79A3B; cursor: pointer;">
                            <span style="font-size: 13px;">Ingat Saya</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-link" style="font-size: 13px;">
                                Lupa Password?
                            </a>
                        @endif
                    </div>

                    {{-- SUBMIT --}}
                    <button type="submit" class="btn-submit">
                        <span>Masuk ke Sistem</span>
                        <svg xmlns="http://www.w3.org/2000/svg" style="width:18px;height:18px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>

                </form>

            </div>

            {{-- FOOTER --}}
            <div class="footer-text">
                <p>&copy; {{ date('Y') }} CV Sahabat Eksplorasi Banua. All rights reserved.</p>
                <p>Enterprise Resource Planning & Management System</p>
            </div>

        </div>

    </div>

</div>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const eyeOpen = document.getElementById('eyeOpen');
    const eyeClosed = document.getElementById('eyeClosed');

    if (password.type === 'password') {
        password.type = 'text';
        eyeOpen.style.display = 'none';
        eyeClosed.style.display = 'block';
    } else {
        password.type = 'password';
        eyeOpen.style.display = 'block';
        eyeClosed.style.display = 'none';
    }
}
</script>

</body>
</html>