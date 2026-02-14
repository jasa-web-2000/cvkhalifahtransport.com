<div>
    <label for="<?php echo e($id); ?>"><?php echo e($label); ?>

    </label>

    <select wire:model.live="<?php echo e($model); ?>" title="<?php echo e($label); ?>" id="<?php echo e($id); ?>"
        name="<?php echo e($id); ?>" class="py-2" <?php echo e($data && $data->count() > 0 ? '' : 'disabled'); ?>

        <?php echo e($id === 'destination_province' || $id === 'origin_province' ? 'required' : ''); ?> autocomplete="off">
        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $data ? $data->sortBy('name') : collect([]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <!--[if BLOCK]><![endif]--><?php if($loop->first): ?>
                <option value ="">Pilih <?php echo e($label); ?></option>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <option value="<?php echo e($item->id); ?>"><?php echo e(\Illuminate\Support\Str::title($item->name)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <option value="">Tidak ada data</option>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </select>
</div>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/components/travel/archive/select-location.blade.php ENDPATH**/ ?>