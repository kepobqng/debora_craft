<?php $__env->startSection('title', 'Manajemen Produk - Toko Bunga'); ?>

<?php $__env->startSection('navigation'); ?>
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Dashboard
    </a>
    <a href="<?php echo e(route('admin.products')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-black border-b-2 border-black">
        Produk
    </a>
    <a href="<?php echo e(route('admin.orders')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Pesanan
    </a>
    <a href="<?php echo e(route('admin.stock')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Stok Bahan
    </a>
    <a href="<?php echo e(route('admin.customers')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Pelanggan
    </a>
    <a href="<?php echo e(route('admin.promo')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Promo
    </a>
    <a href="<?php echo e(route('admin.reports')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Laporan
    </a>
    <a href="<?php echo e(route('admin.settings')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Pengaturan
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-black">Manajemen Produk</h2>
                        <p class="text-gray-600 mt-1">Kelola produk bunga dan aksesoris toko Anda</p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="<?php echo e(route('admin.products.categories')); ?>" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                            Kelola Kategori
                        </a>
                        <a href="<?php echo e(route('admin.products.create')); ?>" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            + Tambah Produk Baru
                        </a>
                    </div>
                </div>
            </div>

            <?php if(session('success')): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center justify-between">
                    <span><?php echo e(session('success')); ?></span>
                    <button onclick="this.parentElement.remove()" class="text-green-700 hover:text-green-900">×</button>
                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 flex items-center justify-between">
                    <span><?php echo e(session('error')); ?></span>
                    <button onclick="this.parentElement.remove()" class="text-red-700 hover:text-red-900">×</button>
                </div>
            <?php endif; ?>

            <!-- Filter and Search Section -->
            <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cari Produk</label>
                        <input type="text" placeholder="Nama produk..." class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                            <option value="">Semua Kategori</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                            <option value="">Semua Status</option>
                            <option value="active">Aktif</option>
                            <option value="inactive">Tidak Aktif</option>
                            <option value="low_stock">Stok Rendah</option>
                            <option value="out_of_stock">Stok Habis</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors w-full">
                            Filter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-black"><?php echo e($stats['total']); ?></div>
                        <div class="text-sm text-gray-600">Total Produk</div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-green-600"><?php echo e($stats['active']); ?></div>
                        <div class="text-sm text-gray-600">Produk Aktif</div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-red-600"><?php echo e($stats['out_of_stock']); ?></div>
                        <div class="text-sm text-gray-600">Stok Habis</div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-600"><?php echo e($stats['low_stock']); ?></div>
                        <div class="text-sm text-gray-600">Stok Rendah</div>
                    </div>
                </div>
            </div>

            <!-- Products Table -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-black">Daftar Produk</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                                                <?php
                                                    $image = is_array($product->images) ? ($product->images[0] ?? null) : $product->images;
                                                ?>
                                                <?php if($image): ?>
                                                    <img src="<?php echo e(asset($image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-full object-cover">
                                                <?php else: ?>
                                                    <span class="text-gray-500 text-xs">No Img</span>
                                                <?php endif; ?>
                                        </div>
                                        <div class="ml-4">
                                                <div class="text-sm font-medium text-black"><?php echo e($product->name); ?></div>
                                                <?php if($product->description): ?>
                                                    <div class="text-sm text-gray-500 line-clamp-1">
                                                        <?php echo e(\Illuminate\Support\Str::limit($product->description, 50)); ?>

                                                    </div>
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                        <?php if($product->category): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                <?php echo e($product->category->name); ?>

                                    </span>
                                        <?php else: ?>
                                            <span class="text-xs text-gray-400">Tanpa Kategori</span>
                                        <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-black font-medium">
                                        Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-sm font-medium <?php echo e($product->stock == 0 ? 'text-red-600' : ($product->stock <= 5 ? 'text-yellow-600' : 'text-green-600')); ?>">
                                            <?php echo e($product->stock); ?>

                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                        <?php if($product->stock == 0): ?>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Stok Habis
                                    </span>
                                        <?php elseif($product->stock <= 5): ?>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Stok Rendah
                                    </span>
                                        <?php elseif($product->is_active): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Aktif
                                            </span>
                                        <?php else: ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                Nonaktif
                                            </span>
                                        <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                            <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>
                                            <a href="<?php echo e(route('product.detail', $product->id)); ?>" class="text-gray-600 hover:text-gray-900" target="_blank">Lihat</a>
                                            <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('Hapus produk ini?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="px-6 py-8 text-center text-sm text-gray-500">
                                        Belum ada produk. Klik <span class="font-semibold">"Tambah Produk Baru"</span> untuk menambahkan.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Debora_Craft\resources\views/dashboard/admin/products/index.blade.php ENDPATH**/ ?>