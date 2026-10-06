<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darul Rohman | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #020617;
            color: #e2e8f0;
            min-height: 100vh;
        }
        .cyber-grid {
            background-color: #020617;
            background-image:
                linear-gradient(rgba(0, 180, 255, 0.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 180, 255, 0.06) 1px, transparent 1px);
            background-size: 42px 42px;
        }
        .glass {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(16px);
        }
        .glow-text {
            text-shadow: 0 0 14px #00d4ff, 0 0 35px rgba(0,212,255,0.35);
        }
        .neon-border {
            box-shadow: 0 0 18px rgba(0,212,255,0.25), inset 0 0 10px rgba(0,212,255,0.08);
        }
        .project-card.hide { display: none; }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .floating {
            animation: floating 3.5s ease-in-out infinite;
        }
        .floating:nth-child(2) { animation-delay: 0.6s; }
        .floating:nth-child(3) { animation-delay: 1.2s; }
        .floating:nth-child(4) { animation-delay: 1.8s; }
        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-14px); }
        }
        #projectModal {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        #projectModal.show {
            opacity: 1;
            pointer-events: auto;
        }
        #projectModal .modal-window {
            transform: scale(0.85) translateY(30px);
            opacity: 0;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        #projectModal.show .modal-window {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
        .toggle-track {
            width: 44px; height: 24px;
            border-radius: 9999px;
            background: #1e293b;
            position: relative;
            cursor: pointer;
            transition: background 0.25s;
        }
        .toggle-track.on { background: #0ea5e9; }
        .toggle-thumb {
            width: 18px; height: 18px;
            border-radius: 50%;
            background: white;
            position: absolute;
            top: 3px; left: 3px;
            transition: left 0.25s;
        }
        .toggle-track.on .toggle-thumb { left: 23px; }
        .phone-shadow {
            filter: drop-shadow(0 30px 50px rgba(0,150,255,0.4));
        }
        .phone-glow {
            box-shadow: 0 0 40px rgba(0, 212, 255, 0.25), 0 0 80px rgba(0, 150, 255, 0.15);
        }
    </style>
</head>
<body class="cyber-grid text-slate-100">

    <!-- ========== NAVBAR ========== -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="font-bold text-lg tracking-wide">
                Darul <span class="text-cyan-400">Rohman</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#home" class="hover:text-cyan-400 transition">Home</a>
                <a href="#about" class="hover:text-cyan-400 transition">About</a>
                <a href="#experience" class="hover:text-cyan-400 transition">Experience</a>
                <a href="#works" class="hover:text-cyan-400 transition">Works</a>
                <a href="#contact" class="hover:text-cyan-400 transition">Contact</a>
            </div>
            <button id="hamburger" class="md:hidden text-xl text-cyan-300">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed top-0 right-[-100%] w-72 h-full bg-slate-900 z-50 p-8 transition-all duration-300 md:hidden border-l border-cyan-500/20">
        <button id="closeMenu" class="absolute top-5 right-5 text-xl text-cyan-300"><i class="fas fa-times"></i></button>
        <div class="mt-16 flex flex-col gap-6 text-lg">
            <a href="#home" class="mobile-link hover:text-cyan-400">Home</a>
            <a href="#about" class="mobile-link hover:text-cyan-400">About</a>
            <a href="#experience" class="mobile-link hover:text-cyan-400">Experience</a>
            <a href="#works" class="mobile-link hover:text-cyan-400">Works</a>
            <a href="#contact" class="mobile-link hover:text-cyan-400">Contact</a>
        </div>
    </div>
    <div id="overlay" class="fixed inset-0 bg-black/60 z-40 hidden"></div>

    <!-- ========== HOME / HERO ========== -->
    <section id="home" class="min-h-screen flex items-center pt-20 pb-16 relative overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-cyan-500/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-600/15 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                <!-- LEFT : Text Content -->
                <div class="fade-in order-2 lg:order-1">
                    <p class="text-xs tracking-widest text-cyan-400/80 uppercase mb-3">archive by darul.rohman</p>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-none tracking-tighter mb-4">
                        <span class="text-white/90">my</span><br>
                        <span class="text-white glow-text">portfolio</span>
                    </h1>
                    <p class="text-lg text-slate-300 mb-1">Hai perkenalkan, nama saya</p>
                    <p class="text-2xl md:text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400 mb-6">
                        Darul Rohman
                    </p>
                    <p class="text-slate-400 mb-8 leading-relaxed max-w-lg">
                        Software Engineer · Web & Mobile Developer · Content Creator
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ asset('cv/Darul-Rohman-CV.pdf') }}" download
                           class="inline-flex items-center gap-2 bg-cyan-600 hover:bg-cyan-500 px-7 py-3.5 rounded-full font-semibold transition shadow-lg shadow-cyan-500/30">
                            <i class="fas fa-download"></i> Download CV
                        </a>
                        <a href="#contact"
                           class="inline-flex items-center gap-2 border border-cyan-500/40 hover:bg-cyan-500/10 px-7 py-3.5 rounded-full font-semibold transition">
                            <i class="fab fa-whatsapp text-green-400"></i> Hubungi Saya
                        </a>
                    </div>
                </div>

                <!-- RIGHT : Instagram Phone (dengan foto digabung) -->
                <div class="fade-in order-1 lg:order-2 flex justify-center relative">
                    <!-- Floating icons di sekitar phone -->
                    <div class="floating absolute -top-6 -left-4 md:-left-8 w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-xl z-20">
                        <img src="https://cdn.worldvectorlogo.com/logos/canva-1.svg" class="w-8 h-8" alt="Canva">
                    </div>
                    <div class="floating absolute top-24 -right-6 md:-right-10 w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center shadow-xl z-20 text-white font-bold text-lg">Ps</div>
                    <div class="floating absolute bottom-32 -left-6 md:-left-10 w-12 h-12 bg-black rounded-2xl flex items-center justify-center shadow-xl z-20">
                        <i class="fab fa-tiktok text-white text-xl"></i>
                    </div>
                    <div class="floating absolute -bottom-4 right-2 md:right-6 w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-600 rounded-2xl flex items-center justify-center shadow-xl z-20 text-white">
                        <i class="fas fa-cut"></i>
                    </div>

                    <!-- Phone Mockup -->
                    <div class="relative max-w-[300px] phone-shadow">
                        <div class="bg-slate-900 rounded-[2.4rem] border-[5px] border-slate-700 overflow-hidden phone-glow">
                            <!-- status bar -->
                            <div class="bg-black px-5 pt-3.5 pb-1.5 flex justify-between items-center text-[11px] text-white/80">
                                <span class="font-medium">9:41</span>
                                <div class="flex gap-1.5 items-center">
                                    <i class="fas fa-signal text-xs"></i>
                                    <i class="fas fa-wifi text-xs"></i>
                                    <i class="fas fa-battery-full text-xs"></i>
                                </div>
                            </div>

                            <!-- IG header + profile photo besar -->
                            <div class="bg-black px-4 pt-3 pb-2">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 p-[2.5px] flex-shrink-0">
                                        <div class="w-full h-full rounded-full bg-slate-900 overflow-hidden border-2 border-black">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face" 
                                                 class="w-full h-full object-cover" alt="Darul Rohman">
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-semibold text-sm truncate">darul.rohman</p>
                                        <p class="text-[11px] text-slate-400">Software Engineer</p>
                                    </div>
                                    <div class="text-xl text-white/60">⋯</div>
                                </div>

                                <!-- stats -->
                                <div class="flex justify-around text-center text-xs mb-3">
                                    <div>
                                        <p class="font-bold text-sm">24</p>
                                        <p class="text-slate-400 text-[10px]">postingan</p>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">1.2k</p>
                                        <p class="text-slate-400 text-[10px]">pengikut</p>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">890</p>
                                        <p class="text-slate-400 text-[10px]">mengikuti</p>
                                    </div>
                                </div>

                                <!-- bio -->
                                <div class="text-[12px] leading-snug mb-3">
                                    <p class="font-semibold">Darul Rohman</p>
                                    <p class="text-slate-300">Web & Mobile Developer</p>
                                    <p class="text-cyan-400">@darul.rohman</p>
                                    <p class="text-slate-400 mt-1 text-[11px]">Building digital products ✨</p>
                                </div>

                                <!-- buttons -->
                                <div class="flex gap-2 mb-3">
                                    <button class="flex-1 bg-slate-800 hover:bg-slate-700 text-xs py-2 rounded-lg font-medium transition">Edit profil</button>
                                    <button class="flex-1 bg-slate-800 hover:bg-slate-700 text-xs py-2 rounded-lg font-medium transition">Bagikan</button>
                                </div>
                            </div>

                            <!-- highlight stories (opsional biar lebih menarik) -->
                            <div class="bg-black px-3 pb-2 flex gap-3 overflow-x-auto">
                                <div class="flex flex-col items-center gap-1 flex-shrink-0">
                                    <div class="w-14 h-14 rounded-full border-2 border-slate-600 p-0.5">
                                        <div class="w-full h-full rounded-full bg-slate-800 overflow-hidden">
                                            <img src="https://picsum.photos/seed/s1/80" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <span class="text-[9px] text-slate-400">Works</span>
                                </div>
                                <div class="flex flex-col items-center gap-1 flex-shrink-0">
                                    <div class="w-14 h-14 rounded-full border-2 border-slate-600 p-0.5">
                                        <div class="w-full h-full rounded-full bg-slate-800 overflow-hidden">
                                            <img src="https://picsum.photos/seed/s2/80" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <span class="text-[9px] text-slate-400">Design</span>
                                </div>
                                <div class="flex flex-col items-center gap-1 flex-shrink-0">
                                    <div class="w-14 h-14 rounded-full border-2 border-slate-600 p-0.5">
                                        <div class="w-full h-full rounded-full bg-slate-800 overflow-hidden">
                                            <img src="https://picsum.photos/seed/s3/80" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <span class="text-[9px] text-slate-400">Code</span>
                                </div>
                            </div>

                            <!-- grid posts -->
                            <div class="grid grid-cols-3 gap-0.5 bg-black">
                                <div class="aspect-square bg-slate-800 overflow-hidden">
                                    <img src="https://picsum.photos/seed/p1/200" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                </div>
                                <div class="aspect-square bg-slate-800 overflow-hidden">
                                    <img src="https://picsum.photos/seed/p2/200" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                </div>
                                <div class="aspect-square bg-slate-800 overflow-hidden">
                                    <img src="https://picsum.photos/seed/p3/200" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                </div>
                                <div class="aspect-square bg-slate-800 overflow-hidden">
                                    <img src="https://picsum.photos/seed/p4/200" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                </div>
                                <div class="aspect-square bg-slate-800 overflow-hidden">
                                    <img src="https://picsum.photos/seed/p5/200" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                </div>
                                <div class="aspect-square bg-slate-800 overflow-hidden">
                                    <img src="https://picsum.photos/seed/p6/200" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                </div>
                            </div>

                            <!-- bottom nav -->
                            <div class="bg-black flex justify-around py-3.5 text-white/70 text-lg border-t border-slate-800">
                                <i class="fas fa-home"></i>
                                <i class="fas fa-search"></i>
                                <i class="far fa-plus-square"></i>
                                <i class="far fa-heart"></i>
                                <i class="far fa-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT ========== -->
    <section id="about" class="py-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in">
                <p class="text-cyan-400 font-semibold text-sm uppercase tracking-widest mb-2">About Me</p>
                <h2 class="text-3xl md:text-4xl font-bold">Kenali Saya Lebih Dekat</h2>
                <p class="text-slate-400 mt-3 max-w-xl mx-auto">Sedikit tentang perjalanan, passion, dan keahlian yang saya miliki</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-start">
                <div class="fade-in space-y-6">
                    <div class="bg-slate-900/80 border border-cyan-500/30 rounded-2xl p-6 neon-border hover:border-cyan-400/50 transition">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <span class="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center text-cyan-400"><i class="fas fa-user"></i></span>
                            Siapa Saya?
                        </h3>
                        <p class="text-slate-400 leading-relaxed">
                            Saya adalah Software Engineer yang memiliki ketertarikan mendalam pada pengembangan aplikasi web dan mobile. Saya senang mengubah ide menjadi produk digital yang fungsional, indah, dan bermanfaat.
                        </p>
                    </div>
                    <div class="bg-slate-900/80 border border-cyan-500/30 rounded-2xl p-6 neon-border hover:border-cyan-400/50 transition">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <span class="w-8 h-8 bg-cyan-500/20 rounded-lg flex items-center justify-center text-cyan-400"><i class="fas fa-bullseye"></i></span>
                            Apa yang Saya Lakukan?
                        </h3>
                        <p class="text-slate-400 leading-relaxed">
                            Saya fokus pada pembuatan website modern, aplikasi mobile, desain visual (Canva), penulisan artikel, dan editing video menggunakan CapCut. Saya terbiasa bekerja secara mandiri maupun kolaboratif.
                        </p>
                    </div>
                    <div class="bg-slate-900/80 border border-cyan-500/30 rounded-2xl p-6 neon-border hover:border-cyan-400/50 transition">
                        <h3 class="font-bold text-lg mb-3 flex items-center gap-2">
                            <span class="w-8 h-8 bg-emerald-500/20 rounded-lg flex items-center justify-center text-emerald-400"><i class="fas fa-rocket"></i></span>
                            Tujuan Saya
                        </h3>
                        <p class="text-slate-400 leading-relaxed">
                            Saat ini saya aktif mencari kesempatan untuk bergabung dengan tim yang dinamis dan inovatif, baik full-time, freelance, maupun project-based.
                        </p>
                    </div>
                </div>

                <div class="fade-in">
                    <div class="bg-gradient-to-br from-slate-900 to-slate-900/50 border border-cyan-500/25 rounded-2xl p-6 neon-border">
                        <h3 class="font-bold text-lg mb-5 flex items-center gap-2">
                            <span class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center text-purple-400"><i class="fas fa-code"></i></span>
                            Tech Stack & Skills
                        </h3>
                        <div class="flex flex-wrap gap-3">
                            @foreach($techStack as $tech)
                                <span class="group bg-slate-800 border border-slate-700 hover:border-cyan-500 hover:bg-cyan-500/10 px-4 py-2.5 rounded-xl text-sm transition-all cursor-default hover:-translate-y-1 hover:shadow-lg hover:shadow-cyan-500/10">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-800">
                            <p class="text-sm text-slate-500 mb-3 font-medium">Soft Skills</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1.5 rounded-full">Problem Solving</span>
                                <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1.5 rounded-full">Teamwork</span>
                                <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1.5 rounded-full">Creativity</span>
                                <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1.5 rounded-full">Time Management</span>
                                <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1.5 rounded-full">Communication</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member of + Software -->
            <div class="mt-16 grid md:grid-cols-2 gap-10 items-center fade-in">
                <div class="text-center md:text-left">
                    <div class="inline-block bg-slate-800/80 border border-slate-600 rounded-full px-6 py-2 mb-6">
                        <span class="text-sm font-semibold tracking-widest uppercase">member of</span>
                    </div>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg">f</div>
                        <div class="w-14 h-14 rounded-2xl bg-slate-700 flex items-center justify-center text-cyan-300 text-xl font-bold shadow-lg">D</div>
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-400 to-blue-600 flex items-center justify-center text-white text-xl font-bold shadow-lg">S</div>
                        <div class="w-14 h-14 rounded-2xl bg-orange-500 flex items-center justify-center text-white text-xl shadow-lg"><i class="fas fa-fire"></i></div>
                    </div>
                </div>
                <div class="bg-slate-900/70 border border-slate-700 rounded-3xl p-6 neon-border">
                    <div class="flex justify-center gap-6 mb-6">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-2xl bg-blue-700 flex items-center justify-center text-white font-bold text-xl shadow-lg">Ps</div>
                            <div class="toggle-track on" onclick="this.classList.toggle('on')"><div class="toggle-thumb"></div></div>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-lg">
                                <img src="https://cdn.worldvectorlogo.com/logos/canva-1.svg" class="w-8 h-8" alt="Canva">
                            </div>
                            <div class="toggle-track" onclick="this.classList.toggle('on')"><div class="toggle-thumb"></div></div>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-14 h-14 rounded-2xl bg-black flex items-center justify-center text-white text-xl shadow-lg"><i class="fas fa-cut"></i></div>
                            <div class="toggle-track" onclick="this.classList.toggle('on')"><div class="toggle-thumb"></div></div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="inline-block bg-slate-800 border border-slate-600 rounded-full px-6 py-1.5">
                            <span class="text-sm font-semibold tracking-widest uppercase">my software</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== EXPERIENCE ========== -->
    <section id="experience" class="py-24 bg-slate-900/40 relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-cyan-600/10 rounded-full blur-3xl"></div>
        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in">
                <p class="text-cyan-400 font-semibold text-sm uppercase tracking-widest mb-2">Experience</p>
                <h2 class="text-3xl md:text-4xl font-bold">Pengalaman & Perjalanan</h2>
                <p class="text-slate-400 mt-3 max-w-xl mx-auto">Riwayat pengalaman kerja, proyek, dan kontribusi yang pernah saya lakukan</p>
            </div>
            <div class="space-y-6">
                @foreach($experiences as $index => $exp)
                    <div class="fade-in group">
                        <div class="bg-slate-900/80 border border-slate-800 hover:border-cyan-500/40 rounded-2xl p-6 md:p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-cyan-500/10 neon-border">
                            <div class="flex flex-col md:flex-row md:items-start gap-5">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 border border-cyan-500/30 flex items-center justify-center text-xl font-bold text-cyan-400 group-hover:scale-110 transition">
                                        0{{ $index + 1 }}
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-wrap items-start justify-between gap-3 mb-3">
                                        <div>
                                            <h3 class="text-xl font-bold group-hover:text-cyan-300 transition">{{ $exp['role'] }}</h3>
                                            <p class="text-cyan-400 font-medium mt-0.5"><i class="fas fa-building text-sm mr-1"></i> {{ $exp['company'] }}</p>
                                        </div>
                                        <span class="inline-flex items-center gap-1.5 text-sm text-slate-400 bg-slate-800 px-3 py-1.5 rounded-full">
                                            <i class="far fa-calendar"></i> {{ $exp['period'] }}
                                        </span>
                                    </div>
                                    <ul class="space-y-2 mt-4">
                                        @foreach($exp['description'] as $desc)
                                            <li class="flex items-start gap-2 text-slate-400 text-sm">
                                                <i class="fas fa-check-circle text-emerald-400 mt-1 text-xs"></i>
                                                <span>{{ $desc }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== SOFTWARE ========== -->
    <section id="software" class="py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <div class="inline-block bg-slate-800/80 border border-slate-700 rounded-full px-8 py-2 mb-10 fade-in">
                <h2 class="text-xl font-bold tracking-widest">SOFTWARE</h2>
            </div>
            <div class="flex flex-wrap justify-center gap-6 fade-in">
                <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-lg hover:scale-110 transition">
                    <img src="https://cdn.worldvectorlogo.com/logos/canva-1.svg" class="w-12 h-12" alt="Canva">
                </div>
                <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl flex items-center justify-center shadow-lg hover:scale-110 transition text-white font-bold text-2xl">Ps</div>
                <div class="w-20 h-20 bg-black rounded-2xl flex items-center justify-center shadow-lg hover:scale-110 transition"><i class="fab fa-tiktok text-3xl"></i></div>
                <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg hover:scale-110 transition text-white text-2xl"><i class="fas fa-cut"></i></div>
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg hover:scale-110 transition text-white text-2xl"><i class="fab fa-laravel"></i></div>
                <div class="w-20 h-20 bg-slate-800 border border-slate-600 rounded-2xl flex items-center justify-center shadow-lg hover:scale-110 transition text-cyan-400 text-2xl"><i class="fab fa-react"></i></div>
            </div>
        </div>
    </section>

    <!-- ========== WORKS ========== -->
    <section id="works" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-3 fade-in">Works & Projects</h2>
            <p class="text-slate-400 mb-8 fade-in">Beberapa karya yang pernah saya kerjakan</p>
            <div class="flex flex-wrap gap-3 mb-10 fade-in">
                <button class="filter-btn active px-5 py-2 rounded-full text-sm font-medium bg-cyan-600 text-white" data-filter="all">All</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-slate-800 border border-slate-700 hover:border-cyan-500" data-filter="web">Web Apps</button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-slate-800 border border-slate-700 hover:border-cyan-500" data-filter="uiux">Design & Editing</button>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6" id="projectsGrid">
                @foreach($projects as $project)
                    <div class="project-card bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-cyan-500/50 hover:-translate-y-2 transition-all duration-300 fade-in cursor-pointer neon-border"
                         data-category="{{ $project['category'] }}"
                         onclick="openProjectModal({{ $project['id'] }})">
                        <div class="h-52 overflow-hidden">
                            <img src="{{ $project['cover'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-cyan-400 font-semibold uppercase tracking-wider mb-1">{{ strtoupper($project['category']) }}</p>
                            <h3 class="font-bold text-lg mb-2">{{ $project['title'] }}</h3>
                            <p class="text-slate-400 text-sm mb-4 line-clamp-2">{{ $project['description'] }}</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($project['tech'] as $t)
                                    <span class="text-xs bg-cyan-500/15 text-cyan-300 px-2.5 py-1 rounded-md">{{ $t }}</span>
                                @endforeach
                            </div>
                            <div class="flex gap-2">
                                @if($project['apk'])
                                    <a href="{{ $project['apk'] }}" download onclick="event.stopPropagation()" class="flex-1 text-center text-sm bg-emerald-600 hover:bg-emerald-500 py-2 rounded-lg font-medium transition"><i class="fas fa-download"></i> APK</a>
                                @endif
                                <button onclick="event.stopPropagation(); openProjectModal({{ $project['id'] }})" class="flex-1 text-center text-sm border border-slate-700 hover:border-cyan-500 py-2 rounded-lg font-medium transition">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== PROJECT MODAL ========== -->
    <div id="projectModal" class="fixed inset-0 bg-black/70 z-50 hidden items-center justify-center p-4">
        <div class="modal-window bg-slate-900 border border-cyan-500/30 rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto neon-border">
            <div class="sticky top-0 bg-slate-900 border-b border-slate-700 px-6 py-4 flex justify-between items-center">
                <h3 id="modalTitle" class="text-xl font-bold"></h3>
                <button onclick="closeProjectModal()" class="text-2xl text-slate-400 hover:text-white">&times;</button>
            </div>
            <div class="p-6">
                <img id="modalCover" src="" alt="" class="w-full h-64 object-cover rounded-xl mb-6">
                <p id="modalDescription" class="text-slate-300 mb-6 leading-relaxed"></p>
                <div id="modalTech" class="flex flex-wrap gap-2 mb-6"></div>
                <h4 class="font-semibold mb-3">Galeri Proyek</h4>
                <div id="modalImages" class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6"></div>
                <div id="modalActions" class="flex gap-3"></div>
            </div>
        </div>
    </div>

    <!-- ========== CONTACT ========== -->
    <section id="contact" class="py-24 bg-slate-900/50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-3 fade-in">Get In Touch</h2>
            <p class="text-slate-400 mb-12 fade-in">Tertarik bekerja sama? Mari terhubung!</p>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="fade-in">
                    <h3 class="text-xl font-semibold mb-4">Mari diskusikan peluang kolaborasi</h3>
                    <p class="text-slate-400 mb-8">Saya terbuka untuk kesempatan full-time, freelance, maupun project-based.</p>
                    <div class="space-y-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-cyan-500/15 rounded-xl flex items-center justify-center text-cyan-400"><i class="fas fa-envelope"></i></div>
                            <div>
                                <p class="text-xs text-slate-500">Email</p>
                                <a href="mailto:darllssss745@gmail.com" class="font-medium hover:text-cyan-400 transition">darllssss745@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-cyan-500/15 rounded-xl flex items-center justify-center text-cyan-400"><i class="fab fa-whatsapp"></i></div>
                            <div>
                                <p class="text-xs text-slate-500">WhatsApp</p>
                                <a href="https://wa.me/6283115054165" target="_blank" class="font-medium hover:text-cyan-400 transition">+62 831-1505-4165</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3 mt-8">
                        <a href="https://www.instagram.com/xyzyaa1010?stkn=MTJqemJpOHRpNTQxbA==" target="_blank" class="w-11 h-11 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center hover:bg-pink-600 hover:border-pink-600 transition" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/darllssss745-sys" target="_blank" class="w-11 h-11 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center hover:bg-gray-600 hover:border-gray-600 transition" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://wa.me/6283115054165" target="_blank" class="w-11 h-11 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center hover:bg-green-600 hover:border-green-600 transition" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.tiktok.com/@_dodoankrjin?_r=1&_t=ZS-9ABO1ddA7ZU" target="_blank" class="w-11 h-11 bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center hover:bg-black hover:border-black transition" title="TikTok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="bg-slate-900 border border-cyan-500/25 rounded-2xl p-6 fade-in neon-border">
                    <form id="contactForm">
                        <div class="mb-4">
                            <label class="block text-sm font-medium mb-1.5">Nama Lengkap</label>
                            <input type="text" id="name" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-500 transition" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium mb-1.5">Email</label>
                            <input type="email" id="email" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-500 transition" placeholder="email@contoh.com">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-1.5">Pesan</label>
                            <textarea id="message" rows="4" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-500 transition" placeholder="Tulis pesan Anda..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-cyan-600 hover:bg-cyan-500 py-3 rounded-xl font-semibold transition flex items-center justify-center gap-2 shadow-lg shadow-cyan-500/20">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="border-t border-slate-800 py-8 text-center text-slate-500 text-sm">
        © 2026 Darul Rohman. All Rights Reserved.
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('glass', 'border-b', 'border-slate-800');
            } else {
                navbar.classList.remove('glass', 'border-b', 'border-slate-800');
            }
        });

        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const closeMenu = document.getElementById('closeMenu');
        function openMenu() { mobileMenu.style.right = '0'; overlay.classList.remove('hidden'); }
        function closeMenuFn() { mobileMenu.style.right = '-100%'; overlay.classList.add('hidden'); }
        hamburger.addEventListener('click', openMenu);
        closeMenu.addEventListener('click', closeMenuFn);
        overlay.addEventListener('click', closeMenuFn);
        document.querySelectorAll('.mobile-link').forEach(link => link.addEventListener('click', closeMenuFn));

        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-cyan-600', 'text-white');
                    b.classList.add('bg-slate-800', 'border', 'border-slate-700');
                });
                btn.classList.add('active', 'bg-cyan-600', 'text-white');
                btn.classList.remove('bg-slate-800', 'border', 'border-slate-700');
                const filter = btn.dataset.filter;
                projectCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) card.classList.remove('hide');
                    else card.classList.add('hide');
                });
            });
        });

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            const subject = encodeURIComponent(`Pesan dari Portfolio - ${name}`);
            const body = encodeURIComponent(`Nama: ${name}\nEmail: ${email}\n\nPesan:\n${message}`);
            window.location.href = `mailto:darllssss745@gmail.com?subject=${subject}&body=${body}`;
        });

        const fadeEls = document.querySelectorAll('.fade-in');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        fadeEls.forEach(el => observer.observe(el));

        const projectsData = @json($projects);

        function openProjectModal(id) {
            const project = projectsData.find(p => p.id === id);
            if (!project) return;
            document.getElementById('modalTitle').textContent = project.title;
            document.getElementById('modalCover').src = project.cover;
            document.getElementById('modalDescription').textContent = project.description;
            document.getElementById('modalTech').innerHTML = project.tech.map(t => `<span class="text-xs bg-cyan-500/15 text-cyan-300 px-3 py-1.5 rounded-md">${t}</span>`).join('');
            document.getElementById('modalImages').innerHTML = project.images.map(img => `<img src="${img}" class="w-full h-48 object-cover rounded-xl" alt="Project image">`).join('');
            let actionsHTML = '';
            if (project.apk) actionsHTML += `<a href="${project.apk}" download class="flex-1 text-center bg-emerald-600 hover:bg-emerald-500 py-2.5 rounded-xl font-medium transition"><i class="fas fa-download"></i> Download APK</a>`;
            if (project.demo && project.demo !== '#') actionsHTML += `<a href="${project.demo}" target="_blank" class="flex-1 text-center border border-slate-600 hover:border-cyan-500 py-2.5 rounded-xl font-medium transition">Live Demo</a>`;
            if (project.github && project.github !== '#') actionsHTML += `<a href="${project.github}" target="_blank" class="flex-1 text-center border border-slate-600 hover:border-cyan-500 py-2.5 rounded-xl font-medium transition"><i class="fab fa-github"></i> GitHub</a>`;
            document.getElementById('modalActions').innerHTML = actionsHTML;
            const modal = document.getElementById('projectModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            requestAnimationFrame(() => modal.classList.add('show'));
        }
        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('show');
            setTimeout(() => { modal.classList.add('hidden'); modal.classList.remove('flex'); }, 300);
        }
        document.getElementById('projectModal').addEventListener('click', function(e) {
            if (e.target === this) closeProjectModal();
        });
    </script>
</body>
</html>