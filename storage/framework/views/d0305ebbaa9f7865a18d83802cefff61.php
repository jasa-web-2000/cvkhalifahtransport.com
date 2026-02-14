<div class="max-w-[750px] mx-auto px-5 relative !z-10">
    <form action="<?php echo e(route('travel.search.form')); ?>" target="_blank" method="POST" id="cari-rute"
        class="scroll-mt-24 border-b-8 border-b-primary bg-background-primary rounded-lg shadow p-4 px-3 grid grid-cols-2 md:grid-cols-1 gap-x-5 [&_label]:mt-4 [&_label]:mb-1 [&_label]:!line-clamp-1 [&_button]:w-full [&_button]:overflow-hidden [&_*]:!text-sm [&_*]:md:!text-[15px] [&>div]:grid [&>div]:md:grid-cols-3 [&>div]:gap-x-5">
        <?php echo csrf_field(); ?>


        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('select-location', ['type' => 'origin']);

$__html = app('livewire')->mount($__name, $__params, 'lw-476277820-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('select-location', ['type' => 'destination']);

$__html = app('livewire')->mount($__name, $__params, 'lw-476277820-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


        <div class="!col-span-full !block mt-4 text-right">
            <button class="btn-primary sm:!w-fit" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                Cari rute travel
            </button>
        </div>

    </form>
</div>
<?php /**PATH C:\laragon\www\cvkhalifahtransport.com\resources\views/components/travel/archive/search.blade.php ENDPATH**/ ?>