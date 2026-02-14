<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ThumbnailController;

class SingleTravelController extends Controller
{
    public function __invoke($originName, $destinationName, $originId, $destinationId)
    {


        $origin = location($originId, $originName);
        $destination = location($destinationId, $destinationName);

        if ($originId == $destinationId || !$origin || !$destination) {
            abort(404);
        }

        $dupliacateOrigin = district()
            ->filter(function ($district) use ($originName) {
                return Str::slug($district->name) === $originName;
            })->first();
        $origin = $dupliacateOrigin ?? $origin;

        $dupliacateDestination = district()
            ->filter(function ($district) use ($destinationName) {
                return Str::slug($district->name) === $destinationName;
            })->first();
        $destination = $dupliacateDestination ?? $destination;

        if ($origin->id == $destination->id) {
            abort(404);
        }

        if (request()->routeIs('travel.show.thumbnail')) {
            $thumbnail = new ThumbnailController;
            return $thumbnail(['Travel', Str::title($origin->name), Str::title($destination->name)]);
        }

        if ($origin->id != $originId || $destinationId != $destination->id) {
            return redirect()->route('travel.show', [
                'originName' => Str::slug($origin->name),
                'destinationName' => Str::slug($destination->name),
                'originId' => $origin->id,
                'destinationId' => $destination->id,
            ], 301);
        }

        $recomendation = collect([
            ...province()->random(4),
            ...regency()->random(6),
            ...district()->random(4)
        ]);



        $thumbnailUrl = route('travel.show.thumbnail', [
            'originName' => Str::slug($origin->name),
            'destinationName' => Str::slug($destination->name),
            'originId' => $origin->id,
            'destinationId' => $destination->id,
        ]);

        $travel = "Travel " . Str::title($origin->name) . " " . Str::title($destination->name);

        return view('pages.travel.single', [
            'page' => $travel,
            'title' => "Layanan $travel Nonstop 24 Jam",
            'description' => "$travel tersedia setiap hari dengan fasilitas antar-jemput door to door, tiket PP, harga terjangkau, jadwal fleksibel 24 jam, perjalanan via tol, dan bonus makanan ringan untuk kenyamanan Anda.",
            'origin' => $origin,
            'destination' => $destination,
            'recomendation' => $recomendation->whereNotIn('id', [$originId, $destinationId])->shuffle()->take(11),
            'thumbnail' => [
                'url' => $thumbnailUrl,
                'width' => 1600,
                'height' => 900,
                'alt' => $travel,
            ],
            'productSchema' => $this->productSchema($travel),
        ]);
    }

    /**
     * @param string $title
     */
    public function productSchema($title = "Travel")
    {
        return [
            'offers' => [
                'lowPrice' => 120000,
                'highPrice' => 399000,
            ],
            'reviewBody' => 'Pengalaman menggunakan layanan ' . $title . ' sangat memuaskan dan sangat kami rekomendasikan. Admin cepat merespons bahkan di tengah malam, dan driver sangat ramah serta profesional. Perjalanan terasa nyaman, armada ber-AC, dan waktu tempuh cepat berkat rute via tol. Layanan ini benar-benar memudahkan perjalanan kami.'
        ];
    }
}
