<nav class="w-full flex flex-col gap-4 md:flex-row md:items-center md:gap-x-7 lg:gap-x-10">

    <?php $__currentLoopData = menu(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="<?php echo e($item[0] == request()->url() ? 'text-primary' : ''); ?> " href="<?php echo e($item[0]); ?>"
            title="<?php echo e($item[1]); ?>"><?php echo e($item[1]); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <a href="<?php echo e(whatsapp()); ?>" target="_blank" rel="nofollow noindex" title="whatsapp" class="btn-primary">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
        </svg>

        Pesan
    </a>
</nav>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/components/nav.blade.php ENDPATH**/ ?>