<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="scroll-smooth">

<head>

    <?php
        $resultTitle = ($title ?? web()->title) . ' | ' . web()->title;
        $resultDescription = ($description ?? web()->tagline) . ' | ' . web()->title;
        $resultThumbnail = (object) [
            'url' => $thumbnail['url'] ?? web()->defaultLogo,
            'width' => $thumbnail['width'] ?? 672,
            'height' => $thumbnail['height'] ?? 672,
            'alt' => $thumbnail['alt'] ?? 'Logo ' . web()->title,
        ];
    ?>

    <!-- Styles / Scripts -->
    <link rel="preload" fetchpriority="high" as="image" href="<?php echo e(asset('images/general/background-hero.webp')); ?>"
        type="image/webp">
    <link rel="preload" href="<?php echo e(asset('/fonts/Inter-Regular.ttf')); ?>" as="font" type="font/ttf"
        crossorigin="anonymous">


    

    <style>
        @font-face {
            font-family: 'Inter';
            src: url('<?php echo e(asset('/fonts/Inter-Regular.ttf')); ?>') format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }



        body {
            font-family: "Inter", sans-serif;
        }
    </style>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Dev -->
    <link rel="author" href="<?php echo e(developer()->url); ?>">
    <meta name="author" content="<?php echo e(developer()->name); ?>">
    <meta name="creator" content="<?php echo e(developer()->name); ?>">
    <meta name="publisher" content="<?php echo e(developer()->name); ?>">
    <meta name="generator" content="Laravel 12">


    <!-- General -->
    <title><?php echo e($resultTitle); ?></title>
    <meta name="description" content="<?php echo e($resultDescription); ?>">
    <meta name="application-name" content="<?php echo e(web()->title); ?>">
    <link rel="shortcut icon" href="<?php echo e(web()->defaultLogo); ?>">
    <link rel="icon" href="<?php echo e(web()->defaultLogo); ?>">


    <!-- Google Bot -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-video-preview:-1, max-image-preview:large, max-snippet:-1">
    <link rel="canonical" href="<?php echo e(request()->url()); ?>">

    <!-- OG General  -->
    <meta property="og:title" content="<?php echo e($resultTitle); ?>">
    <meta property="og:description" content="<?php echo e($resultDescription); ?>">
    <meta property="og:url" content="<?php echo e(request()->url()); ?>">
    <meta property="og:site_name" content="<?php echo e(web()->title); ?>">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo e($resultThumbnail->url); ?>">
    <meta property="og:image:width" content="<?php echo e($resultThumbnail->width); ?>">
    <meta property="og:image:height" content="<?php echo e($resultThumbnail->height); ?>">
    <meta property="og:image:alt" content="<?php echo e($resultThumbnail->alt); ?>">

    <!-- OG Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($resultTitle); ?>">
    <meta name="twitter:description" content="<?php echo e($resultDescription); ?>">
    <meta name="twitter:image" content="<?php echo e($resultThumbnail->url); ?>">
    <meta name="twitter:image:width" content="<?php echo e($resultThumbnail->width); ?>">
    <meta name="twitter:image:height" content="<?php echo e($resultThumbnail->height); ?>">
    <meta name="twitter:image:alt" content="<?php echo e($resultThumbnail->alt); ?>">

    <?php if(request()->routeIs('travel.show') && isset($productSchema)): ?>
        <?php
            $product = collect([
                '@context' => 'https://schema.org/',
                '@type' => 'Product',
                'name' => $page,
                'description' => $description,
                'image' => $resultThumbnail->url,
                'brand' => collect([
                    '@type' => 'Brand',
                    'name' => web()->title,
                ]),
                'offers' => collect([
                    '@type' => 'AggregateOffer',
                    'offerCount' => 6,
                    'lowPrice' => $productSchema['offers']['lowPrice'],
                    'highPrice' => $productSchema['offers']['highPrice'],
                    'priceCurrency' => 'IDR',
                ]),
                'review' => [
                    '@type' => 'Review',
                    'positiveNotes' => [
                        '@type' => 'ItemList',
                        'itemListElement' => [
                            [
                                '@type' => 'ListItem',
                                'position' => 1,
                                'name' => $productSchema['reviewBody'],
                            ],
                        ],
                    ],
                    'reviewBody' => $productSchema['reviewBody'],
                    'reviewRating' => [
                        '@type' => 'Rating',
                        'ratingValue' => 5,
                        'bestRating' => 5,
                    ],
                    'author' => [
                        '@type' => 'Person',
                        'name' => developer()->name,
                    ],
                ],
                'aggregateRating' => [
                    '@type' => 'AggregateRating',
                    'ratingValue' => 5,
                    'reviewCount' => 6,
                    'bestRating' => 5,
                ],
            ]);
        ?>
        <script type="application/ld+json">

        <?php echo json_encode($product, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>


    </script>
    <?php endif; ?>



</head>

<body
    class="bg-background-secondary text-text-description-black tracking-[0.015em] antialiased w-full h-dvh !overflow-visible">

    <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>




    <?php if(env('APP_ENV') == 'local'): ?>
        <script>
            const headings = document.querySelectorAll(':is(h2,h3)');

            let heading = ''
            headings.forEach(element => {
                heading += element.tagName.toLowerCase() + ' ' + element.textContent + '\n'
            });

            console.log(heading);
        </script>

        <script>
            let content = document.querySelector('main article #detail')
            if (content) {
                console.log("words: " + content.innerText.trim().split(/\s+/).filter(Boolean).length);
            }
        </script>
    <?php endif; ?>

</body>

</html>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/app.blade.php ENDPATH**/ ?>