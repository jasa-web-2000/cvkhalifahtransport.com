@php
    $originName = \Illuminate\Support\Str::title($origin->name);
    $destinationName = \Illuminate\Support\Str::title($destination->name);

    $testimonial = [
        [developer()->name, $productSchema['reviewBody']],
        ['Tati Winah', 'Sempat 3/4 kali pulang pergi pake jasa ini, nyaman terasa cepat juga.'],
        [
            'Mulyanti',
            'Saya pernah menggunakan ' .
            web()->title .
            ', arah balik ke ' .
            $destinationName .
            '. Dengan demikian, di lain kesempatan, saya akan menggunakan Travel ini kembali, bersama dengan saudara. Pelayanannya ramah & supir pun demikian, bawa penumpangnya juga dengan nyaman. Selamat sampai tujuan.',
        ],
        [
            'Agus Ferdinand',
            'Perjalanan Travel ' .
            $destinationName .
            ' ' .
            $originName .
            ' sangat memuaskan, berangkatnya tepat waktu dan driver jemput saya langsung dari rumah. Tersedia kursi di dalam dan luar untuk menunggu penumpang. Harga tiket terjangkau dan pelayanan juga oke',
        ],
        [
            'Karina',
            'Saya telah pesan carter di sini. Sangat rekomendasi!! Walaupun pesannya mendadak tetap dilayani dengan sat set sat set.',
        ],
        [
            'Sinta Rona',
            'Driver travel ' .
            $destinationName .
            ' sangat profesional dan berpengalaman. Kami dibantu sampai tujuan dan diantar ke tempat wisata yang kami inginkan. Selama perjalanan juga kami mendapatkan bonus makan dan minum.',
        ],
    ];

    $gallery = [
        [asset('images/gallery/11.jpg'), 'Galeri Mobil travel'],
        [asset('images/gallery/1.jpg'), 'Mobil ertiga'],
        [asset('images/gallery/3.jpg'), 'Mobil ' . $page],
        [asset('images/gallery/7.jpg'), 'Armada Travel ' . $destinationName . ' ' . $originName],
    ];

    function paramsSingleTravel($originName, $destinationName, $originId, $destinationId)
    {
        return route('travel.show', [
            'originName' => \Illuminate\Support\Str::slug($originName),
            'destinationName' => \Illuminate\Support\Str::slug($destinationName),
            'originId' => $originId,
            'destinationId' => $destinationId,
        ]);
    }
@endphp

