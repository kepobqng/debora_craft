<?php $__env->startSection('title', 'Manajemen Stok Bahan - Toko Bunga'); ?>

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
    <a href="<?php echo e(route('admin.stock')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-black border-b-2 border-black">
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-black">Manajemen Stok Bahan</h2>
                        <p class="text-gray-600 mt-1">Kelola stok bunga segar dan bahan kemasan toko Anda</p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 transition-colors">
                            📊 Laporan Stok
                        </button>
                        <button onclick="document.getElementById('addStockModal').classList.remove('hidden')" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            + Input Stok Masuk
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stock Alert -->
            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                <div class="flex items-center">
                    <span class="text-red-600 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-medium text-red-800">Peringatan Stok Menipis</h4>
                        <p class="text-sm text-red-700">3 jenis bahan memerlukan perhatian segera: Mawar Merah (2 unit), Kertas Wrapping (5 unit), Pita Satin (3 unit)</p>
                    </div>
                </div>
            </div>

            <!-- Stock Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">45</div>
                        <div class="text-sm text-gray-600">Jenis Bahan</div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-green-600">Stok Aman</div>
                        <div class="text-sm text-gray-600">32 jenis bahan</div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-600">8</div>
                        <div class="text-sm text-gray-600">Stok Rendah</div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-red-600">3</div>
                        <div class="text-sm text-gray-600">Stok Habis</div>
                    </div>
                </div>
            </div>

            <!-- Filter and Search Section -->
            <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cari Bahan</label>
                        <input type="text" placeholder="Nama bahan..." class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                            <option value="">Semua Kategori</option>
                            <option value="bunga">Bunga Segar</option>
                            <option value="kemasan">Kemasan</option>
                            <option value="aksesoris">Aksesoris</option>
                            <option value="peralatan">Peralatan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status Stok</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                            <option value="">Semua Status</option>
                            <option value="safe">Aman</option>
                            <option value="low">Rendah</option>
                            <option value="empty">Habis</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors w-full">
                            Filter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stock Items Table -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-black">Daftar Stok Bahan</h3>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-blue-600 text-white rounded text-sm hover:bg-blue-700">Export Excel</button>
                        <button class="px-3 py-1 bg-green-600 text-white rounded text-sm hover:bg-green-700">Cetak Laporan</button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bahan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok Tersedia</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Satuan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Min. Stok</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Stock Row 1 - Low Stock -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-black">Mawar Merah</div>
                                    <div class="text-sm text-gray-500">Bunga import</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">
                                        Bunga Segar
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-yellow-600 font-bold">2</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Tangkai
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    10
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Stok Rendah
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">Edit</button>
                                        <button onclick="document.getElementById('addStockModal').classList.remove('hidden')" class="text-green-600 hover:text-green-900">+ Stok</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Stock Row 2 - Safe Stock -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-black">Mawar Putih</div>
                                    <div class="text-sm text-gray-500">Bunga lokal</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">
                                        Bunga Segar
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-green-600 font-bold">25</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Tangkai
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    10
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Stok Aman
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">Edit</button>
                                        <button onclick="document.getElementById('addStockModal').classList.remove('hidden')" class="text-green-600 hover:text-green-900">+ Stok</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Stock Row 3 - Out of Stock -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-black">Kertas Wrapping Korea</div>
                                    <div class="text-sm text-gray-500">Kemasan premium</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Kemasan
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-red-600 font-bold">0</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Lembar
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    20
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Stok Habis
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">Edit</button>
                                        <button onclick="document.getElementById('addStockModal').classList.remove('hidden')" class="text-green-600 hover:text-green-900">+ Stok</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Stock Row 4 - Low Stock -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-black">Pita Satin</div>
                                    <div class="text-sm text-gray-500">Aksesoris dekorasi</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                        Aksesoris
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-yellow-600 font-bold">3</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Meter
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    10
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Stok Rendah
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">Edit</button>
                                        <button onclick="document.getElementById('addStockModal').classList.remove('hidden')" class="text-green-600 hover:text-green-900">+ Stok</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Stock Row 5 - Safe Stock -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-black">Vas Kaca Medium</div>
                                    <div class="text-sm text-gray-500">Wadah bunga</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Peralatan
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-green-600 font-bold">15</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    Unit
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    5
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Stok Aman
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">Edit</button>
                                        <button onclick="document.getElementById('addStockModal').classList.remove('hidden')" class="text-green-600 hover:text-green-900">+ Stok</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Menampilkan 1-5 dari 45 bahan
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">Sebelumnya</button>
                            <button class="px-3 py-1 bg-black text-white rounded text-sm">1</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">2</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">3</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">Selanjutnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Stock Modal -->
    <div id="addStockModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium text-gray-900 text-center">Input Stok Masuk</h3>
                <form class="mt-4 space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Bahan</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                            <option value="">Pilih Bahan</option>
                            <option value="mawar-merah">Mawar Merah</option>
                            <option value="mawar-putih">Mawar Putih</option>
                            <option value="kertas-wrapping">Kertas Wrapping Korea</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jumlah Masuk</label>
                        <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Contoh: 50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Harga per Satuan</label>
                        <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Contoh: 5000">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                        <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Supplier</label>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Nama supplier">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Catatan</label>
                        <textarea rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-black focus:border-black" placeholder="Catatan tambahan..."></textarea>
                    </div>
                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="document.getElementById('addStockModal').classList.add('hidden')" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Debora_Craft\resources\views\dashboard\admin\stock\index.blade.php ENDPATH**/ ?>