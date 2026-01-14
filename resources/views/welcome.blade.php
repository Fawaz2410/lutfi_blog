<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECH VOGUE - Galaxy Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700;800&family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        display: ['"Manrope"', 'sans-serif'],
                    },
                    colors: {
                        // Palet Warna Galaxy Nebula
                        'galaxy-dark': '#0a0a16',    /* Latar belakang terdalam */
                        'galaxy-card': '#13132b',    /* Warna dasar kartu gelap */
                        'galaxy-purple': '#7b2cbf',  /* Aksen Ungu */
                        'galaxy-pink': '#f72585',    /* Aksen Pink/Magenta */
                        'galaxy-cyan': '#4cc9f0',    /* Aksen Cyan terang */
                    },
                    backgroundImage: {
                        'galaxy-gradient': 'linear-gradient(to right, #7b2cbf, #f72585)',
                        'galaxy-text-gradient': 'linear-gradient(to right, #f72585, #4cc9f0)',
                    },
                    boxShadow: {
                        'galaxy-glow': '0 0 20px -5px rgba(123, 44, 191, 0.5)', /* Efek cahaya ungu */
                    }
                }
            }
        }
    </script>
    <style>
        /* Background Deep Space */
        body {
            background: radial-gradient(ellipse at top, #1a1a3a, #0a0a16 80%);
            min-height: 100vh;
        }
        /* Efek Gradient Text */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(to right, #f72585, #4cc9f0);
        }
    </style>
</head>

<body class="text-gray-200 font-sans antialiased">

    <nav class="sticky top-0 z-50 bg-galaxy-dark/80 backdrop-blur-md border-b border-white/10 shadow-lg shadow-galaxy-purple/10">
        <div class="max-w-screen-xl mx-auto px-4 md:px-6 h-16 flex justify-between items-center">
            <div class="flex items-center space-x-2 group cursor-pointer">
                <div class="w-8 h-8 bg-gradient-to-br from-galaxy-purple to-galaxy-pink text-white flex items-center justify-center font-display font-black text-xl rounded shadow-galaxy-glow group-hover:rotate-12 transition">V</div>
                <span class="font-display font-extrabold text-xl tracking-tighter text-white">TECH VOGUE</span>
            </div>
            
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-xs bg-gradient-to-r from-galaxy-purple to-galaxy-pink text-white px-5 py-2.5 rounded-full font-bold uppercase hover:shadow-galaxy-glow transition duration-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-xs border-2 border-white/30 text-white px-5 py-2.5 rounded-full font-bold uppercase hover:bg-white hover:text-galaxy-dark hover:border-white transition duration-300">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="max-w-screen-xl mx-auto px-4 md:px-6 py-12">
        
        @if($articles->count() > 0)
            @php $firstArticle = $articles->first(); @endphp
            
            <div class="bg-galaxy-card/60 backdrop-blur-sm rounded-2xl border border-white/10 overflow-hidden mb-16 group hover:shadow-galaxy-glow hover:border-galaxy-purple/50 transition-all duration-500 relative">
                 <div class="absolute -top-24 -left-24 w-64 h-64 bg-galaxy-purple/30 rounded-full filter blur-[80px] opacity-50 pointer-events-none"></div>
                 <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-galaxy-pink/30 rounded-full filter blur-[80px] opacity-50 pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 relative z-10">
                    <div class="p-8 md:p-12 flex flex-col justify-center order-2 lg:order-1">
                        <a href="{{ route('articles.show', $firstArticle->id) }}" class="text-galaxy-cyan font-bold uppercase text-xs tracking-[0.2em] mb-4 hover:underline">
                            <span class="inline-block w-2 h-2 bg-galaxy-cyan rounded-full mr-2 animate-pulse"></span>Top Story
                        </a>
                        <a href="{{ route('articles.show', $firstArticle->id) }}">
                            <h1 class="text-4xl md:text-5xl font-display font-extrabold leading-tight mb-6 text-white group-hover:text-gradient transition duration-300">
                                {{ $firstArticle->title }}
                            </h1>
                        </a>
                        <p class="text-gray-300 text-lg mb-6 leading-relaxed font-light">{{ Str::limit($firstArticle->content, 140) }}</p>
                        <div class="flex items-center space-x-3 text-xs font-bold uppercase tracking-wide text-gray-400">
                             <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-galaxy-cyan">
                                 {{ substr($firstArticle->author, 0, 1) }}
                             </div>
                            <span class="text-white">{{ $firstArticle->author }}</span>
                            <span class="text-galaxy-purple">•</span>
                            <span>{{ \Carbon\Carbon::parse($firstArticle->published_at)->format('M d') }}</span>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 h-[350px] lg:h-auto relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-galaxy-card/80 to-transparent z-10 lg:bg-gradient-to-l"></div>
                        <a href="{{ route('articles.show', $firstArticle->id) }}">
                            <img src="{{ $firstArticle->image_url }}" class="w-full h-full object-cover grayscale-[30%] group-hover:grayscale-0 group-hover:scale-105 transition duration-700 ease-in-out">
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-10 border-b border-white/10 pb-4">
                    <h3 class="font-display font-extrabold text-3xl uppercase tracking-tight text-white flex items-center">
                        <span class="text-gradient mr-3">///</span> The Latest
                    </h3>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest px-3 py-1 rounded-full border border-white/10 bg-galaxy-card/50">Cosmic Archive 2026</span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($articles->skip(1) as $article)
                    <div class="bg-galaxy-card/40 backdrop-blur-md rounded-xl border border-white/10 overflow-hidden group hover:shadow-galaxy-glow hover:border-galaxy-pink/50 transition duration-500 flex flex-col h-full relative">
                        <a href="{{ route('articles.show', $article->id) }}" class="block overflow-hidden h-52 relative">
                             <div class="absolute inset-0 bg-galaxy-dark/20 z-10 group-hover:bg-transparent transition"></div>
                            <img src="{{ $article->image_url }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </a>
                        <div class="p-6 flex flex-col flex-grow relative z-10">
                            <span class="text-galaxy-pink font-bold text-[10px] uppercase mb-3 tracking-widest">News Spot</span>
                            <a href="{{ route('articles.show', $article->id) }}">
                                <h2 class="text-xl font-bold font-display leading-tight mb-3 text-white group-hover:text-galaxy-cyan transition">
                                    {{ $article->title }}
                                </h2>
                            </a>
                            <p class="text-gray-400 text-sm line-clamp-3 font-light flex-grow">{{ $article->content }}</p>
                            <div class="pt-4 mt-4 border-t border-white/10 text-[10px] font-bold text-gray-500 uppercase tracking-widest flex justify-between">
                                <span>{{ \Carbon\Carbon::parse($article->published_at)->format('F d, Y') }}</span>
                                <span class="text-galaxy-purple">Read More &rarr;</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        @else
            <div class="bg-galaxy-card/30 border-2 border-dashed border-white/20 rounded-xl p-24 text-center backdrop-blur-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto text-galaxy-purple mb-4 opacity-50">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>
                <h2 class="text-2xl font-display font-extrabold text-gray-300 mb-2">Void Sector.</h2>
                <p class="text-gray-500 mb-6">No data transmissions detected.</p>
                <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-galaxy-cyan hover:underline px-4 py-2 border border-galaxy-cyan rounded-full hover:bg-galaxy-cyan/10 transition">Initialize Dashboard Signal</a>
            </div>
        @endif

    </main>

    <footer class="bg-[#050508] text-white py-16 mt-12 text-center border-t border-white/5 relative overflow-hidden">
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[500px] h-[200px] bg-galaxy-purple/20 filter blur-[100px] opacity-30 pointer-events-none"></div>
        
        <h2 class="text-3xl font-display font-black tracking-tighter mb-4 text-gradient">TECH VOGUE</h2>
        <p class="text-xs text-gray-500 font-bold uppercase tracking-[0.3em] relative z-10">&copy; 2026 Galactic Signals / Ujian Akhir Semester.</p>
    </footer>

</body>
</html>