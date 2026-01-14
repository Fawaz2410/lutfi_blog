<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat Akun Admin dengan Password
        User::factory()->create([
            'name' => 'Admin Tech',
            'email' => 'admin@techvogue.com',
            // Password di-hash menggunakan bcrypt
            'password' => bcrypt('password123'), 
        ]);

        // 2. Memanggil ArticleSeeder (Agar berita teknologi muncul)
        $this->call([
            ArticleSeeder::class,
        ]);
    }
}
