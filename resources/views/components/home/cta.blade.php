<div class="relative">
    <div class="hero-gradient"></div>
    <div class="my-space"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
        <div class="mx-auto max-w-lg text-center">
            <h2 class="text-text-title-white">Siap Berangkat? Hubungi Kami!</h2>
            {{-- <p class="mt-4 text-lg tracking-tight text-white">It’s time to take control of your books. Buy our software
                so you can feel like you’re doing something productive.</p> --}}
            <p class="text-text-description-white my-4">
                Rencanakan perjalanan travel Anda sekarang juga bersama
                <strong>{{ web()->title }}</strong>.
                Kami siap memberikan layanan terbaik untuk {{ \Illuminate\Support\Str::lower(web()->tagline) }}
                dengan pelayanan profesional, armada terawat, serta tim yang berpengalaman di setiap rute.
            </p>
            <a class="btn-secondary mt-5" href="{{ whatsapp() }}" title="Hubungi Kami Sekarang" rel="nofollow noindex"
                target="_blank">Hubungi Kami Sekarang</a>

        </div>
    </div>
    <div class="my-space"></div>
</div>
