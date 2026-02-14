

<?php $__env->startSection('content'); ?>
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

    <div class="my-space"></div>

    <?php if (isset($component)) { $__componentOriginal42e73ed152f8e986b81133e05a0a1f23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42e73ed152f8e986b81133e05a0a1f23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42e73ed152f8e986b81133e05a0a1f23)): ?>
<?php $attributes = $__attributesOriginal42e73ed152f8e986b81133e05a0a1f23; ?>
<?php unset($__attributesOriginal42e73ed152f8e986b81133e05a0a1f23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42e73ed152f8e986b81133e05a0a1f23)): ?>
<?php $component = $__componentOriginal42e73ed152f8e986b81133e05a0a1f23; ?>
<?php unset($__componentOriginal42e73ed152f8e986b81133e05a0a1f23); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/pages/contact.blade.php ENDPATH**/ ?>