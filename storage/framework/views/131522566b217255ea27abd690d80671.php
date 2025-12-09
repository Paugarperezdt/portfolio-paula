<?php
$socialLinks = [
    [
        'href' => 'https://github.com/Paugarperezdt',
        'icon' => 'devicon-github-original',
        'label' => 'GitHub de Paula García',
    ],
    [
        'href' => 'https://es.linkedin.com/in/paula-garcia-perez-de-tudela-85669a101',
        'icon' => 'devicon-linkedin-plain',
        'label' => 'LinkedIn de Paula García',
    ],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

<footer class="bg-black text-white py-8 mt-20">
  <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">
    
    <p class="text-sm text-gray-400">© 2025 Paula García</p>
    
    <div class="flex space-x-6">
      <?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($link['href']); ?>"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="<?php echo e($link['label']); ?>"
           class="hover:text-white text-gray-400 transition">
          <i class="<?php echo e($link['icon']); ?> text-2xl"></i>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>
  <div x-data="{ visible: false }"
     x-init="window.addEventListener('scroll', () => visible = window.scrollY > 200)"
     x-show="visible"
     x-transition
     class="fixed bottom-8 right-8 bg-black hover:bg-gray-900 text-white p-3 rounded-full transition z-50 shadow cursor-pointer"
     @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
     aria-label="Subir al inicio">
    <span class="material-icons text-xl">arrow_upward</span>
</div>

</footer>
<?php /**PATH C:\Users\pauga\Desktop\portfolio\resources\views/partials/footer.blade.php ENDPATH**/ ?>