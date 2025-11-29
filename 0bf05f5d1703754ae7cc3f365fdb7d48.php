<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Debora Craft - Toko Bunga Online'); ?></title>
    <!-- Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Cotoris Font */
        @font-face {
            font-family: 'Cotoris';
            src: url('<?php echo e(asset("fonts/Cotoris-Regular.ttf")); ?>') format('truetype'),
                 url('<?php echo e(asset("fonts/Cotoris-Regular.otf")); ?>') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Cotoris';
            src: url('<?php echo e(asset("fonts/Cotoris-Bold.ttf")); ?>') format('truetype'),
                 url('<?php echo e(asset("fonts/Cotoris-Bold.otf")); ?>') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Cotoris';
            src: url('<?php echo e(asset("fonts/Cotoris-Italic.ttf")); ?>') format('truetype'),
                 url('<?php echo e(asset("fonts/Cotoris-Italic.otf")); ?>') format('opentype');
            font-weight: 400;
            font-style: italic;
            font-display: swap;
        }

        body {
            font-family: 'Cotoris', sans-serif;
        }
        .hero-background {
            background-image: url('<?php echo e(asset("img/background.png")); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        /* Profile Dropdown */
        .profile-dropdown {
            position: relative;
        }
        
        .profile-dropdown-menu {
            pointer-events: none;
        }
        
        .profile-dropdown:hover .profile-dropdown-menu {
            pointer-events: auto;
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="<?php echo e(request()->routeIs('home') ? '' : 'bg-white'); ?>">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(asset('img/logo.jpg')); ?>" alt="Debora Craft Logo" class="h-10 w-10 object-contain">
                    </a>
                    <a href="<?php echo e(route('home')); ?>" class="text-xl font-semibold text-gray-800">Debora Craft</a>
                </div>
                
                <!-- Menu -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'text-gray-800 border-b-2 border-pink-600' : 'text-gray-600 hover:text-pink-600'); ?> px-1 pt-1 text-sm font-medium transition">Beranda</a>
                    <a href="<?php echo e(route('kategori')); ?>" class="<?php echo e(request()->routeIs('kategori') ? 'text-gray-800 border-b-2 border-pink-600' : 'text-gray-600 hover:text-pink-600'); ?> px-1 pt-1 text-sm font-medium transition">Kategori</a>
                    <a href="<?php echo e(route('tentang')); ?>" class="<?php echo e(request()->routeIs('tentang') ? 'text-gray-800 border-b-2 border-pink-600' : 'text-gray-600 hover:text-pink-600'); ?> px-1 pt-1 text-sm font-medium transition">Tentang</a>
                    <a href="<?php echo e(route('kontak')); ?>" class="<?php echo e(request()->routeIs('kontak') ? 'text-gray-800 border-b-2 border-pink-600' : 'text-gray-600 hover:text-pink-600'); ?> px-1 pt-1 text-sm font-medium transition">Kontak</a>
                </div>
                
                <!-- Icons -->
                <div class="flex items-center space-x-4">
                    <?php if(auth()->guard()->check()): ?>
                        <?php
                            $cartSummary = Auth::user()
                                ->cart()
                                ->withSum('items as items_quantity_sum', 'quantity')
                                ->first();
                            $navCartCount = optional($cartSummary)->items_quantity_sum ?? 0;
                        ?>
                        <a href="<?php echo e(route('cart')); ?>" class="text-gray-600 hover:text-pink-600 relative text-lg" aria-label="Keranjang">
                            🛒
                            <?php if($navCartCount > 0): ?>
                                <span class="absolute -top-2 -right-2 bg-pink-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs" id="cart-count"><?php echo e($navCartCount); ?></span>
                            <?php endif; ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-gray-600 hover:text-pink-600 relative text-lg" aria-label="Keranjang">
                            🛒
                        </a>
                    <?php endif; ?>
                    
                    <?php if(auth()->guard()->check()): ?>
                        <!-- Profile Photo Dropdown -->
                        <div class="relative profile-dropdown group">
                            <a href="<?php echo e(Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard')); ?>" 
                               class="flex items-center space-x-2 cursor-pointer">
                                <?php if(Auth::user()->profile_photo): ?>
                                    <img src="<?php echo e(asset('storage/' . Auth::user()->profile_photo)); ?>" 
                                         alt="<?php echo e(Auth::user()->name); ?>" 
                                         class="h-10 w-10 rounded-full object-cover border-2 border-pink-500">
                                <?php else: ?>
                                    <div class="h-10 w-10 rounded-full bg-pink-500 flex items-center justify-center text-white font-semibold">
                                        <?php echo e(strtoupper(substr(Auth::user()->name, 0, 1))); ?>

                                    </div>
                                <?php endif; ?>
                            </a>
                            <!-- Dropdown Menu -->
                            <div class="profile-dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-200">
                                <a href="<?php echo e(Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard')); ?>" 
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                                    Dashboard
                                </a>
                                <a href="<?php echo e(Auth::user()->role === 'admin' ? route('admin.settings') : route('user.profile')); ?>" 
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                                    Profile
                                </a>
                                <div class="border-t border-gray-200 my-1"></div>
                                <form method="POST" action="<?php echo e(route('logout')); ?>" class="block">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-pink-50">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Login Button -->
                        <a href="<?php echo e(route('login')); ?>" 
                           class="text-gray-600 hover:text-pink-600 px-4 py-2 text-sm font-medium border border-gray-300 rounded-md hover:border-pink-500 transition">
                            Login
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Debora Craft</h3>
                    <p class="text-gray-400">Toko bunga online terpercaya dengan koleksi bunga segar berkualitas tinggi.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Produk</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Bouquet Bunga</a></li>
                        <li><a href="#" class="hover:text-white">Karangan Bunga</a></li>
                        <li><a href="#" class="hover:text-white">Bunga Meja</a></li>
                        <li><a href="#" class="hover:text-white">Bunga Papan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Pengiriman Cepat</a></li>
                        <li><a href="#" class="hover:text-white">Custom Design</a></li>
                        <li><a href="#" class="hover:text-white">Event Decoration</a></li>
                        <li><a href="#" class="hover:text-white">Konsultasi Gratis</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl" aria-label="Facebook">
                            fb
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl" aria-label="Instagram">
                            ig
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl" aria-label="WhatsApp">
                            wa
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Debora Craft. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\laragon\www\Debora_Craft\resources\views\layouts\app.blade.php ENDPATH**/ ?>