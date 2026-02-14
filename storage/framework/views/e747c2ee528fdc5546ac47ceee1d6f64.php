<?php
    $galeri = [
        [
            ['/images/gallery/1.jpg', 'aspect-[10/10]'],
            ['/images/gallery/2.jpg', 'aspect-[10/13]'],
            ['/images/gallery/3.jpg', 'aspect-[10/13]'],
        ],
        [
            ['/images/gallery/4.jpg', 'aspect-[10/12]'],
            ['/images/gallery/5.jpg', 'aspect-[10/14]'],
            ['/images/gallery/6.jpg', 'aspect-[10/10]'],
        ],
        [
            ['/images/gallery/7.jpg', 'aspect-[10/14]'],
            ['/images/gallery/8.jpg', 'aspect-[10/11]'],
            ['/images/gallery/9.jpg', 'aspect-[10/11]'],
        ],
        [
            ['/images/gallery/10.jpg', 'aspect-[10/8.75]'],
            ['/images/gallery/11.jpg', 'aspect-[10/8.75]'],
            ['/images/gallery/12.jpg', 'aspect-[10/8.75]'],
            ['/images/gallery/13.jpg', 'aspect-[10/8.75]'],
        ],
    ];

    $index = 1;
?>


<div class="my-container text-center">
    <?php if (isset($component)) { $__componentOriginal5a6e0996682097f99d03bc77a3720d7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a6e0996682097f99d03bc77a3720d7d = $attributes; } ?>
<?php $component = App\View\Components\SubHeading::resolve(['subTitle' => 'Galeri Mobil Travel','description' => 'Kami memiliki berbagai mobil travel terbaik.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sub-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SubHeading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a6e0996682097f99d03bc77a3720d7d)): ?>
<?php $attributes = $__attributesOriginal5a6e0996682097f99d03bc77a3720d7d; ?>
<?php unset($__attributesOriginal5a6e0996682097f99d03bc77a3720d7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a6e0996682097f99d03bc77a3720d7d)): ?>
<?php $component = $__componentOriginal5a6e0996682097f99d03bc77a3720d7d; ?>
<?php unset($__componentOriginal5a6e0996682097f99d03bc77a3720d7d); ?>
<?php endif; ?>

    <div
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6 lg:gap-7 [&_img]:rounded-md [&_img]:w-full [&_img]:object-cover [&_img]:object-top [&_img]:shadow-lg [&_img]:border-b-8 [&_img]:border-primary [&_img]:brightness-75 [&_img]:hover:brightness-90">

        <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                class="grid gap-5 md:gap-6 lg:gap-7 md:last:grid-cols-4 md:last:col-span-full lg:last:grid-cols-1 lg:last:col-span-1">
                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(asset($item[0])); ?>" title="Galeri <?php echo e($index); ?>">
                        <img src="<?php echo e(asset($item[0])); ?>" loading="lazy" class="<?php echo e($item[1]); ?>"
                            title="Galeri <?php echo e($index); ?>"
                            alt="Galeri <?php echo e(config('app.name')); ?> ke-<?php echo e($index++); ?>" width="400" height="400">
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/components/gallery/index.blade.php ENDPATH**/ ?>