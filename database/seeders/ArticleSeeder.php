<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'The Future of Generative AI',
            'content' => 'AI mengubah segalanya. Dari koding hingga seni...',
            'author' => 'Dr. Alan Turing',
            'published_at' => Carbon::now(),
            'image_url' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=800'
        ]);
        
        Article::create([
            'title' => 'Quantum Computing Breakthrough',
            'content' => 'Komputer kuantum Google mencapai supremasi baru...',
            'author' => 'Sundar Pichai',
            'published_at' => Carbon::now()->subDays(1),
            'image_url' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&q=80&w=800'
        ]);
    }
}