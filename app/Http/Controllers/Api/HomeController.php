<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Iklan;
use App\Models\Video;
use Spatie\Tags\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 2 post terbaru yang dipublish beserta author
        $post_terkini = Post::where('is_published', 1)
            ->with('author:id,name') // Ambil author dengan hanya ID & nama
            ->latest()
            ->take(2)
            ->get();

        // Ambil 2 berita terbaru dengan kategori 'Berita' dan status published
        $berita_terkini = Post::whereHas('category', function ($query) {
                $query->where('name', 'Berita');
            })
            ->where('is_published', 1)
            ->with('author:id,name') // Sertakan author
            ->latest()
            ->take(2)
            ->get();

        // Ambil 2 opini terbaru dengan kategori 'Opini' dan status published
        $opini_terkini = Post::whereHas('category', function ($query) {
                $query->where('name', 'Opini');
            })
            ->where('is_published', 1)
            ->with('author:id,name')
            ->latest()
            ->take(2)
            ->get();

        // Ambil 2 podcast terbaru dengan kategori 'Podcast' dan status published
        $podcast_terkini = Post::whereHas('category', function ($query) {
                $query->where('name', 'Podcast');
            })
            ->where('is_published', 1)
            ->with('author:id,name')
            ->latest()
            ->take(2)
            ->get();

        // Ambil 5 post dengan jumlah visits terbanyak
        $post_populer = Post::where('is_published', 1)
            ->with('author:id,name')
            ->orderBy('visits', 'desc')
            ->take(5)
            ->get();

        // Ambil 5 post terbaru yang dipublish untuk messages
        $messages = Post::where('is_published', 1)
            ->latest()
            ->take(5)
            ->pluck('title')
            ->toArray();

        // Ambil 2 iklan terbaru
        $iklan = Iklan::latest()->take(2)->get();

        // Ambil 3 video terbaru
        $vidio = Video::latest()->take(3)->get();

        // Ambil semua tag yang digunakan dalam post yang sudah dipublish
        $usedTags = Tag::whereIn('id', function ($query) {
            $query->select('tag_id')
                ->from('taggables')
                ->whereIn('taggable_id', Post::where('is_published', 1)->pluck('id'))
                ->where('taggable_type', Post::class);
        })->get();

        // Return all data as a JSON response
        return response()->json([
            'post_terkini' => $post_terkini,
            'berita_terkini' => $berita_terkini,
            'opini_terkini' => $opini_terkini,
            'podcast_terkini' => $podcast_terkini,
            'post_populer' => $post_populer,
            'messages' => $messages,
            'iklan' => $iklan,
            'vidio' => $vidio,
            'used_tags' => $usedTags, // Mengirimkan tag yang sudah digunakan
        ]);
    }
}
