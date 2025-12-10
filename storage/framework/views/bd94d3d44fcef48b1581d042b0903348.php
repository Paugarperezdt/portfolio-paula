<nav x-data="{ open: false }" @click.outside="open = false" @scroll.window="open = false"
     class="bg-white border-b border-gray-200 fixed inset-x-0 top-0 z-10">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            
            <a @click="open = false" href="#inicio">
                <img src="<?php echo e(asset('images/pg.png')); ?>" alt="Logo Paula.dev" class="h-12 w-auto">
            </a>

            
            <div class="hidden md:flex items-center space-x-8 text-sm tracking-wide uppercase">
                <?php
                    $links = [
                        ['id' => 'inicio', 'label' => 'Inicio'],
                        ['id' => 'proyectos', 'label' => 'Proyectos'],
                        ['id' => 'tecnologias', 'label' => 'Tecnologías'],
                        ['id' => 'contacto', 'label' => 'Contacto'],
                    ];
                ?>

                <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('inicio')); ?>#<?php echo e($link['id']); ?>"
                       class="nav-link text-gray-700 hover:text-black transition"
                       data-link="<?php echo e($link['id']); ?>">
                        <?php echo e($link['label']); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <a href="<?php echo e(asset('/paulagarcia_cv.pdf')); ?>" download="paulagarcia_cv.pdf"
                   class="ml-4 border border-black px-5 py-1.5 text-sm font-medium hover:bg-black hover:text-white transition-all">
                    Descargar CV
                </a>
            </div>

            
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    
    <div x-show="open" x-transition x-cloak class="md:hidden px-4 pb-4 space-y-2 text-sm tracking-wide uppercase">
        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a @click="open = false"
               href="<?php echo e(route('inicio')); ?>#<?php echo e($link['id']); ?>"
               class="block py-2 nav-link text-gray-700 hover:text-black transition">
                <?php echo e($link['label']); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <a @click="open = false"
           href="<?php echo e(asset('/PaulaGarcia_cv.pdf')); ?>"
           download="PaulaGarcia_cv.pdf"
           class="inline-block border border-black px-5 py-2 text-sm font-medium hover:bg-black hover:text-white transition mt-4">
            Descargar CV
        </a>
    </div>

</nav>
<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/partials/nav.blade.php ENDPATH**/ ?>