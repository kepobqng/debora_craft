<?php $__env->startSection('navigation'); ?>
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">Dashboard</a>
    <a href="<?php echo e(route('admin.promo')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-black border-b-2 border-black">Promo</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="space-y-6">
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <h1 class="text-2xl font-bold text-black mb-6">Manajemen Promo</h1>
            <p class="text-gray-700">Halaman promo belum memiliki konten. Silakan tambahkan fitur sesuai kebutuhan.</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Debora_Craft\resources\views\dashboard\admin\promo\index.blade.php ENDPATH**/ ?>