<div class="my-container">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-x-10 lg:gap-x-20">
        <div class="md:col-span-8 ">
            <img onclick="window.open('{{ whatsapp() }}', '_blank')" src="{{ $thumbnail['url'] }}"
                class="cursor-pointer rounded-md shadow-md" title="{{ $page }}" alt="{{ $thumbnail['alt'] }}"
                width="{{ $thumbnail['width'] }}" height="{{ $thumbnail['height'] }}">
        </div>


        <div
            class="md:sticky md:top-[60px] h-fit md:col-span-4 p-3 sm:p-5 bg-background-primary rounded-md shadow-md border-b-8 border-primary [&_*]:!text-center">
            <p>Pesan <strong>{{ $page }} sekarang juga!</strong></p>

            <div>
                <a target="_blank" href="{{ whatsapp() }}" rel="nofollow noindex" title="Pesan travel"
                    class="btn-primary mt-5 !text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                    Pesan travel
                </a>
            </div>
        </div>

        <div class="md:col-span-8" id="detail">
            <p>
                Perjalanan <a href="{{ url()->current() }}"><strong>{{ $page }}</strong></a> selalu menyenangkan
                dan nyaman bersama kami.
                Kami menyediakan layanan travel berkualitas yang selalu menjadi pilihan terbaik.
                Anda tidak perlu khawatir, tim kami akan memandu setiap langkah dari pemesanan hingga tiba di tujuan.
                Bahkan, untuk kepulangan, cukup pesan ulang travel dan kami akan siap mengantar Anda kembali dengan
                mudah.
            </p>

            <p>
                Bagi banyak orang, travel reguler adalah solusi transportasi darat yang cepat, aman, hemat, dan nyaman.
                Ada banyak penyedia jasa travel dari {{ $originName }} ke {{ $destinationName }}, namun layanan kami
                dirancang khusus agar paling sesuai dengan kebutuhan Anda.
                Dengan berbagai keunggulan dan fasilitas yang kami tawarkan, perjalanan Anda akan lebih mudah, nyaman,
                dan menyenangkan.
            </p>


            <h2>Informasi Lengkap {{ $page }}</h2>

            <p>
                Hari ini, tepatnya {{ \Carbon\Carbon::parse(now())->translatedFormat('l, d F Y') }}, kami siap menerima
                pemesanan travel reguler Anda.
                Rute dari {{ $originName }} ke {{ $destinationName }} maupun sebaliknya akan tetap berangkat, bahkan
                jika hanya ada satu penumpang.
            </p>

            <p>
                Agar perjalanan Anda lebih nyaman dan mudah, berikut informasi lengkap tentang layanan travel unggulan
                kami:
            </p>



            <h3>Tarif Tiket Travel</h3>

            <p>
                Untuk rute dari {{ $originName }} ke {{ $destinationName }}, harga tiket mulai dari
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['lowPrice'], in: 'IDR') }}</span>
                hingga
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['highPrice'], in: 'IDR') }}</span>
                per orang.
                Tarif ini termasuk sangat terjangkau dan dirancang untuk penumpang yang ingin hemat tanpa mengorbankan
                kenyamanan.
                Banyak pelanggan kami berasal dari kalangan pelajar dan pekerja, sehingga harga disesuaikan agar tetap
                bersahabat.
            </p>

            <p>
                Jika Anda merasa harga tersebut masih perlu penyesuaian, jangan ragu untuk berdiskusi dengan admin kami.
                Kami akan berusaha menemukan solusi terbaik agar perjalanan Anda tetap nyaman dan sesuai anggaran.
            </p>

            <h3>Jadwal Keberangkatan Travel</h3>

            <p>
                <a href="https://travelterdekat.web.id/travel/dari-{{ \Illuminate\Support\Str::slug($origin->name) }}/ke-{{ \Illuminate\Support\Str::slug($destination->name) }}/{{ $origin->id }}/{{ $destination->id }}"
                    target="_blank">{{ $page }}</a>
                tersedia setiap hari dengan jam keberangkatan yang fleksibel.
                Jika Anda ingin memilih jadwal khusus, sebaiknya hubungi admin kami langsung.
                Untuk keberangkatan reguler, waktu normal kami adalah:
            </p>


            <table>
                <thead>
                    <tr>
                        <th>Dari {{ $originName }} Ke {{ $destinationName }}</th>
                        <th>Dari {{ $destinationName }} Ke {{ $originName }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jam 08.00 WIB</td>
                        <td>Jam 06.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 10.00 WIB</td>
                        <td>Jam 10.30 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 13.00 WIB</td>
                        <td>Jam 13.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 15.00 WIB</td>
                        <td>Jam 15.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 20.00 WIB</td>
                        <td>Jam 21.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 23.00 WIB</td>
                        <td>Jam 23.30 WIB</td>
                    </tr>
                </tbody>
            </table>

            <p>
                Tersedia 6 sesi keberangkatan setiap hari, baik dari {{ $originName }} maupun untuk perjalanan pulang
                dari {{ $destinationName }}.
                Waktu keberangkatan bisa menyesuaikan kondisi lalu lintas, ketersediaan kendaraan, dan driver.
                Namun, kami pastikan armada selalu siap untuk mengantar Anda dengan aman dan nyaman.
            </p>

            <h3>Armada Travel yang Tersedia</h3>

            <p>
                Kami memahami bahwa kenyamanan perjalanan sangat dipengaruhi oleh jenis kendaraan.
                Oleh karena itu, kami menyediakan berbagai pilihan armada agar sesuai dengan preferensi dan kebutuhan
                Anda:
            </p>

            <ul>
                <li>Toyota Hiace</li>
                <li>Isuzu Elf Microbus</li>
                <li>Daihatsu Luxio</li>
                <li>Suzuki APV</li>
                <li>Maxus V80</li>
                <li>Daihatsu Gran Max Minibus</li>
                <li>Toyota Innova Zenix</li>
                <li>Nissan Serena</li>
                <li>Peugeot Traveller</li>
                <li>Hyundai H-1</li>
                <li>Toyota Alphard</li>
                <li>Toyota Avanza</li>
                <li>Daihatsu Xenia</li>
                <li>Mitsubishi Xpander</li>
                <li>Suzuki Ertiga</li>
                <li>Honda Mobilio</li>
                <li>Wuling Confero</li>
                <li>Kia Carnival</li>
                <li>Nissan Elgrand</li>
            </ul>


            <div class="grid grid-cols-1 min-[450px]:grid-cols-2 gap-3 min-[450px]:gap-5 mb-5">
                @foreach ($gallery as $item)
                    <a href="{{ whatsapp() }}"
                        class=" rounded-lg brightness-90 hover:brightness-100 overflow-hidden">
                        <figure class="relative">

                            <img class="aspect-video object-cover" src="{{ $item[0] }}"
                                alt="{{ $item[1] }}">
                            <figcaption
                                class="absolute pt-20 pb-2 bottom-0 right-0 w-full text-center bg-gradient-to-b from-black/40 to-black/80 text-text-description-white hover:text-text-description-white">
                                {{ $item[1] }}
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>

            <p>
                Semua kendaraan kami selalu dirawat secara rutin dan diservis secara berkala. Sebelum digunakan, mobil
                selalu dibersihkan dan siap untuk perjalanan.
                Selain itu, armada dilengkapi dengan bagasi luas dan pendingin udara (AC) untuk memastikan kenyamanan
                setiap penumpang selama perjalanan.
            </p>

            <h3>Fasilitas Travel yang Bisa Dinikmati</h3>

            <p>
                Keamanan dan kenyamanan penumpang dari {{ $originName }} ke {{ $destinationName }} adalah prioritas
                utama kami.
                Oleh karena itu, kami menyediakan berbagai fasilitas unggulan yang membuat perjalanan Anda lebih
                menyenangkan dan praktis.
            </p>

            <p>Berikut fasilitas yang dapat Anda nikmati:</p>

            <ul>
                <li>Layanan door to door (antar jemput langsung sesuai lokasi pilihan)</li>
                <li>Bonus makan dan minuman satu kali selama perjalanan</li>
                <li>Armada nyaman dan ber-AC</li>
                <li>Perjalanan via tol penuh tanpa biaya tambahan</li>
                <li>Bagasi gratis hingga 15kg</li>
            </ul>



            <h2>Agen Travel Terpercaya</h2>

            <p>
                Kami adalah agen travel <a href="{{ route('home') }}">{{ web()->title }}</a>, penyedia layanan
                {{ $page }}
                terbaik dan terpercaya di Sumatra. Dengan pengalaman lebih dari {{ date('Y') - 2020 }} tahun, kami siap
                mendukung perjalanan Anda di seluruh Pulau Sumatra. Saat ini, kami memiliki tim supir profesional dan
                mitra travel di berbagai kota, sehingga setiap perjalanan dapat dilayani dengan optimal.
            </p>

            <p>
                Bagi pecinta travel Sumatra, nama {{ web()->title }} pasti sudah dikenal.
                Kami melayani semua rute dengan penuh dedikasi, menyediakan perjalanan setiap hari dengan berbagai
                pilihan armada yang nyaman dan aman.
            </p>

            <p>Untuk rute ini, kami memiliki partner travel yang berpengalaman, yaitu CV. Idola Tebo Wisata. CV. Idola
                Tebo Wisata sangat rekomendasi untuk rute <a
                    href="https://cvidolatebowisata.com/travel/{{ \Illuminate\Support\Str::slug($origin->name) }}/{{ \Illuminate\Support\Str::slug($destination->name) }}/{{ $origin->id }}/{{ $destination->id }}"
                    target="_blank">{{ $page }}</a>.
            </p>

            <h3>Loket Travel {{ web()->title }}</h3>

            <p>
                Kami memiliki banyak cabang loket travel yang tersebar di berbagai daerah di Sumatra.
                Beberapa loket yang bisa Anda kunjungi antara lain:
            </p>

            <ul>
                <li>Loket utama: {{ address()->addressLocality }}</li>
                @if ($origin->id != 1702020)
                    <li>Loket cabang: {{ \Illuminate\Support\Str::title($origin->name) }}</li>
                @endif
                @if ($destination->id != 1702020)
                    <li>Loket cabang: {{ \Illuminate\Support\Str::title($destination->name) }}</li>
                @endif
                <li>Masih banyak loket lain di berbagai kota untuk kemudahan Anda!</li>
            </ul>

            <p>
                Saat ini, Anda tidak perlu datang ke loket fisik untuk memesan tiket.
                Cukup hubungi admin kami melalui WhatsApp di <a target="_blank" rel="nofollow noopener noreferrer"
                    href="tel:{{ phoneNumber(null, true) }}">{{ phoneNumber() }}</a>
                dan tiket travel Anda akan segera diproses dengan cepat dan aman.
            </p>


            <h3>Layanan Unggulan {{ web()->title }}</h3>

            <p>
                Kami berkomitmen menjadi solusi transportasi darat terbaik bagi masyarakat, khususnya di Pulau Sumatra.
                Untuk itu, kami terus mengembangkan berbagai layanan agar perjalanan Anda semakin mudah dan nyaman.
                Selain travel reguler, berikut beberapa pilihan layanan yang bisa Anda nikmati:
            </p>

            <ul>
                <li>Travel Reguler Antar Kota</li>
                <li>Carter Sekali Jalan (Drop)</li>
                <li>Carter Pulang-Pergi (PP)</li>
                <li>Antar Jemput Bandara, Stasiun, Terminal, atau Pelabuhan</li>
                <li>Paket Wisata dan Tour</li>
                <li>Sewa Mobil dengan atau tanpa Supir</li>
                <li>Pengiriman Dokumen atau Paket Kilat</li>
            </ul>



            <h3>Rute Travel Lain yang Tersedia</h3>

            <p>
                Selain rute {{ $page }}, kami juga menyediakan berbagai pilihan <a
                    href="{{ route('travel.archive') }}">Travel Sumatra</a> lainnya,
                yang sangat lengkap dibanding penyedia travel lain. Dari ujung Aceh hingga ujung Lampung, semua rute
                siap dilayani.
                Berikut beberapa rute travel populer yang mungkin menarik untuk Anda:
            </p>



            <ul>
                @foreach ($recomendation as $item)
                    @if ($loop->index < 6)
                        <li>
                            <a
                                href="{{ route('travel.show', [
                                    'originName' => \Illuminate\Support\Str::slug($originName),
                                    'destinationName' => \Illuminate\Support\Str::slug($item->name),
                                    'originId' => $origin->id,
                                    'destinationId' => $item->id,
                                ]) }}">
                                Travel {{ $originName }} {{ \Illuminate\Support\Str::title($item->name) }}
                            </a>
                        </li>
                    @else
                        <li>
                            <a
                                href="{{ route('travel.show', [
                                    'originName' => \Illuminate\Support\Str::slug($destinationName),
                                    'destinationName' => \Illuminate\Support\Str::slug($item->name),
                                    'originId' => $destination->id,
                                    'destinationId' => $item->id,
                                ]) }}">
                                Travel {{ $destinationName }} {{ \Illuminate\Support\Str::title($item->name) }}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li>
                    <a
                        href="{{ route('travel.show', [
                            'originName' => \Illuminate\Support\Str::slug($destinationName),
                            'destinationName' => \Illuminate\Support\Str::slug($originName),
                            'originId' => $destination->id,
                            'destinationId' => $origin->id,
                        ]) }}">
                        Travel {{ $destinationName }} {{ $originName }}
                    </a>
                </li>
            </ul>


            <h2>Keuntungan Menggunakan {{ $page }}</h2>

            <p>
                Travel adalah pilihan ideal untuk perjalanan darat, baik santai maupun mendesak.
                Kecepatan perjalanan bisa disesuaikan dengan kebutuhan Anda: ingin cepat, bisa cepat; ingin santai, bisa
                santai.
                Berikut beberapa keuntungan utama menggunakan layanan travel reguler kami:
            </p>

            <h3>Harga Terjangkau & Fleksibel</h3>

            <p>
                Kami menawarkan tarif travel yang ramah di kantong untuk setiap rute.
                Jika merasa harga belum sesuai, Anda dapat berdiskusi langsung dengan admin untuk mendapatkan solusi
                terbaik.
                Tiket tersedia mulai dari <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['lowPrice'], in: 'IDR') }}</span>
                hingga
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['highPrice'], in: 'IDR') }}</span>
                per orang,
                tetap hemat tanpa mengurangi kenyamanan perjalanan.
            </p>


            <h3>Rute Lengkap dan Penguasaan Supir</h3>

            <p>
                Kami menyediakan rute travel lengkap di seluruh Sumatra, termasuk perjalanan dari {{ $originName }}
                ke {{ $destinationName }} maupun sebaliknya.
                Meskipun melayani berbagai rute di seluruh pulau, supir kami terlatih dan berpengalaman dalam menentukan
                jalur tercepat dan paling aman.
                Setiap supir memiliki area tugas khusus sesuai keahlian mereka, sehingga perjalanan Anda selalu terjamin
                lancar.
            </p>

            <h3>Layanan Door-to-Door</h3>

            <p>
                Kini Anda tidak perlu datang ke garasi atau loket untuk berangkat.
                Kami menawarkan layanan jemput langsung dari rumah Anda atau lokasi lain yang telah disepakati
                sebelumnya, membuat perjalanan lebih praktis dan nyaman.
            </p>

            <h3>Perjalanan Aman, Nyaman, dan Cepat</h3>

            <p>
                Kenyamanan penumpang menjadi prioritas kami selama perjalanan dari {{ $originName }} ke
                {{ $destinationName }}.
                Armada selalu dibersihkan, dilengkapi AC, dan supir bersikap ramah serta profesional.
                Waktu tempuh lebih cepat karena perjalanan menggunakan jalur tol penuh, sehingga sampai tujuan lebih
                efisien.
            </p>



            <h2>Ulasan & Testimoni Pelanggan</h2>

            <p>
                Layanan travel ini telah digunakan oleh banyak penumpang, dengan total <span class="text-green-700">6
                    ulasan positif</span>
                dan mendapatkan rating sempurna <span class="text-green-700">5/5</span>.
                Pengalaman mereka menjadi bukti kualitas, kenyamanan, dan keandalan layanan kami.
                <span title="rating 5 / 5" class="rating text-xl"
                    style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ 5 * 20 }}%, rgba(163,163,163.10) {{ 5 * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </span>.
            </p>

            <p>
                Inilah testimoni pelanggan kami yang membuktikan kenyamanan, keamanan, dan kepuasan selama menggunakan
                layanan travel ini:
            </p>

            @foreach ($testimonial as $item)
                <div class="bg-background-primary rounded-md shadow-md p-5 mb-7 ">
                    <blockquote class="border-l-4 border-primary">
                        <p class="italic ml-5">{{ $item[1] }}</p>
                    </blockquote>
                    <p class="!mb-0">Dari: <span class="font-semibold">{{ $item[0] }}</span></p>
                    <span>
                        Rating: {{ 5 }} / 5<span title="rating {{ 5 }} / 5"
                            class="rating text-xl"
                            style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ 5 * 20 }}%, rgba(163,163,163.10) {{ 5 * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                        </span>
                    </span>


                </div>
            @endforeach

            <h2>Cara Memesan {{ $page }}</h2>

            <p>
                Memesan tiket travel dari {{ $originName }} kini lebih mudah dan praktis. Kami selalu memberikan
                kemudahan bagi calon penumpang,
                sehingga Anda tidak perlu datang ke loket jika ingin memesan tiket — cukup pesan secara online.
            </p>

            <p>
                Berikut langkah-langkah mudah untuk memesan tiket travel:
            </p>

            <ul>
                <li>Hubungi WhatsApp kami di {{ phoneNumber() }} atau kunjungi garasi di {{ $originName }}</li>
                <li>Diskusikan dan negosiasikan harga sesuai kebutuhan Anda</li>
                <li>Isi formulir pemesanan, baik online maupun langsung di lokasi</li>
                <li>Tinggal tunggu jadwal keberangkatan; supir akan menjemput Anda langsung dari rumah atau lokasi yang
                    disepakati</li>
            </ul>

            <h2>Pembatalan dan Perubahan Jadwal</h2>

            <p>
                Anda dapat membatalkan pemesanan hingga H-2 sebelum keberangkatan, dan melakukan perubahan jadwal hingga
                H-1.
                Untuk pembatalan atau perubahan, silakan hubungi admin kami.
                Jangan khawatir soal pengembalian dana — kami tidak meminta pembayaran di awal,
                pembayaran hanya dilakukan ketika Anda sudah tiba di lokasi tujuan.
            </p>

            <p>
                Jadi tunggu apa lagi? {{ web()->title }} siap mendukung perjalanan travel Anda ke
                {{ $destinationName }} kapan saja dan di mana saja di seluruh Pulau Sumatra.
                Pesan tiket <strong>{{ $page }}</strong> Anda sekarang juga dan nikmati perjalanan yang nyaman
                serta aman!
            </p>

        </div>
    </div>
</div>
