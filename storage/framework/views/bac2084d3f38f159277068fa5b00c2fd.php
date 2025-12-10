<section id="contacto" class="scroll-mt-24 py-12 px-4 bg-white shadow ring-1 ring-gray-200
 shadow max-w-2xl mx-auto" aria-label="Formulario de contacto">
    <h2 class="text-4xl font-extrabold tracking-tight text-center text-black">
        ¡Escríbeme!
    </h2>
    
    <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="bg-green-100 text-green-800 px-4 py-3 mb-6 text-sm font-medium text-center transition-all duration-300 ease-in-out"
            role="alert"
        >
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



    
    
    <form wire:submit.prevent="enviar" class="space-y-5" aria-describedby="form-contacto">
        
        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
            <input type="text" id="nombre" wire:model="nombre"
                   placeholder="Tu nombre"
                   autocomplete="off"
                   class="w-full px-4 py-2 bg-white border border-gray-200 shadow-sm hover:ring-1 hover:ring-gray-500 focus:outline-none focus:ring-2 focus:ring-black <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   aria-invalid="<?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> true <?php else: ?> false <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   required>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
            <input type="email" id="email" 
                autocomplete="off"
                wire:model="email"
                placeholder="Tu correo"
                class="w-full px-4 py-2 bg-white border border-gray-200 shadow-sm hover:ring-1 hover:ring-gray-500 focus:outline-none focus:ring-2 focus:ring-black <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                aria-invalid="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> true <?php else: ?> false <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   required>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <div>
            <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
            <textarea id="mensaje" 
            autocomplete="off" 
            wire:model="mensaje" rows="5"
                      placeholder="Escríbeme tu mensaje"
                      class="w-full px-4 py-2 bg-white border border-gray-200 shadow-sm hover:ring-1 hover:ring-gray-500 focus:outline-none focus:ring-2 focus:ring-black <?php $__errorArgs = ['mensaje'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      aria-invalid="<?php $__errorArgs = ['mensaje'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> true <?php else: ?> false <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      required></textarea>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['mensaje'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <div class="text-center pt-2">
            <button type="submit"
                class="bg-black text-white px-6 py-2 hover:bg-gray-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-black transition-all"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
                wire:target="enviar"
            >
                <span wire:loading.remove wire:target="enviar">Enviar mensaje</span>
                <span wire:loading wire:target="enviar">Enviando...</span>
            </button>
        </div>
    </form>
</section>

<?php $__env->startPush('scripts'); ?>
<script>
    Livewire.on('formularioEnviado', () => {
        setTimeout(() => {
            ['nombre','email','mensaje'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.value = '';
            });
        }, 100);
    });
</script>
<?php $__env->stopPush(); ?>


<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/livewire/contacto.blade.php ENDPATH**/ ?>