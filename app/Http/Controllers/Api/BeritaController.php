<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        // Ambil berita yang dipublish dengan kategori 'Berita' beserta tags
        $berita = Post::whereHas('category', function ($query) {
                $query->where('name', 'Berita');
            })
            ->where('is_published', 1)
            ->with('tags:id,name') // Ambil tag yang terkait
            ->latest()
            ->get();

        // Format response agar hanya mengirim nama tags
        $berita->each(function ($post) {
            $post->tags = $post->tags->pluck('name'); // Ambil hanya nama tag
        });

        return response()->json($berita);
    }

    public function show($slug)
    {
        // Ambil berita berdasarkan slug yang dipublish beserta tags
        $berita = Post::where('slug', $slug)
            ->where('is_published', 1)
            ->with('tags:id,name') // Ambil tags
            ->firstOrFail();

        // Tambah jumlah kunjungan
        $berita->increment('visits');

        // Format response agar hanya mengirim nama tags
        $berita->tags = $berita->tags->pluck('name');

        return response()->json($berita);
    }
}
