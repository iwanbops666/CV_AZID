<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cvData['hero']['name'] }} - Curriculum Vitae</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased selection:bg-blue-500/20 selection:text-blue-900">

    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-6 h-16 md:h-20 flex items-center justify-between">
            <a href="#" class="font-extrabold text-xl md:text-2xl tracking-tight text-slate-900">
                Azid<span class="text-blue-600">.</span>
            </a>
            <div class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                <a href="#about" class="hover:text-blue-600 transition-colors">Tentang</a>
                <a href="#skills" class="hover:text-blue-600 transition-colors">Keahlian</a>
                <a href="#experience" class="hover:text-blue-600 transition-colors">Pengalaman</a>
                <a href="#contact" class="hover:text-blue-600 transition-colors">Kontak</a>
            </div>
            <a href="#contact" class="inline-flex items-center justify-center px-4 md:px-5 py-2 md:py-2.5 text-xs md:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-full transition-colors shadow-sm shadow-blue-600/20">
                Hubungi Saya
            </a>
        </div>
    </nav>

    <!-- Hero Section (Using Grid to prevent squishing) -->
    <section id="about" class="pt-28 pb-16 md:pt-40 md:pb-24 px-6 overflow-hidden relative">
        <!-- Ambient Background Grid & Glows -->
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="absolute inset-0 bg-[radial-gradient(#94A3B8_1px,transparent_1px)] [background-size:32px_32px] opacity-[0.2]"></div>
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-500/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-sky-400/10 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/3"></div>
        </div>
        
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center relative z-10">
            
            <!-- Letft: Text Info -->
            <div class="space-y-6 md:space-y-8 text-center lg:text-left z-10 order-2 lg:order-1">
                <div class="space-y-3">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1]">
                        Halo! Saya <br class="hidden sm:block"/>
                        {{ $cvData['hero']['name'] }}
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl font-bold text-blue-600 tracking-wide uppercase">
                        Saya Seorang <span class="text-slate-800">{{ $cvData['hero']['profession'] }}</span>
                    </p>
                </div>
                
                <p class="text-base md:text-lg text-slate-600 text-justify leading-relaxed max-w-xl mx-auto lg:mx-0 font-medium">
                    {{ $cvData['hero']['summary'] }}
                </p>
                
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 md:gap-4 pt-2">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $cvData['hero']['contact']['email'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-5 py-3 text-sm md:text-base font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-full transition-colors shadow-md shadow-blue-600/20">
                        Kirim Email
                    </a>
                    <a href="{{ asset('CV.%20Azid.pdf') }}" download class="inline-flex items-center justify-center px-5 py-3 text-sm md:text-base font-bold text-slate-700 bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 hover:shadow-sm rounded-full transition-all gap-2">
                        <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Unduh CV
                    </a>
                    <a href="tel:{{ $cvData['hero']['contact']['phone'] }}" class="inline-flex items-center justify-center w-12 h-12 text-slate-600 bg-white hover:text-blue-600 border border-slate-200 rounded-full transition-colors shadow-sm hover:shadow">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center w-12 h-12 text-slate-600 bg-white hover:text-blue-600 border border-slate-200 rounded-full transition-colors shadow-sm hover:shadow">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Right: Profile Image Box -->
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end relative mx-auto w-full max-w-[280px] sm:max-w-[320px] lg:max-w-[360px]">
                <div class="relative w-full aspect-[4/5] bg-gradient-to-tr from-slate-200 to-slate-100 rounded-[2rem] overflow-hidden shadow-2xl shadow-slate-300/50 border-[6px] border-white">
                   <img src="{{ asset('foto%20azid.jpeg') }}" alt="Foto {{ $cvData['hero']['name'] }}" class="w-full h-full object-cover" />
                </div>
                <!-- Floating Badge -->
                <div class="absolute -bottom-5 -left-4 sm:-left-8 bg-white p-3 lg:p-4 rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 flex items-center gap-3">
                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <p class="font-extrabold text-slate-900 text-sm lg:text-base">3+ Tahun</p>
                        <p class="text-[10px] lg:text-xs text-slate-500 font-bold uppercase tracking-wider">Pengalaman</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Info Box Section -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl shadow-slate-200/40 border border-slate-100">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                <div class="flex-1 text-center lg:text-left space-y-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                        Ahli di Bidang <br/> <span class="text-blue-600">Infrastruktur & DED</span>
                    </h2>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        Sebagai sarjana Teknik Sipil dari ITN Malang, saya telah menyelesaikan berbagai proyek mulai dari akses infrastruktur, pemeliharaan struktur, dan perancangan Detailed Engineering Design (DED) yang komprehensif.
                    </p>
                </div>
                <div class="flex-1 w-full shrink-0">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 bg-slate-50 rounded-3xl p-6 md:p-8 border border-slate-100">
                        <div class="text-center">
                            <p class="font-extrabold text-3xl text-slate-900">5+</p>
                            <p class="text-xs text-slate-500 uppercase tracking-widest font-bold mt-2">Klien</p>
                        </div>
                        <div class="text-center">
                            <p class="font-extrabold text-3xl text-slate-900">4<span class="text-xl text-blue-600"> Provinsi</span></p>
                            <p class="text-xs text-slate-500 uppercase tracking-widest font-bold mt-2">Jangkauan</p>
                        </div>
                        <div class="text-center col-span-2 md:col-span-1 border-t md:border-t-0 md:border-l border-slate-200 pt-4 md:pt-0 pb-2 md:pb-0">
                            <p class="font-extrabold text-3xl text-slate-900">10+</p>
                            <p class="text-xs text-slate-500 uppercase tracking-widest font-bold mt-2">Proyek DED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills / Tech Stack Section -->
    <section id="skills" class="py-20 bg-[#F8FAFC] relative overflow-hidden">
        <!-- Architectural Grid Background -->
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-40 [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-100/50 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Kemampuan Teknis</h2>
            <p class="text-slate-500 font-medium mb-10">Berikut perangkat lunak dan keahlian analisa yang saya kuasai.</p>
            
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-3 md:gap-5 justify-center">
                @foreach($cvData['skills'] as $skill)
                <div class="bg-white border border-slate-100 rounded-[1.5rem] p-5 md:p-6 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-md transition-shadow">
                    @php
                        $bgColors = ['bg-indigo-50', 'bg-blue-50', 'bg-emerald-50', 'bg-rose-50', 'bg-amber-50', 'bg-purple-50'];
                        $textColors = ['text-indigo-600', 'text-blue-600', 'text-emerald-600', 'text-rose-600', 'text-amber-600', 'text-purple-600'];
                        $idx = $loop->index % count($bgColors);
                        $bg = $bgColors[$idx];
                        $text = $textColors[$idx];
                    @endphp
                    <div class="w-14 h-14 md:w-16 md:h-16 {{ $bg }} {{ $text }} rounded-2xl flex items-center justify-center mb-3 md:mb-4 shrink-0">
                        @if($skill['name'] == 'AutoCAD')
                            <img src="{{ asset('autocad-logo-png_seeklogo-482394%20(1).jpg') }}" alt="AutoCAD" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90" onerror="this.outerHTML='<svg class=\'w-8 h-8\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z\'/></svg>'">
                        @elseif($skill['name'] == 'BIM Revit')
                            <img src="{{ asset('autodesk-revit-small-badge-1282x.jpg') }}" alt="Revit" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90" onerror="this.outerHTML='<svg class=\'w-8 h-8\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\'/></svg>'">
                        @elseif($skill['name'] == 'Enscape')
                            <!-- Enscape image logo uploaded by user -->
                            <img src="{{ asset('Enscape_Logo.jpg') }}" alt="Enscape" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90" onerror="this.outerHTML='<svg class=\'w-8 h-8\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4\'/></svg>'">
                        @elseif($skill['name'] == 'STAAD Pro')
                            <img src="{{ asset('images%20(1).jpg') }}" alt="Staad Pro" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90" onerror="this.outerHTML='<svg class=\'w-8 h-8\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M13 10V3L4 14h7v7l9-11h-7z\'/></svg>'">
                        @elseif($skill['name'] == 'ETABS')
                            <img src="{{ asset('etabs.jpg') }}" alt="ETABS" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90" onerror="this.outerHTML='<svg class=\'w-8 h-8\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M13 10V3L4 14h7v7l9-11h-7z\'/></svg>'">
                        @elseif($skill['name'] == 'Microsoft Office')
                            <img src="{{ asset('microsoft-office-logo-png_seeklogo-406239.jpg') }}" alt="Ms Office" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90" onerror="this.outerHTML='<svg class=\'w-8 h-8\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\'/></svg>'">
                        @elseif($skill['name'] == 'SketchUp')
                            <img src="{{ asset('SketchUp.jpg') }}" alt="SketchUp" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90">
                        @elseif($skill['name'] == 'SAP2000')
                            <img src="{{ asset('SAP2000.jpg') }}" alt="SAP2000" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90">
                        @elseif($skill['name'] == 'ArcMap')
                            <img src="{{ asset('ArcMap.jpg') }}" alt="ArcMap" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90">
                        @elseif($skill['name'] == 'Canva')
                            <img src="{{ asset('canva.jpg') }}" alt="Canva" class="w-10 h-10 object-contain mix-blend-multiply rounded-lg opacity-90">
                        @else
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        @endif
                    </div>
                    <h3 class="font-extrabold text-slate-800 text-base md:text-lg">{{ $skill['name'] }}</h3>
                    <p class="text-[10px] md:text-xs text-slate-500 font-bold uppercase tracking-widest mt-1.5">{{ $skill['category'] }}</p>
                </div>
                @endforeach
            </div>
            
            <div class="mt-10 flex flex-wrap justify-center gap-3">
                @foreach($cvData['languages'] as $lang)
                <span class="px-4 py-1.5 bg-blue-100/50 text-blue-700 font-bold rounded-lg text-xs uppercase tracking-wider">
                    {{ $lang }}
                </span>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Experience Portfolio Section -->
    <section id="experience" class="py-24 bg-white border-y border-slate-100 relative overflow-hidden">
        <!-- Abstract gradient mesh -->
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="absolute inset-0 bg-[radial-gradient(#CBD5E1_1px,transparent_1px)] [background-size:40px_40px] opacity-[0.15]"></div>
            <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-blue-50/50 rounded-full blur-[100px] translate-x-1/2"></div>
            <div class="absolute bottom-1/4 left-0 w-[500px] h-[500px] bg-slate-50 rounded-full blur-[80px] -translate-x-1/2"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="mb-12">
                <span class="inline-block px-3 py-1 bg-blue-50 text-blue-600 font-bold text-[10px] rounded uppercase tracking-wider mb-3">PORTOFOLIO</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Proyek Terbaru</h2>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($cvData['experience'] as $job)
                <div class="bg-white border border-slate-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:shadow-slate-200/50 transition-all flex flex-col group h-full">
                    <!-- Image Area -->
                    <div class="h-48 w-full relative border-b border-slate-100 overflow-hidden flex bg-slate-50">
                        @if(isset($job['images']) && count($job['images']) > 0)
                            <div class="w-full h-full cursor-pointer overflow-hidden relative group/img" onclick='openGallery(@json(array_map("asset", $job["images"])))'>
                                <img src="{{ asset($job['images'][0]) }}" alt="Project Image" class="w-full h-full object-cover group-hover/img:scale-110 transition-transform duration-500" />
                                <div class="absolute inset-0 bg-black/0 group-hover/img:bg-black/20 transition-colors flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white opacity-0 group-hover/img:opacity-100 transition-opacity drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </div>
                            </div>
                        @else
                            <!-- Placeholder -->
                            <div class="absolute inset-0 bg-blue-50/50 [mask-image:radial-gradient(#CBD5E1_1px,transparent_1px)] [background-size:16px_16px] opacity-30"></div>
                            <div class="w-full h-full flex flex-col items-center justify-center relative">
                                <div class="relative w-16 h-16 rounded-2xl bg-white shadow-sm border border-slate-100 mb-3 flex items-center justify-center text-slate-300 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                </div>
                                <h4 class="relative font-extrabold text-slate-400 text-center uppercase tracking-widest text-xs">VISUAL {{$loop->iteration}}</h4>
                            </div>
                        @endif
                    </div>
                    <!-- Content -->
                    <div class="p-6 md:p-8 flex-1 flex flex-col items-start text-left">
                        <div class="text-[10px] font-bold text-blue-600 uppercase tracking-widest mb-3">{{ $job['company'] }}</div>
                        <h3 class="font-extrabold text-slate-900 text-xl mb-3">{{ $job['role'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium mb-8 flex-1">
                            {{ $job['description'] }}
                        </p>
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 pt-5 border-t border-slate-100 w-full">
                            @foreach($job['tags'] as $tag)
                                <span class="px-4 py-2 bg-slate-50 border border-slate-100 text-slate-600 rounded-full text-[10px] font-bold uppercase tracking-wide flex-grow text-center lg:flex-grow-0">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-slate-50 border-b border-slate-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
             <h2 class="text-xl font-extrabold text-slate-900 mb-8 uppercase tracking-widest">Pendidikan Tinggi</h2>
             <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                @foreach($cvData['education'] as $edu)
                <div class="bg-white border border-slate-100 p-8 rounded-3xl shadow-sm md:col-span-2 hover:shadow-md transition-shadow flex flex-col items-center justify-center text-center gap-5 mx-auto w-full sm:w-96">
                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center shrink-0 border border-green-100">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-slate-900 text-xl mb-1">{{ $edu['degree'] }}</h4>
                        <div class="text-slate-500 font-bold mb-4 text-sm uppercase tracking-widest">{{ $edu['institution'] }}</div>
                        <span class="inline-block px-4 py-2 bg-green-50 text-green-700 text-xs font-bold rounded-xl uppercase tracking-wide">
                            Indeks Prestasi: {{ $edu['gpa'] }}
                        </span>
                    </div>
                </div>
                @endforeach
             </div>
        </div>
    </section>

    <!-- Let's Work Together / Footer CTA -->
    <section id="contact" class="px-6 py-20 bg-[#F8FAFC]">
        <div class="max-w-5xl mx-auto bg-slate-900 p-10 md:p-16 lg:p-20 rounded-[3rem] text-center shadow-2xl relative overflow-hidden">
            <!-- decorative bg glow -->
            <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-600/20 rounded-full blur-[100px] pointer-events-none -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-600/20 rounded-full blur-[100px] pointer-events-none translate-y-1/2 -translate-x-1/2"></div>

            <div class="relative z-10">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-6">
                    Mari Bekerja <br class="hidden sm:block"/> <span class="text-blue-400">Bersama</span>
                </h2>
                <p class="text-slate-300 font-medium mb-10 max-w-xl mx-auto text-base sm:text-lg leading-relaxed">
                    Saya terbuka untuk peluang profesional, dari sisi perencanaan, manajemen proyek, maupun perancangan teknis.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="mailto:{{ $cvData['hero']['contact']['email'] }}" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-all shadow-lg shadow-blue-900/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Kirim Email
                    </a>
                    <a href="tel:{{ $cvData['hero']['contact']['phone'] }}" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white/10 hover:bg-white/20 border border-white/10 text-white font-bold rounded-xl transition-all backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center mt-16 text-slate-400 font-bold text-xs uppercase tracking-widest">
            &copy; {{ date('Y') }} {{ $cvData['hero']['name'] }}
        </div>
    </section>

    <!-- Lightbox Modal Gallery -->
    <div id="imageModal" class="fixed inset-0 z-[100] bg-slate-900/95 backdrop-blur-md hidden flex-col items-center justify-center p-4 md:p-12 opacity-0 transition-opacity duration-300">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-6 right-6 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 p-3 rounded-full transition-colors z-[110]">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        
        <!-- Main Image Container -->
        <div class="relative w-full max-w-5xl flex items-center justify-center z-[105]">
            <img id="modalImage" src="" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl scale-95 transition-transform duration-300 select-none cursor-pointer" />
            
            <!-- Prev Button -->
            <button id="prevBtn" onclick="prevImage(event)" class="absolute left-2 md:-left-16 top-1/2 -translate-y-1/2 text-white/70 hover:text-white bg-black/50 hover:bg-black/80 p-3 rounded-full transition-all hidden">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/></svg>
            </button>
            
            <!-- Next Button -->
            <button id="nextBtn" onclick="nextImage(event)" class="absolute right-2 md:-right-16 top-1/2 -translate-y-1/2 text-white/70 hover:text-white bg-black/50 hover:bg-black/80 p-3 rounded-full transition-all hidden">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
        
        <!-- Counter -->
        <div id="galleryCounter" class="absolute bottom-6 text-white/60 font-bold tracking-widest text-sm z-[110] hidden">
            1 / 1
        </div>
    </div>
    
    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const counter = document.getElementById('galleryCounter');
        
        let galleryImages = [];
        let currentIdx = 0;
        
        function updateGalleryUI() {
            modalImg.src = galleryImages[currentIdx];
            if(galleryImages.length > 1) {
                prevBtn.classList.remove('hidden');
                nextBtn.classList.remove('hidden');
                counter.classList.remove('hidden');
                counter.innerText = (currentIdx + 1) + ' / ' + galleryImages.length;
            } else {
                prevBtn.classList.add('hidden');
                nextBtn.classList.add('hidden');
                counter.classList.add('hidden');
            }
        }
        
        function openGallery(images) {
            galleryImages = images;
            currentIdx = 0;
            updateGalleryUI();
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);
        }
        
        function prevImage(e) {
            if(e) e.stopPropagation();
            currentIdx = (currentIdx === 0) ? galleryImages.length - 1 : currentIdx - 1;
            updateGalleryUI();
        }
        
        function nextImage(e) {
            if(e) e.stopPropagation();
            currentIdx = (currentIdx === galleryImages.length - 1) ? 0 : currentIdx + 1;
            updateGalleryUI();
        }
        
        function closeModal() {
            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                modalImg.src = "";
            }, 300);
        }
        
        // Close on background click
        modal.addEventListener('click', function(e) {
            if (e.target === modal || e.target.parentElement === modal) closeModal();
        });
        
        // Next on image click
        modalImg.addEventListener('click', function(e) {
            e.stopPropagation();
            if(galleryImages.length > 1) nextImage();
        });
        
        document.addEventListener('keydown', function(event) {
            if (modal.classList.contains('hidden')) return;
            if (event.key === "Escape") closeModal();
            if (event.key === "ArrowLeft" && galleryImages.length > 1) prevImage();
            if (event.key === "ArrowRight" && galleryImages.length > 1) nextImage();
        });
    </script>
</body>
</html>