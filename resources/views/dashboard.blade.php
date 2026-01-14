<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-xl text-gray-800 leading-tight flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2 text-black">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
                </svg>
                DASHBOARD ADMIN
            </h2>
            <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-bold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-black hover:text-white focus:outline-none transition ease-in-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
                Lihat Blog Utama
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-indigo-600 p-6 flex items-center">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Selamat Datang,</p>
                        <p class="text-lg font-bold text-gray-900">{{ Auth::user()->name }}</p>
                        <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10 mt-1">
                            ADMINISTRATOR
                        </span>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-green-600 p-6 flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-2.176-5.047l-3.24-3.24-4.89 4.89a.75.75 0 1 1-1.06-1.06l5.42-5.42 1.768 1.768 3.586-3.586a3 3 0 0 1 4.242 4.243l-3.586 3.586.308.307a.75.75 0 1 1-1.06 1.06l-.41-.41-5.122 5.122A3 3 0 0 0 21.75 18V4.875C21.75 3.839 20.91 3 19.875 3H4.125Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Artikel</p>
                        <p class="text-3xl font-black text-gray-900">{{ $articles->count() }}</p>
                        <p class="text-xs text-gray-400">Postingan aktif</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-black p-6 flex items-center">
                    <div class="p-3 rounded-full bg-gray-100 text-black mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Pembaruan Terakhir</p>
                        <p class="text-lg font-bold text-gray-900">
                            {{ $articles->first() ? \Carbon\Carbon::parse($articles->first()->updated_at)->format('d M Y') : '-' }}
                        </p>
                        <p class="text-xs text-gray-400">System Ready</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="bg-black px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-white tracking-widest uppercase">
                        + Buat Artikel Baru
                    </h3>
                </div>
                
                <div class="p-8">
                    <form action="{{ route('articles.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">JUDUL ARTIKEL</label>
                            <input type="text" name="title" placeholder="Masukkan judul berita teknologi..." 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-black focus:ring-black transition" required>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">ISI KONTEN</label>
                            <textarea name="content" rows="4" placeholder="Tuliskan detail berita..." 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-black focus:ring-black transition" required></textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">PENULIS</label>
                                <input type="text" name="author" placeholder="Nama Penulis" value="{{ Auth::user()->name }}"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-black focus:ring-black transition" required>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">TANGGAL PUBLIKASI</label>
                                <input type="date" name="published_at" 
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-black focus:ring-black transition" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">URL GAMBAR</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-100 text-gray-500 text-sm">Link</span>
                                <input type="url" name="image_url" placeholder="https://..." 
                                    class="flex-1 block w-full border-gray-300 rounded-none rounded-r-md shadow-sm focus:border-black focus:ring-black transition" required>
                            </div>
                        </div>

                        <div class="flex justify-end pt-4">
                            <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold py-3 px-6 rounded shadow-lg transform hover:-translate-y-0.5 transition duration-200 flex items-center">
                                PUBLISH DATA
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-l-4 border-black pl-3">
                        Arsip Data Artikel
                    </h3>
                    
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-black text-gray-500 uppercase tracking-wider">Judul</th>
                                    <th class="px-6 py-3 text-left text-xs font-black text-gray-500 uppercase tracking-wider">Penulis</th>
                                    <th class="px-6 py-3 text-left text-xs font-black text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-center text-xs font-black text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($articles as $article)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-bold text-gray-900">{{ Str::limit($article->title, 40) }}</div>
                                        <div class="text-xs text-gray-500">{{ Str::limit($article->content, 30) }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold mr-2">
                                                {{ substr($article->author, 0, 1) }}
                                            </div>
                                            <div class="text-sm text-gray-600 font-medium">{{ $article->author }}</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                                            Published: {{ \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <a href="{{ route('articles.edit', $article->id) }}" class="text-indigo-600 hover:text-indigo-900 font-bold bg-indigo-50 px-4 py-1 rounded hover:bg-indigo-100 transition">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>