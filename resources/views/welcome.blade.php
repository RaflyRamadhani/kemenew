<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemendagri - Selamat Datang</title>
    <link rel="icon" href="{{ asset('img/logokemendagri-fix.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: white;
            margin: 0;
        }

        .fade-in {
            animation: fadeIn 1.2s ease-out forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            height: 300px;
        }

        .slider-track {
            display: flex;
            animation: slide 20s infinite linear;
            height: 100%;
        }

        .slider-track img {
            width: 100%;
            object-fit: cover;
            flex-shrink: 0;
            height: 300px;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            20% { transform: translateX(-100%); }
            40% { transform: translateX(-200%); }
            60% { transform: translateX(-300%); }
            80% { transform: translateX(-400%); }
            100% { transform: translateX(-500%); }
        }
    </style>
</head>
<body class="overflow-x-hidden relative">

    <!-- Background Dekorasi -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute bg-blue-400/10 rounded-full w-[500px] h-[500px] top-[-150px] left-[-150px] blur-3xl"></div>
        <div class="absolute bg-yellow-300/10 rounded-full w-[400px] h-[400px] bottom-[-100px] right-[-100px] blur-2xl"></div>
    </div>

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-800 to-yellow-600 text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col md:flex-row items-center justify-between gap-3 md:gap-0">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('img/logokemendagri-fix.png') }}" alt="Logo" class="h-12 w-12 drop-shadow-lg">
                <span class="text-white font-extrabold text-2xl tracking-wide bg-gradient-to-r from-yellow-300 via-white to-yellow-100 bg-clip-text text-transparent">KEMENDAGRI</span>
            </div>
            <div class="overflow-hidden w-full md:w-auto flex-1 md:mx-6">
                <div class="whitespace-nowrap animate-marquee text-sm font-semibold text-white/90">
                    Selamat Datang di Sistem Pelatihan Balai Besar Kemendagri - Kota Malang. Silakan Login atau Daftar untuk Mengikuti Pelatihan.
                </div>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-semibold bg-white text-blue-900 rounded-md hover:bg-yellow-100 transition shadow">Masuk</a>
                <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold border border-white/40 text-white hover:bg-white/10 rounded-md transition shadow">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="flex flex-col items-center justify-center pt-32 pb-20 text-center px-6 relative z-10 fade-in">
        <img src="{{ asset('img/logokemendagri-fix.png') }}" alt="Logo Kemendagri" class="mx-auto w-28 md:w-36 mb-6 drop-shadow-xl">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
            Selamat Datang di Aplikasi<br>
            <span class="text-yellow-400 drop-shadow">Kementerian Dalam Negeri</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-xl">
            Sistem Pendaftaran Pelatihan Balai Besar Bina Pemerintahan dan Desa di Malang.<br>
            Silakan Login atau Register terlebih dahulu.
        </p>
        <div class="flex justify-center gap-4 flex-wrap mb-10">
            <a href="{{ route('login') }}" class="px-6 py-2 rounded-full bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition-all shadow-md">Masuk</a>
            <a href="{{ route('register') }}" class="px-6 py-2 rounded-full border border-white/30 text-white hover:bg-white/10 transition-all">Daftar</a>
        </div>
    </section>

    <!-- Tentang Aplikasi -->
    <section class="relative z-10 py-16 px-6 max-w-5xl mx-auto fade-in">
        <h2 class="text-3xl font-bold text-yellow-400 text-center mb-8">Tentang Aplikasi</h2>
        <p class="text-center text-gray-200 max-w-3xl mx-auto">
            Aplikasi ini adalah platform resmi milik <strong>Kementerian Dalam Negeri</strong> untuk pengelolaan pelatihan pemerintahan desa. 
            Pengguna dapat mendaftar, mengikuti pelatihan, serta memperoleh sertifikat resmi secara digital.
        </p>
    </section>

    <!-- Fitur -->
    <section class="relative z-10 py-10 px-6 max-w-6xl mx-auto fade-in">
        <h2 class="text-2xl font-semibold text-center text-white mb-10">Fitur Utama</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/10 border border-white/20 rounded-lg p-6 text-center hover:bg-white/20 transition-all">
                <div class="text-yellow-400 text-4xl mb-4">📋</div>
                <h3 class="text-xl font-bold mb-2">Pendaftaran Mudah</h3>
                <p class="text-gray-200 text-sm">Daftar akun, lengkapi biodata, dan langsung ikuti pelatihan.</p>
            </div>
            <div class="bg-white/10 border border-white/20 rounded-lg p-6 text-center hover:bg-white/20 transition-all">
                <div class="text-yellow-400 text-4xl mb-4">🎓</div>
                <h3 class="text-xl font-bold mb-2">Pelatihan Terstruktur</h3>
                <p class="text-gray-200 text-sm">Materi oleh Balai Besar Kemendagri & narasumber profesional.</p>
            </div>
            <div class="bg-white/10 border border-white/20 rounded-lg p-6 text-center hover:bg-white/20 transition-all">
                <div class="text-yellow-400 text-4xl mb-4">📄</div>
                <h3 class="text-xl font-bold mb-2">Sertifikat Resmi</h3>
                <p class="text-gray-200 text-sm">Dapatkan sertifikat digital setelah menyelesaikan pelatihan.</p>
            </div>
        </div>
    </section>

    <!-- Galeri Slider -->
    <section class="relative z-10 py-16 px-6 max-w-6xl mx-auto fade-in">
        <h2 class="text-2xl font-semibold text-center text-yellow-400 mb-10">Galeri Kegiatan</h2>
        <div class="slider-container rounded-lg overflow-hidden shadow-lg border border-white/20">
            <div class="slider-track">
                <img src="{{ asset('img/slide1.jpg') }}" alt="Slide 1">
                <img src="{{ asset('img/slide2.jpg') }}" alt="Slide 2">
                <img src="{{ asset('img/slide3.jpg') }}" alt="Slide 3">
                <img src="{{ asset('img/slide4.jpg') }}" alt="Slide 4">
                <img src="{{ asset('img/slide5.jpg') }}" alt="Slide 5">
                <img src="{{ asset('img/slide1.jpg') }}" alt="Slide Ulang">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="relative z-10 py-16 px-6 max-w-5xl mx-auto fade-in">
        <h2 class="text-2xl font-semibold text-center text-yellow-400 mb-10">Pertanyaan Umum</h2>
        <div class="space-y-6 text-gray-200">
            <div>
                <h3 class="font-semibold text-white">Bagaimana cara mendaftar?</h3>
                <p class="text-sm mt-1">Klik "Daftar", isi formulir, dan pilih pelatihan yang tersedia.</p>
            </div>
            <div>
                <h3 class="font-semibold text-white">Apakah saya bisa mencetak sertifikat?</h3>
                <p class="text-sm mt-1">Ya, Anda dapat mengunduh sertifikat PDF setelah selesai pelatihan.</p>
            </div>
            <div>
                <h3 class="font-semibold text-white">Siapa saja yang boleh mendaftar?</h3>
                <p class="text-sm mt-1">Peserta resmi dari desa, lembaga daerah, dan undangan Kemendagri.</p>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="relative z-10 py-16 px-6 max-w-5xl mx-auto text-center fade-in">
        <h2 class="text-2xl font-semibold text-yellow-400 mb-6">Kontak dan Bantuan</h2>
        <p class="text-gray-300 mb-4">Jika Anda butuh bantuan, hubungi kami:</p>
        <p class="text-gray-200">
            📧 <a href="mailto:support@kemendagri.go.id" class="underline hover:text-yellow-300">support@kemendagri.go.id</a><br>
            ☎️ (0341) 123456 — Senin–Jumat, 08.00–16.00 WIB
        </p>
    </section>

</body>
</html>
