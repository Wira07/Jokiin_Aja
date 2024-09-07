<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function show($id)
    {
        // Data artikel untuk dicocokkan dengan ID
        $articles = [
            1 => [
                'title' => 'Pengaruh Teknologi Terhadap Pendidikan di Era Digital',
                'author' => 'Wira Sukma Saputra',
                'date' => '10 January 2024',
                'content' => 'Teknologi telah mengubah hampir setiap aspek kehidupan kita, termasuk pendidikan...',
            ],
            2 => [
                'title' => 'Pemrograman Web: Mengapa HTML, CSS, dan JavaScript Masih Penting',
                'author' => 'Wira Sukma Saputra',
                'date' => '15 February 2024',
                'content' => 'Dalam era di mana framework modern seperti React, Vue, dan Angular mendominasi...',
            ],
            3 => [
                'title' => 'Keamanan Data di Era Digital: Tantangan dan Solusi',
                'author' => 'Wira Sukma Saputra',
                'date' => '20 March 2024',
                'content' => 'Dengan semakin banyaknya data pribadi yang disimpan secara digital, keamanan data...',
            ],
        ];

        if (!array_key_exists($id, $articles)) {
            abort(404);
        }

        // Kirim data artikel ke view
        return view('blog_detail', [
            'title' => $articles[$id]['title'],
            'article' => $articles[$id]
        ]);
    }
}
