<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpiniController extends Controller
{
    public function index()
    {
        // Ambil opini yang dipublish dengan kategori 'Opini' beserta tags
        $opini = Post::whereHas('category', function ($query) {
                $query->where('name', 'Opini');
            })
            ->where('is_published', 1)
            ->with('tags:id,name') // Ambil tag yang terkait
            ->latest()
            ->get();

        // Format response agar hanya mengirim nama tags
        $opini->each(function ($post) {
            $post->tags = $post->tags->pluck('name'); // Ambil hanya nama tag
        });

        return response()->json($opini);
    }

    public function show($slug)
    {
        // Ambil opini berdasarkan slug yang dipublish beserta tags
        $opini = Post::where('slug', $slug)
            ->where('is_published', 1)
            ->with('tags:id,name')
            ->firstOrFail();

        // Tambah jumlah kunjungan
        $opini->increment('visits');

        // Format response agar hanya mengirim nama tags
        $opini->tags = $opini->tags->pluck('name');

        return response()->json($opini);
    }
}
