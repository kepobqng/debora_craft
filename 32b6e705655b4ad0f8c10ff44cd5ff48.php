<?php $__env->startSection('navigation'); ?>
    <a href="<?php echo e(route('user.dashboard')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Dashboard
    </a>
    <a href="<?php echo e(route('user.profile')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-black border-b-2 border-black">
        Profile
    </a>
    <a href="<?php echo e(route('user.settings')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
        Settings
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="space-y-6">
        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <h1 class="text-2xl font-bold text-black mb-6">User Profile</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-black mb-4">Personal Information</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Name</label>
                            <p class="mt-1 text-sm text-black"><?php echo e(Auth::user()->name ?? 'User Name'); ?></p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <p class="mt-1 text-sm text-black"><?php echo e(Auth::user()->email ?? 'user@example.com'); ?></p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Member Since</label>
                            <p class="mt-1 text-sm text-black">January 1, 2024</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-medium text-black mb-4">Account Statistics</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-700">Total Activities</span>
                            <span class="text-sm font-medium text-black">42</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-700">Completed Tasks</span>
                            <span class="text-sm font-medium text-black">28</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-700">Account Status</span>
                            <span class="text-sm font-medium text-green-600">Active</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 pt-6 border-t border-gray-200">
                <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                    Edit Profile
                </button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Debora_Craft\resources\views\dashboard\user\profile.blade.php ENDPATH**/ ?>