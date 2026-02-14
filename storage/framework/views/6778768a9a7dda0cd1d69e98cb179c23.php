<?php
    $randomLocation = [...province(), ...regency()->shuffle()->take(40), ...regency()->shuffle()->take(40)];
    $travel = collect($randomLocation)->shuffle()->take(24)->chunk(2)->map(fn($c) => $c->values());
?>

<div class="my-container text-center">
    <?php if (isset($component)) { $__componentOriginal5a6e0996682097f99d03bc77a3720d7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a6e0996682097f99d03bc77a3720d7d = $attributes; } ?>
<?php $component = App\View\Components\SubHeading::resolve(['subTitle' => 'Rute Travel Terbaik','description' => 'Kami menghadirkan pilihan rute travel terbaik yang siap menemani perjalanan Anda.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        class="grid grid-cols-1 min-[490px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-5 sm:gap-x-6 md:gap-x-7 lg:gap-x-8 gap-y-7 sm:gap-y-8 md:gap-y-9 lg:gap-y-10 ">
        <?php $__currentLoopData = $travel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $origin = $item[0];
                $destination = $item[1];
            ?>

            <?php if($origin && $destination): ?>
                <?php
                    $params = [
                        'originName' => \Illuminate\Support\Str::slug($origin->name),
                        'originId' => $origin->id,
                        'destinationName' => \Illuminate\Support\Str::slug($destination->name),
                        'destinationId' => $destination->id,
                    ];
                ?>
                <?php if (isset($component)) { $__componentOriginald908f8f992a9b3b11be8951c1324aa86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald908f8f992a9b3b11be8951c1324aa86 = $attributes; } ?>
<?php $component = App\View\Components\Travel\Archive\TravelGrid::resolve(['title' => 'Travel '.e(\Illuminate\Support\Str::title($origin->name)).' '.e(\Illuminate\Support\Str::title($destination->name)).'','url' => ''.e(route('travel.show', $params)).'','thumbnail' => ''.e(route('travel.show.thumbnail', $params)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('travel.archive.travel-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Travel\Archive\TravelGrid::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald908f8f992a9b3b11be8951c1324aa86)): ?>
<?php $attributes = $__attributesOriginald908f8f992a9b3b11be8951c1324aa86; ?>
<?php unset($__attributesOriginald908f8f992a9b3b11be8951c1324aa86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald908f8f992a9b3b11be8951c1324aa86)): ?>
<?php $component = $__componentOriginald908f8f992a9b3b11be8951c1324aa86; ?>
<?php unset($__componentOriginald908f8f992a9b3b11be8951c1324aa86); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/components/travel/archive/index.blade.php ENDPATH**/ ?>