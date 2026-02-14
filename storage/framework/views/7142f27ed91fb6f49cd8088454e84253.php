<div class="my-container text-center">
    <?php if (isset($component)) { $__componentOriginal5a6e0996682097f99d03bc77a3720d7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a6e0996682097f99d03bc77a3720d7d = $attributes; } ?>
<?php $component = App\View\Components\SubHeading::resolve(['subTitle' => 'Pesan Travel Terdekat Sekarang','description' => 'Anda bisa pesan travel secara online melalui whatsapp.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        class="!text-left mt-10 content-start grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 sm:gap-x-10 md:gap-y-12 md:gap-x-20 lg:gap-x-28 lg:justify-center md:items-center">
        <div class="md:col-span-1 lg:col-span-5 lg:col-start-2">
            <?php if (isset($component)) { $__componentOriginalb58ed966ac07edb86172c6143dbfa6db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb58ed966ac07edb86172c6143dbfa6db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact.booking','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact.booking'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb58ed966ac07edb86172c6143dbfa6db)): ?>
<?php $attributes = $__attributesOriginalb58ed966ac07edb86172c6143dbfa6db; ?>
<?php unset($__attributesOriginalb58ed966ac07edb86172c6143dbfa6db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb58ed966ac07edb86172c6143dbfa6db)): ?>
<?php $component = $__componentOriginalb58ed966ac07edb86172c6143dbfa6db; ?>
<?php unset($__componentOriginalb58ed966ac07edb86172c6143dbfa6db); ?>
<?php endif; ?>
        </div>
        <?php if (isset($component)) { $__componentOriginal467013581e9a39d6b02812e1c6f94825 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal467013581e9a39d6b02812e1c6f94825 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact.list','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal467013581e9a39d6b02812e1c6f94825)): ?>
<?php $attributes = $__attributesOriginal467013581e9a39d6b02812e1c6f94825; ?>
<?php unset($__attributesOriginal467013581e9a39d6b02812e1c6f94825); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal467013581e9a39d6b02812e1c6f94825)): ?>
<?php $component = $__componentOriginal467013581e9a39d6b02812e1c6f94825; ?>
<?php unset($__componentOriginal467013581e9a39d6b02812e1c6f94825); ?>
<?php endif; ?>
    </div>

    <div class="my-space"></div>

    <div class="">
        <iframe title="alamat" src=<?php echo e(address()->iframe); ?> allowFullScreen="true"
            class="w-full h-80 lg:h-96 brightness-35 hover:brightness-90 transition-all duration-700 shadow-lg rounded-md"></iframe>
    </div>
</div>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/components/contact/index.blade.php ENDPATH**/ ?>