<div>
    <section id="proyectos" class="scroll-mt-24 mt-20 max-w-6xl mx-auto px-4" aria-label="Listado de proyectos realizados">
    <h2 class="text-4xl font-extrabold tracking-tight text-center text-black mb-12">
        Proyectos
    </h2>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-2">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="border border-gray-200   hover:shadow-md transition p-5 flex flex-col justify-between min-h-[400px]">
                <img src="<?php echo e(asset('images/proyectos/' . $proyecto['imagen'])); ?>"
                    alt="Imagen del proyecto <?php echo e($proyecto['titulo']); ?>"
                    class="w-auto h-[260px] mx-auto object-contain" />


                <h3 class="text-lg font-semibold text-black mb-2"><?php echo e($proyecto['titulo']); ?></h3>

                <p class="text-sm text-gray-700 flex-grow"><?php echo e($proyecto['descripcion']); ?></p>

                                <div class="flex flex-wrap gap-2 mt-4">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $proyecto['tecnologias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-xs bg-gray-200 text-gray-800 px-2 py-1  font-medium">
                            <?php echo e($tech); ?>

                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <a href="<?php echo e(route('proyectos.detalle', ['slug' => $proyecto['slug']])); ?>"
                class="mt-5 self-start text-sm font-semibold text-white bg-black px-4 py-2 hover:bg-gray-800 transition">
                    Ver proyecto
                </a>

            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</section>


<section id="tecnologias" class="mt-24 max-w-6xl mx-auto px-4 scroll-mt-24 mb-32" aria-label="Tecnologías que utilizo">
    <h2 class="text-4xl font-extrabold tracking-tight text-center text-black mb-12">
        Tecnologías que utilizo
    </h2>

    <?php
        $tecnologias = [
            ['archivo' => 'java.svg', 'nombre' => 'Java'],
            ['archivo' => 'css3.svg', 'nombre' => 'CSS3'],
            ['archivo' => 'html5.svg', 'nombre' => 'HTML5'],
            ['archivo' => 'php.svg', 'nombre' => 'PHP', 'clase_extra' => 'scale-140 mt-1'],
            ['archivo' => 'laravel.svg', 'nombre' => 'Laravel', 'clase_extra' => 'scale-200 mt-1'],
            ['archivo' => 'livewire.svg', 'nombre' => 'Livewire'],
            ['archivo' => 'flutter.svg', 'nombre' => 'Flutter'],
            ['archivo' => 'django.svg', 'nombre' => 'Django'],
        ];
    ?>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 text-center">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tecnologias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="group flex flex-col items-center justify-center transform transition duration-300 hover:scale-105">
                <div class="w-20 h-20 aspect-[1/1] flex items-center justify-center">
                    <img src="<?php echo e(asset('images/icons/' . $tec['archivo'])); ?>"
                         alt="Logo de <?php echo e($tec['nombre']); ?>"
                         class="max-h-full max-w-full object-contain grayscale group-hover:grayscale-0 transition duration-300 ease-in-out <?php echo e($tec['clase_extra'] ?? ''); ?>" />
                </div>
                <p class="mt-3 text-sm font-medium text-gray-800"><?php echo e($tec['nombre']); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</section>


</div>
<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/livewire/proyectos.blade.php ENDPATH**/ ?>