<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Data artikel dengan konten yang lebih panjang dan relevan
        $articles = [
            [
                'id' => 1,
                'title' => 'Pengaruh Teknologi Terhadap Pendidikan di Era Digital',
                'author' => 'Wira Sukma Saputra',
                'date' => '10 January 2024',
                'content' => 'Teknologi telah mengubah hampir setiap aspek kehidupan kita, termasuk pendidikan. Di era digital saat ini, cara kita belajar dan mengakses informasi mengalami transformasi besar. Dari kelas tradisional ke pembelajaran daring, teknologi telah memberikan kemudahan yang luar biasa dalam memperluas akses pendidikan. Namun, hal ini juga menghadirkan tantangan baru seperti ketergantungan pada perangkat elektronik, kesenjangan akses internet, dan tantangan bagi pendidik dalam menyesuaikan metode pengajaran mereka. Dalam artikel ini, kita akan mengeksplorasi dampak positif dan negatif dari penggunaan teknologi dalam pendidikan, serta bagaimana kita dapat memaksimalkan manfaatnya tanpa mengorbankan kualitas pembelajaran.',
                'link' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Pemrograman Web: Mengapa HTML, CSS, dan JavaScript Masih Penting',
                'author' => 'Wira Sukma Saputra',
                'date' => '15 February 2024',
                'content' => 'Dalam era di mana framework modern seperti React, Vue, dan Angular mendominasi dunia pengembangan web, seringkali kita lupa bahwa pondasi dari web development tetap pada HTML, CSS, dan JavaScript. Ketiga teknologi ini adalah dasar dari setiap halaman web yang kita kunjungi setiap hari. HTML menyediakan struktur, CSS mengatur tampilan, dan JavaScript memungkinkan interaktivitas. Meskipun banyak framework dan library yang mempermudah pengembangan, pemahaman mendalam tentang ketiga teknologi ini sangat penting bagi siapa pun yang ingin menjadi pengembang web yang handal. Artikel ini akan membahas mengapa pemahaman yang kuat tentang HTML, CSS, dan JavaScript tetap relevan di era teknologi modern.',
                'link' => '#'
            ],
            [
                'id' => 3,
                'title' => 'Keamanan Data di Era Digital: Tantangan dan Solusi',
                'author' => 'Wira Sukma Saputra',
                'date' => '20 March 2024',
                'content' => 'Dengan semakin banyaknya data pribadi yang disimpan secara digital, keamanan data menjadi salah satu isu yang paling penting di era modern. Banyak organisasi besar telah menjadi korban pelanggaran data, yang tidak hanya merugikan secara finansial, tetapi juga menurunkan reputasi mereka di mata publik. Penggunaan enkripsi, autentikasi dua faktor, dan firewall adalah beberapa solusi yang sering digunakan untuk melindungi data, tetapi tantangan keamanan terus berkembang seiring dengan perkembangan teknologi baru seperti kecerdasan buatan dan Internet of Things (IoT). Artikel ini akan mengeksplorasi beberapa tantangan utama dalam menjaga keamanan data dan solusi terbaik untuk melindungi informasi pribadi dari ancaman yang terus berubah.',
                'link' => '#'
            ],
        ];

        return view('blog', [
            'title' => 'Blog',
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        // Data artikel
        $articles = [
            [
                'id' => 1,
                'title' => 'Pengaruh Teknologi Terhadap Pendidikan di Era Digital',
                'slug' => 'pengaruh-teknologi-terhadap-pendidikan',
                'author' => 'Wira Sukma Saputra',
                'date' => '10 January 2024',
                'content' => 'Teknologi telah mengubah hampir setiap aspek kehidupan kita, termasuk pendidikan...',
            ],
            [
                'id' => 2,
                'title' => 'Pemrograman Web: Mengapa HTML, CSS, dan JavaScript Masih Penting',
                'slug' => 'pemrograman-web-mengapa-html-css-dan-javascript-masih-penting',
                'author' => 'Wira Sukma Saputra',
                'date' => '15 February 2024',
                'content' => 'Dalam era di mana framework modern seperti React, Vue, dan Angular mendominasi...',
            ],
        ];

        // Mencari artikel berdasarkan slug
        $article = collect($articles)->firstWhere('slug', $slug);

        if (!$article) {
            abort(404, 'Artikel tidak ditemukan');
        }

        // Mengirimkan data artikel ke view
        return view('blog_detail', [
            'title' => $article['title'],
            'article' => $article
        ]);
    }
}
