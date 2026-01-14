# Tech Vogue - Galaxy Edition (UAS Pemrograman Internet)

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=for-the-badge&logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql)

**Tech Vogue Archive** adalah aplikasi web berbasis Blog yang dikembangkan untuk memenuhi tugas **Ujian Akhir Semester (UAS)** mata kuliah Pemrograman Internet.

Aplikasi ini dibangun menggunakan Framework **Laravel** dengan menerapkan arsitektur **MVC (Model-View-Controller)**. Desain antarmuka mengusung tema *"Galaxy / Deep Space"* yang modern, terinspirasi dari gaya visual media teknologi *The Verge*, lengkap dengan fitur Glassmorphism dan Neon Accents.

---

## 🚀 Fitur Utama

1.  **Arsitektur MVC:** Struktur kode terpisah rapi antara Model (Database), View (Blade), dan Controller (Logika).
2.  **Manajemen Artikel (CRUD):**
    * **Create:** Menulis artikel baru dengan judul, isi, penulis, tanggal publikasi, dan gambar.
    * **Read:** Menampilkan daftar artikel di Dashboard dan Halaman Depan.
    * **Update:** Mengedit konten artikel yang sudah ada.
    * **Delete:** Menghapus artikel dari database.
3.  **Sistem Autentikasi:** Login aman untuk Admin menggunakan **Laravel Breeze**. Halaman dashboard terlindungi (hanya bisa diakses setelah login).
4.  **Desain UI Premium (Galaxy Theme):**
    * **Public View:** Halaman depan responsif dengan *Hero Section*, *Grid Layout*, dan *Running Text* (Marquee).
    * **Detail View:** Halaman baca artikel dengan tipografi editorial (*Manrope* & *Inter*) dan sidebar *sticky*.
    * **Dark Mode:** Latar belakang *Deep Space* dengan efek *Glow* dan kartu transparan (*Glassmorphism*).
5.  **Database Seeder:** Data dummy otomatis terisi (User Admin & Artikel Contoh) sekali perintah.

---

## 🛠️ Teknologi yang Digunakan

* **Framework:** Laravel 10.x / 11.x
* **Language:** PHP 8.1+
* **Database:** MySQL
* **Frontend:** Blade Template & Tailwind CSS (CDN)
* **Auth:** Laravel Breeze

---

## ⚙️ Panduan Instalasi (Cara Menjalankan)

Ikuti langkah-langkah berikut untuk menjalankan project ini di komputer lokal Anda:

### 1. Clone Repository
Salin repository ini ke folder lokal Anda.

```bash
git clone [https://github.com/Fawaz2410/lutfi_blog](https://github.com/Fawaz2410/lutfi_blog)
cd lutfi-blog
```

### 2. Install Dependencies
Install pustaka PHP dan aset frontend (pastikan folder vendor tidak ikut di-upload manual).

```bash
composer install
npm install
npm run build
```

### 3. Konfigurasi Environment (.env)
Duplikat file konfigurasi contoh menjadi file environment aktif.

```bash
cp .env.example .env
Buka file `.env` dan atur koneksi database Anda (pastikan database sudah dibuat di phpMyAdmin):
```

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uas_tech_blog
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Key & Migrate Database
Generate application key dan jalankan migrasi beserta seeder untuk mengisi data awal.

Bash

php artisan key:generate
php artisan migrate:fresh --seed

### 5. Jalankan Server
Jalankan server lokal Laravel.

```Bash

php artisan serve
Buka browser dan akses alamat: http://localhost:8000
```

### 🔐 Akun Login Admin
Gunakan kredensial berikut untuk masuk ke Dashboard dan mengelola artikel:

- Email: admin@techvogue.com
- Password: password123

### 📂 Struktur Database
- Aplikasi ini menggunakan tabel utama:
- users: Menyimpan data autentikasi admin.
- articles: Menyimpan data berita teknologi dengan atribut:
- id (Primary Key)
- title (String) - Judul Artikel
- content (Text) - Isi Artikel
- author (String) - Penulis
- published_at (Date) - Tanggal Terbit
- image_url (String) - Link Gambar
- timestamps (Created_at & Updated_at)


### 👤 Identitas Mahasiswa
- Nama: Lutfi Anjar
- NIM: C2383207001
- Kelas: PTI 5A
- Prodi: Pendidikan Teknologi Informasi
- Universitas: Universitas Muhammadiyah Tasikmalaya
- Mata Kuliah: Pemrograman Internet

Project ini dibuat semata-mata untuk keperluan ujian akademis dan pembelajaran framework Laravel.
