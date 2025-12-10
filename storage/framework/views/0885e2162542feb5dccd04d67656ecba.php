<div>
    <main class="max-w-5xl mx-auto px-4 pt-24 pb-16">

        <h1 class="text-4xl font-extrabold text-center text-black mb-12">
            <?php echo e($proyecto['titulo']); ?>

        </h1>

        <div class="grid md:grid-cols-2 gap-12 items-start">
            
            <div class="flex justify-center">
                <img src="<?php echo e(asset('images/proyectos/' . $proyecto['imagen'])); ?>"
                    alt="Imagen del proyecto <?php echo e($proyecto['titulo']); ?>"
                    class="w-[300px] md:w-[400px] lg:w-[450px] h-auto shadow-md object-contain">
            </div>

            
            <div class="flex flex-col gap-6">
                <p class="text-gray-700 text-base leading-relaxed">
                    <?php echo e($proyecto['descripcion']); ?>

                </p>

                <div>
                    <h3 class="text-lg font-semibold text-black mb-2">Tecnologías utilizadas</h3>
                    <div class="flex flex-wrap gap-2">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $proyecto['tecnologias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 border border-gray-300 shadow-sm">
                                <?php echo e($tech); ?>

                            </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-black mb-2">Lo que aprendí</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        <?php echo e($proyecto['aprendizaje']); ?>

                    </p>
                </div>
  
                <div class="flex flex-wrap gap-3 mt-6">
                    <!--[if BLOCK]><![endif]--><?php if(isset($proyecto['github'])): ?>
                        <a href="<?php echo e($proyecto['github']); ?>" target="_blank"
                        class="inline-flex items-center px-4 py-2 border border-gray-900 text-sm font-medium hover:bg-gray-900 hover:text-white transition">
                            Ver código en GitHub
                        </a>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if(isset($proyecto['demo'])): ?>
                        <a href="<?php echo e($proyecto['demo']); ?>" target="_blank"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 underline underline-offset-4 hover:no-underline">
                            Ver demo en vivo
                        </a>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>

        
        <div class="flex justify-between items-center mt-16">
            <!--[if BLOCK]><![endif]--><?php if($anterior): ?>
                <a href="<?php echo e(route('proyectos.detalle', ['slug' => $anterior['slug']])); ?>"
                class="text-sm font-medium text-gray-700 hover:text-black transition">
                    ← <?php echo e($anterior['titulo']); ?>

                </a>
            <?php else: ?>
                <span></span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if($siguiente): ?>
                <a href="<?php echo e(route('proyectos.detalle', ['slug' => $siguiente['slug']])); ?>"
                class="text-sm font-medium text-gray-700 hover:text-black transition">
                    <?php echo e($siguiente['titulo']); ?> →
                </a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

    </main>

</div>
<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/livewire/proyecto-detalle.blade.php ENDPATH**/ ?>