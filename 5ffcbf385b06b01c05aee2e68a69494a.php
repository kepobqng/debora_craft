<?php $__env->startSection('title', 'Tambah Produk Baru - Toko Bunga'); ?>

<?php $__env->startSection('navigation'); ?>
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Dashboard
    </a>
    <a href="<?php echo e(route('admin.products')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
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
    <a href="<?php echo e(route('admin.delivery')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Pengiriman
    </a>
    <a href="<?php echo e(route('admin.promo')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Promo
    </a>
    <a href="<?php echo e(route('admin.employees')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Karyawan
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
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                <div class="flex items-center space-x-4">
                    <a href="<?php echo e(route('admin.products')); ?>" class="text-gray-500 hover:text-gray-700">
                        ← Kembali ke Daftar Produk
                    </a>
                </div>
                <h2 class="text-2xl font-bold text-black mt-4">Tambah Produk Baru</h2>
                <p class="text-gray-600 mt-1">Tambahkan produk bunga atau aksesoris baru ke toko Anda</p>
            </div>

            <!-- Form Section -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <form action="<?php echo e(route('admin.products.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    
                    <!-- Basic Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-black mb-4">Informasi Dasar</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk *</label>
                                <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Contoh: Buket Mawar Merah" required>
                            </div>
                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori *</label>
                                <select name="category_id" id="category_id" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" required>
                                    <option value="">Pilih Kategori</option>
                                    <?php if(isset($categories)): ?>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga *</label>
                                <input type="number" name="price" id="price" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="150000" required>
                            </div>
                            <div>
                                <label for="stock" class="block text-sm font-medium text-gray-700 mb-2">Stok Awal *</label>
                                <input type="number" name="stock" id="stock" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="10" required>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Produk</label>
                            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Jelaskan detail produk Anda..."></textarea>
                        </div>
                    </div>

                    <!-- Product Images -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-black mb-4">Foto Produk</h3>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                                    <span class="text-gray-400 text-4xl">📷</span>
                                </div>
                                <input type="file" name="images[]" accept="image/*" class="text-sm text-gray-500">
                                <p class="text-xs text-gray-500 mt-1">Foto Utama</p>
                            </div>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                                    <span class="text-gray-400 text-4xl">📷</span>
                                </div>
                                <input type="file" name="images[]" accept="image/*" class="text-sm text-gray-500">
                                <p class="text-xs text-gray-500 mt-1">Foto 2</p>
                            </div>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                                    <span class="text-gray-400 text-4xl">📷</span>
                                </div>
                                <input type="file" name="images[]" accept="image/*" class="text-sm text-gray-500">
                                <p class="text-xs text-gray-500 mt-1">Foto 3</p>
                            </div>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <div class="w-full h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                                    <span class="text-gray-400 text-4xl">📷</span>
                                </div>
                                <input type="file" name="images[]" accept="image/*" class="text-sm text-gray-500">
                                <p class="text-xs text-gray-500 mt-1">Foto 4</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, GIF. Maksimal 2MB per foto.</p>
                    </div>

                    <!-- Product Specifications -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-black mb-4">Spesifikasi Produk</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="weight" class="block text-sm font-medium text-gray-700 mb-2">Berat (gram)</label>
                                <input type="number" name="weight" id="weight" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="500">
                            </div>
                            <div>
                                <label for="dimensions" class="block text-sm font-medium text-gray-700 mb-2">Dimensi (cm)</label>
                                <input type="text" name="dimensions" id="dimensions" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="P x L x T">
                            </div>
                            <div>
                                <label for="material" class="block text-sm font-medium text-gray-700 mb-2">Bahan/Material</label>
                                <input type="text" name="material" id="material" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Contoh: Mawar import, kertas korea">
                            </div>
                            <div>
                                <label for="color" class="block text-sm font-medium text-gray-700 mb-2">Warna</label>
                                <input type="text" name="color" id="color" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Contoh: Merah, Pink, Putih">
                            </div>
                        </div>
                    </div>

                    <!-- SEO Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-black mb-4">SEO & Metadata</h3>
                        <div class="space-y-4">
                            <div>
                                <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Title untuk SEO">
                            </div>
                            <div>
                                <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Description untuk SEO"></textarea>
                            </div>
                            <div>
                                <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags/Keywords</label>
                                <input type="text" name="tags" id="tags" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="buket bunga, mawar merah, kado ulang tahun">
                                <p class="text-sm text-gray-500 mt-1">Pisahkan dengan koma</p>
                            </div>
                        </div>
                    </div>

                    <!-- Product Status -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-black mb-4">Status Produk</h3>
                        <div class="flex items-center space-x-6">
                            <label class="flex items-center">
                                <input type="radio" name="status" value="active" class="text-black focus:ring-black" checked>
                                <span class="ml-2 text-sm text-gray-700">Aktif (Tampil di toko)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="status" value="inactive" class="text-black focus:ring-black">
                                <span class="ml-2 text-sm text-gray-700">Tidak Aktif (Sembunyikan)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Batal
                        </button>
                        <button type="submit" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Debora_Craft\resources\views\dashboard\admin\products\create.blade.php ENDPATH**/ ?>