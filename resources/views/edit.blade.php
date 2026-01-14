<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Edit Artikel</h2>
                    <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">Kembali</a>
                </div>

                <form action="{{ route('articles.update', $article->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT') 

                    <div>
                        <label class="block font-bold mb-1">Judul</label>
                        <input type="text" name="title" value="{{ old('title', $article->title) }}" class="w-full border p-2 rounded" required>
                    </div>

                    <div>
                        <label class="block font-bold mb-1">Isi Artikel</label>
                        <textarea name="content" rows="5" class="w-full border p-2 rounded" required>{{ old('content', $article->content) }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-bold mb-1">Penulis</label>
                            <input type="text" name="author" value="{{ old('author', $article->author) }}" class="border p-2 rounded w-full" required>
                        </div>
                        <div>
                            <label class="block font-bold mb-1">Tanggal Publikasi</label>
                            <input type="date" name="published_at" value="{{ old('published_at', $article->published_at) }}" class="border p-2 rounded w-full" required>
                        </div>
                    </div>

                    <div>
                        <label class="block font-bold mb-1">Link Gambar (URL)</label>
                        <input type="url" name="image_url" value="{{ old('image_url', $article->image_url) }}" class="w-full border p-2 rounded" required>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-800 font-bold">
                        Update Artikel
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>