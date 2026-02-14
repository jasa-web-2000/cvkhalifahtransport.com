

<?php $__env->startSection('content'); ?>
    <article>

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
            <h1 class="leading-tight"><?php echo e($title); ?> Untuk Hari Ini</h1>
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

        <div class="min-h-16"></div>

        <?php echo $__env->make('components.travel.single.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/pages/travel/single.blade.php ENDPATH**/ ?>