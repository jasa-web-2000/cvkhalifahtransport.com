@php
    $faq = [
        [
            'question' => 'Apakah <i>"' . web()->title . '"</i> Travel Terpercaya?',
            'answer' =>
                'Tentu! <i>"' .
                web()->title .
                '"</i> adalah layanan travel resmi yang berpengalaman dalam memenuhi berbagai kebutuhan transportasi untuk ' .
                web()->tagline .
                '. Dengan izin operasional lengkap dan tim profesional, kami menjamin perjalanan Anda aman, nyaman, dan selalu tepat waktu.',
        ],
        [
            'question' => 'Berapa Biaya Perjalanan?',
            'answer' =>
                'Harga perjalanan kami bergantung pada rute dan lokasi penjemputan atau tujuan. Kami selalu berusaha menawarkan tarif bersaing tanpa mengurangi kualitas layanan. Untuk info harga terkini dan promo aktif, silakan hubungi admin kami via WhatsApp.',
        ],
        [
            'question' => 'Jenis Mobil Travel Apa yang Tersedia?',
            'answer' =>
                'Kami memiliki berbagai jenis armada untuk kenyamanan perjalanan Anda. Semua kendaraan ber-AC dan rutin diservis. Pilihan armada meliputi Avanza, Xenia, Calya, Innova, Hiace, Elf Long, Elf Short, Luxio, Gran Max, Pregio, Travello, Mobilio, Ertiga, APV, Fortuner, Pajero Sport, dan lainnya.',
        ],
        [
            'question' => 'Di Mana Lokasi Garasi Travel?',
            'answer' =>
                'Garasi utama kami berada di ' .
                address()->streetAddress .
                '. Selain itu, kami bekerja sama dengan banyak mitra travel terpercaya di berbagai kota, sehingga layanan kami dapat menjangkau lebih banyak pelanggan dengan mudah.',
        ],
        [
            'question' => 'Bagaimana Cara Memesan Tiket?',
            'answer' =>
                'Proses pemesanan sangat mudah dan fleksibel. Anda bisa memesan langsung di lokasi atau melalui WhatsApp. Cukup berikan data penumpang serta detail penjemputan dan tujuan, tim kami akan segera memproses pesanan Anda.',
        ],
        [
            'question' => 'Apakah Bisa Reschedule atau Refund?',
            'answer' =>
                'Perubahan jadwal sebaiknya dilakukan minimal satu hari sebelum keberangkatan agar penyesuaian lancar. Untuk refund, kami memberikan pengembalian 100% sesuai ketentuan. Biasanya, kami tidak meminta DP saat pemesanan demi kenyamanan pelanggan.',
        ],
    ];

@endphp

<div class="bg-background-primary">

    <div class="my-container text-center py-20">
        <x-sub-heading subTitle='Pertanyaan Umum Seputar Travel'
            description='Temukan jawaban atas pertanyaan yang paling sering diajukan oleh pelanggan kami.' />

        <ul
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 md:gap-x-14 lg:gap-x-20 [&>li>div]:gap-x-3 [&>li>div]:flex [&>li>div]:items-start [&>li>div]:mb-5 [&_.icon-faq]:flex [&_.icon-faq]:items-center [&_.icon-faq]:justify-center [&_.icon-faq]:p-3 [&_.icon-faq]:rounded-full [&_.icon-faq]:simple-gradient [&_.icon-faq]:shadow-md [&_.icon-faq]:text-text-description-white [&_svg]:size-6">
            @foreach ($faq as $item)
                <li class="text-left mb-10">
                    <div>
                        <div class="icon-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>

                        </div>
                        <div class="bg-background-secondary rounded-md py-5 px-7 w-full flex items-center">
                            <h3 class="">{!! $item['question'] !!}</h3>
                        </div>
                    </div>

                    <div>
                        <div class="bg-primary/5 border-b-8 border-primary rounded-md py-5 px-7 w-full">
                            <p class="text-text-description-black text-justify">{!! $item['answer'] !!}</p>
                        </div>
                        <div class="icon-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                            </svg>

                        </div>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>

</div>
