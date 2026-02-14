<div class="">
    <?php if (isset($component)) { $__componentOriginal328dce8ee9ac24f5c582bd4735e716cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd = $attributes; } ?>
<?php $component = App\View\Components\Travel\Archive\SelectLocation::resolve(['model' => 'selectedProvince','id' => ''.e($type).'_province','data' => $provinceData,'label' => 'Provinsi '.e($type == 'origin' ? 'asal' : 'tujuan').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('travel.archive.select-location'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Travel\Archive\SelectLocation::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd)): ?>
<?php $attributes = $__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd; ?>
<?php unset($__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal328dce8ee9ac24f5c582bd4735e716cd)): ?>
<?php $component = $__componentOriginal328dce8ee9ac24f5c582bd4735e716cd; ?>
<?php unset($__componentOriginal328dce8ee9ac24f5c582bd4735e716cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal328dce8ee9ac24f5c582bd4735e716cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd = $attributes; } ?>
<?php $component = App\View\Components\Travel\Archive\SelectLocation::resolve(['model' => 'selectedRegency','id' => ''.e($type).'_regency','data' => $regencyData,'label' => 'Kab/kota '.e($type == 'origin' ? 'asal' : 'tujuan').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('travel.archive.select-location'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Travel\Archive\SelectLocation::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd)): ?>
<?php $attributes = $__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd; ?>
<?php unset($__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal328dce8ee9ac24f5c582bd4735e716cd)): ?>
<?php $component = $__componentOriginal328dce8ee9ac24f5c582bd4735e716cd; ?>
<?php unset($__componentOriginal328dce8ee9ac24f5c582bd4735e716cd); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal328dce8ee9ac24f5c582bd4735e716cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd = $attributes; } ?>
<?php $component = App\View\Components\Travel\Archive\SelectLocation::resolve(['model' => 'selectedDistrict','id' => ''.e($type).'_district','data' => $districtData,'label' => 'Kecamatan '.e($type == 'origin' ? 'asal' : 'tujuan').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('travel.archive.select-location'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Travel\Archive\SelectLocation::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd)): ?>
<?php $attributes = $__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd; ?>
<?php unset($__attributesOriginal328dce8ee9ac24f5c582bd4735e716cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal328dce8ee9ac24f5c582bd4735e716cd)): ?>
<?php $component = $__componentOriginal328dce8ee9ac24f5c582bd4735e716cd; ?>
<?php unset($__componentOriginal328dce8ee9ac24f5c582bd4735e716cd); ?>
<?php endif; ?>

</div>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/livewire/select-location.blade.php ENDPATH**/ ?>