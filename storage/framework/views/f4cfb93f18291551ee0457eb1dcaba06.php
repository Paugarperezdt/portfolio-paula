<!DOCTYPE html>
<html lang="es">
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans overflow-x-hidden">

    <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>   
    
    <?php echo e($slot); ?>                
    
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    

    
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    
    <?php echo $__env->yieldPushContent('scripts'); ?>           


</body>
</html>
<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/components/layouts/base.blade.php ENDPATH**/ ?>