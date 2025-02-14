<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PodcastController extends Controller
{
    public function index()
    {
        // Ambil podcast yang dipublish dengan kategori 'Podcast' beserta tags
        $podcast = Post::whereHas('category', function ($query) {
                $query->where('name', 'Podcast');
            })
            ->where('is_published', 1)
            ->with('tags:id,name') // Ambil tag yang terkait
            ->latest()
            ->get();

        // Format response agar hanya mengirim nama tags
        $podcast->each(function ($post) {
            $post->tags = $post->tags->pluck('name'); // Ambil hanya nama tag
        });

        return response()->json($podcast);
    }

    public function show($slug)
    {
        // Ambil podcast berdasarkan slug yang dipublish beserta tags
        $podcast = Post::where('slug', $slug)
            ->where('is_published', 1)
            ->with('tags:id,name') // Ambil tags
            ->firstOrFail();

        // Tambah jumlah kunjungan
        $podcast->increment('visits');

        // Format response agar hanya mengirim nama tags
        $podcast->tags = $podcast->tags->pluck('name');

        return response()->json($podcast);
    }
}
