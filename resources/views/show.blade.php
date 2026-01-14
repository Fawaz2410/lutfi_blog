<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} - TECH VOGUE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700;800&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        display: ['"Manrope"', 'sans-serif'],
                    },
                    colors: {
                        'verge-pink': '#e20074',   /* Pink Khas Verge */
                        'verge-purple': '#562ea6', /* Ungu Khas Verge */
                        'verge-bg': '#f5f5f5',     /* Background Abu-abu */
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom Link Style ala The Verge */
        .prose a {
            color: black;
            font-weight: 700;
            text-decoration: none;
            box-shadow: inset 0 -2px 0 #e20074; /* Garis bawah pink */
            transition: all 0.2s ease;
        }
        .prose a:hover {
            background-color: #e20074;
            color: white;
            box-shadow: none;
        }
        /* Drop Cap */
        .drop-cap {
            float: left;
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-size: 4rem;
            line-height: 0.8;
            margin-right: 0.5rem;
            margin-top: 0.2rem;
        }
    </style>
</head>

<body class="bg-verge-bg text-gray-900 font-sans antialiased">

    <nav class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-screen-xl mx-auto px-4 md:px-6 h-16 flex justify-between items-center">
            <a href="{{ route('home') }}" class="group flex items-center space-x-2">
                <div class="w-8 h-8 bg-black text-white flex items-center justify-center font-display font-black text-xl rounded group-hover:bg-verge-pink transition">V</div>
                <span class="font-display font-extrabold text-xl tracking-tighter group-hover:text-verge-pink transition">TECH VOGUE</span>
            </a>

            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-black hidden md:block">Stories</a>
                <a href="{{ route('home') }}" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-black hidden md:block">Reviews</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-xs bg-black text-white px-3 py-2 rounded font-bold uppercase tracking-wide hover:bg-verge-pink transition">Admin</a>
                @else
                    <a href="{{ route('login') }}" class="text-xs border border-gray-300 px-3 py-2 rounded font-bold uppercase tracking-wide hover:border-black transition">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="max-w-screen-xl mx-auto px-4 md:px-6 py-8">
        
        <header class="max-w-4xl mx-auto text-center mb-10">
            <span class="inline-block py-1 px-3 rounded-full bg-verge-pink/10 text-verge-pink font-bold text-xs uppercase tracking-widest mb-4">
                Technology
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-extrabold leading-tight tracking-tight text-black mb-6">
                {{ $article->title }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-500 font-medium leading-relaxed max-w-2xl mx-auto">
                {{ Str::limit($article->content, 120) }}
            </p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <main class="lg:col-span-8">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    
                    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100 bg-gray-50/50">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-verge-pink to-verge-purple flex items-center justify-center text-white font-bold">
                                {{ substr($article->author, 0, 1) }}
                            </div>
                            <div class="leading-tight">
                                <p class="text-xs font-bold uppercase text-gray-400">By</p>
                                <p class="text-sm font-bold text-black">{{ $article->author }}</p>
                            </div>
                        </div>
                        <div class="text-right leading-tight">
                            <p class="text-xs font-bold uppercase text-gray-400">Published</p>
                            <p class="text-sm font-bold text-black">{{ \Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-auto object-cover max-h-[500px]">

                    <div class="p-8 md:p-12">
                        <article class="prose prose-lg max-w-none text-gray-800 font-sans leading-loose">
                            <span class="drop-cap">{{ substr($article->content, 0, 1) }}</span>
                            <p>{{ substr($article->content, 1) }}</p>
                            
                            <h3>Why It Matters</h3>
                            <p>Di dunia teknologi yang terus berkembang, memahami perubahan versi adalah kunci. <a href="#">Lihat sejarah lengkap pembaruan di sini</a>. Kami melihat tren baru dalam pengembangan perangkat lunak yang mengutamakan kecepatan dan keamanan.</p>
                            <p>Seperti yang dilaporkan sebelumnya, pergeseran paradigma ini membawa dampak besar bagi konsumen.</p>
                        </article>

                        <div class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between">
                            <span class="font-bold text-xs uppercase tracking-widest text-gray-400">Share this story</span>
                            <div class="flex space-x-2">
                                <button class="w-8 h-8 rounded-full bg-gray-100 hover:bg-[#1877F2] hover:text-white transition flex items-center justify-center font-bold">f</button>
                                <button class="w-8 h-8 rounded-full bg-gray-100 hover:bg-[#1DA1F2] hover:text-white transition flex items-center justify-center font-bold">t</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <aside class="lg:col-span-4 space-y-8">
                
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 sticky top-24">
                    <h3 class="font-display font-extrabold text-lg uppercase tracking-tight mb-6 border-b-4 border-black pb-2">
                        Most Popular
                    </h3>
                    
                    <ul class="space-y-6">
                        <li class="group cursor-pointer flex gap-4 items-start">
                            <span class="text-verge-pink font-display font-black text-3xl leading-none opacity-80">01</span>
                            <div>
                                <h4 class="font-bold text-base leading-snug group-hover:text-verge-purple transition">
                                    Why the next iPhone might fold in half
                                </h4>
                                <span class="text-xs text-gray-400 font-bold mt-1 block">22 Comments</span>
                            </div>
                        </li>
                        <li class="group cursor-pointer flex gap-4 items-start">
                            <span class="text-gray-300 font-display font-black text-3xl leading-none">02</span>
                            <div>
                                <h4 class="font-bold text-base leading-snug group-hover:text-verge-purple transition">
                                    Tesla's new software update explained
                                </h4>
                            </div>
                        </li>
                        <li class="group cursor-pointer flex gap-4 items-start">
                            <span class="text-gray-300 font-display font-black text-3xl leading-none">03</span>
                            <div>
                                <h4 class="font-bold text-base leading-snug group-hover:text-verge-purple transition">
                                    The best gaming laptops of 2026
                                </h4>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-8 bg-gray-100 p-8 rounded text-center border border-gray-200">
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-2">Advertisement</span>
                        <div class="font-display font-black text-2xl text-gray-300">AD SPACE</div>
                    </div>
                </div>

            </aside>

        </div>
    </div>

    <footer class="bg-black text-white py-16 mt-12">
        <div class="max-w-screen-xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-display font-extrabold tracking-tighter mb-4 hover:text-verge-pink transition cursor-pointer">TECH VOGUE</h2>
            <div class="flex justify-center space-x-6 text-sm font-bold text-gray-500 mb-8">
                <a href="#" class="hover:text-white">Terms</a>
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Ethics</a>
                <a href="#" class="hover:text-white">Contact</a>
            </div>
            <p class="text-gray-600 text-xs uppercase tracking-widest">&copy; 2026 Tech Vogue Media / Ujian Akhir Semester</p>
        </div>
    </footer>

</body>
</html>