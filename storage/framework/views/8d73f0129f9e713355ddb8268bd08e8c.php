<title><?php echo e($title ?? 'Portfolio de Paula'); ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio profesional de Paula García, desarrolladora de aplicaciones multiplataforma.">
<meta name="author" content="Paula García">


<meta property="og:title" content="Paula García · Portfolio de desarrollo" />
<meta property="og:description" content="Desarrolladora junior con foco en frontend, UI y proyectos prácticos como GymBro y JobFlow." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://paula.pkstudio.es" />
<meta property="og:image" content="<?php echo e(asset('images/pauli2.png')); ?>" />


<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Paula García · Portfolio de desarrollo">
<meta name="twitter:description" content="Desarrolladora junior con foco en frontend, UI y proyectos prácticos como GymBro y JobFlow.">
<meta name="twitter:image" content="<?php echo e(asset('images/pauli2.png')); ?>">


<link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>">
<link rel="alternate icon" href="<?php echo e(asset('favicon.ico')); ?>">


<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>



<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/partials/head.blade.php ENDPATH**/ ?>