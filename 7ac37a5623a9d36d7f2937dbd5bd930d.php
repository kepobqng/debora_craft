

<?php $__env->startSection('title', 'Bunga - Debora Craft'); ?>

<?php
use Illuminate\Support\Str;
?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kategori Produk</h1>
            <p class="text-lg text-gray-600">Pilih dari berbagai kategori karangan bunga, aksesoris, dan gift set kami</p>
        </div>

        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-16">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900"><?php echo e($label); ?></h2>
                        <p class="text-gray-600 mt-1">Pilihan <?php echo e(strtolower($label)); ?> dengan kualitas terbaik</p>
                    </div>
                    <a href="#<?php echo e($slug); ?>" class="text-sm text-pink-600 hover:text-pink-700">Lihat semua</a>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php $__empty_1 = true; $__currentLoopData = $productsByCategory[$slug] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="h-64 bg-gray-100 flex items-center justify-center overflow-hidden">
                                <?php if($product->images && count($product->images) > 0): ?>
                                    <img src="<?php echo e(asset($product->images[0])); ?>" 
                                         alt="<?php echo e($product->name); ?>" 
                                         class="w-full h-full object-cover">
                                <?php else: ?>
                                    <span class="text-pink-600 text-4xl" aria-hidden="true">🌸</span>
                                <?php endif; ?>
                            </div>
                            <div class="p-6">
                                <p class="text-xs uppercase tracking-wider text-gray-500 mb-2">
                                    <?php echo e(optional($product->category)->name ?? 'Kategori Lainnya'); ?>

                                </p>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($product->name); ?></h3>
                                <p class="text-gray-600 mb-4"><?php echo e(Str::limit($product->description ?? 'Produk berkualitas tinggi', 80)); ?></p>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <?php if($product->discount_price): ?>
                                            <span class="text-lg font-bold text-pink-600">Rp <?php echo e(number_format($product->discount_price, 0, ',', '.')); ?></span>
                                            <span class="text-sm text-gray-400 line-through ml-2">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></span>
                                        <?php else: ?>
                                            <span class="text-lg font-bold text-pink-600">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo e(route('product.detail', $product->id)); ?>" class="text-pink-600 font-medium hover:text-pink-700">
                                        Detail →
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-3">
                            <div class="bg-gray-50 border border-dashed border-gray-200 rounded-lg p-12 text-center">
                                <span class="text-4xl mb-4 block">🌸</span>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Produk <?php echo e($label); ?> belum tersedia</h3>
                                <p class="text-gray-600">Kami sedang menyiapkan koleksi terbaik untuk kategori ini. Silakan kembali lagi nanti.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Debora_Craft\resources\views/kategori.blade.php ENDPATH**/ ?>