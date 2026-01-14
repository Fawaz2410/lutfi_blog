<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // 1. Fungsi INDEX (Untuk Halaman Depan / Route '/')
    public function index() {
        // Ambil data terbaru dulu
        $articles = Article::orderBy('published_at', 'desc')->get();
        // Kirim ke view 'welcome'
        return view('welcome', compact('articles'));
    }

    // 2. Fungsi ADMIN (Untuk Dashboard / Route '/dashboard')
    public function admin() {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('articles'));
    }

    // 3. Fungsi STORE (Untuk Simpan Data / Route '/articles')
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image_url' => 'required|url',
            'published_at' => 'required|date',
        ]);

        Article::create($data);

        return redirect()->route('dashboard')->with('success', 'Artikel berhasil ditambahkan!');
    }
// ... fungsi store sebelumnya ...

    // 4. Fungsi EDIT (Menampilkan Form dengan Data Lama)
    public function edit(Article $article) {
        return view('edit', compact('article'));
    }

    // 5. Fungsi UPDATE (Menyimpan Perubahan)
    public function update(Request $request, Article $article) {
        // Validasi input (sama seperti store)
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image_url' => 'required|url',
            'published_at' => 'required|date',
        ]);

        // Update data di database
        $article->update($data);

        // Kembali ke dashboard
        return redirect()->route('dashboard')->with('success', 'Artikel berhasil diperbarui!');
    }
public function show(Article $article) {
        return view('show', compact('article'));
    }
}
