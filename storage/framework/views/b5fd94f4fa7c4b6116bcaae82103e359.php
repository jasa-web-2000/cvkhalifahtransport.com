

<?php $__env->startSection('content'); ?>
    <div class="[&>div]:pb-10">
        <?php if (isset($component)) { $__componentOriginal49b77eeea7447a43532ef7ef99a68fd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49b77eeea7447a43532ef7ef99a68fd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.background-hero','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('background-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <h1><?php echo e($page); ?></h1>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49b77eeea7447a43532ef7ef99a68fd0)): ?>
<?php $attributes = $__attributesOriginal49b77eeea7447a43532ef7ef99a68fd0; ?>
<?php unset($__attributesOriginal49b77eeea7447a43532ef7ef99a68fd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49b77eeea7447a43532ef7ef99a68fd0)): ?>
<?php $component = $__componentOriginal49b77eeea7447a43532ef7ef99a68fd0; ?>
<?php unset($__componentOriginal49b77eeea7447a43532ef7ef99a68fd0); ?>
<?php endif; ?>
        <div class="-mt-16 xl:-mt-20 relative">
            <?php if (isset($component)) { $__componentOriginal0f38ff49372e6fbc20eb4556227380b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f38ff49372e6fbc20eb4556227380b2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.travel.archive.search','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('travel.archive.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f38ff49372e6fbc20eb4556227380b2)): ?>
<?php $attributes = $__attributesOriginal0f38ff49372e6fbc20eb4556227380b2; ?>
<?php unset($__attributesOriginal0f38ff49372e6fbc20eb4556227380b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f38ff49372e6fbc20eb4556227380b2)): ?>
<?php $component = $__componentOriginal0f38ff49372e6fbc20eb4556227380b2; ?>
<?php unset($__componentOriginal0f38ff49372e6fbc20eb4556227380b2); ?>
<?php endif; ?>
        </div>
    </div>

    <div class="my-space"></div>

    <?php if (isset($component)) { $__componentOriginal144c4677c7dc8cc10bb2591445d59754 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal144c4677c7dc8cc10bb2591445d59754 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.travel.archive.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('travel.archive.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal144c4677c7dc8cc10bb2591445d59754)): ?>
<?php $attributes = $__attributesOriginal144c4677c7dc8cc10bb2591445d59754; ?>
<?php unset($__attributesOriginal144c4677c7dc8cc10bb2591445d59754); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal144c4677c7dc8cc10bb2591445d59754)): ?>
<?php $component = $__componentOriginal144c4677c7dc8cc10bb2591445d59754; ?>
<?php unset($__componentOriginal144c4677c7dc8cc10bb2591445d59754); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/pages/travel/archive.blade.php ENDPATH**/ ?>