<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'page' => 'Beranda',
            'title' => 'Travel seluruh Sumatra dengan tiket murah',
            'description' => 'Rekomendasi Travel ' . web()->tagline . ' Dengan pengalaman di seluruh rute Sumatra, kami siap mendukung perjalanan Anda dengan maksimal.',
            // 'thumbnail' => [
            //     'url' => asset(web()->defaultLogo),
            //     'width' => 672,
            //     'height' => 672,
            //     'alt' => "Logo " . web()->title,
            // ],
        ]);
    }
}
