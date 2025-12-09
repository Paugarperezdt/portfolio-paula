<section id="contacto" class="scroll-mt-24 py-12 px-4 bg-white shadow ring-1 ring-gray-200
 shadow max-w-2xl mx-auto" aria-label="Formulario de contacto">
    <h2 class="text-4xl font-extrabold tracking-tight text-center text-black">
        ¡Escríbeme!
    </h2>
    {{-- Mensaje de éxito mostrado tras enviar el formulario correctamente --}}
    @if (session()->has('success'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="bg-green-100 text-green-800 px-4 py-3 mb-6 text-sm font-medium text-center transition-all duration-300 ease-in-out"
            role="alert"
        >
            {{ session('success') }}
        </div>
    @endif



    
    {{-- Formulario Livewire: evita recarga con wire:submit.prevent --}}
    <form wire:submit.prevent="enviar" class="space-y-5" aria-describedby="form-contacto">
        {{-- Campo: Nombre --}}
        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
            <input type="text" id="nombre" wire:model="nombre"
                   placeholder="Tu nombre"
                   autocomplete="off"
                   class="w-full px-4 py-2 bg-white border border-gray-200 shadow-sm hover:ring-1 hover:ring-gray-500 focus:outline-none focus:ring-2 focus:ring-black @error('nombre') border-red-500 @enderror"
                   aria-invalid="@error('nombre') true @else false @enderror"
                   required>
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Campo: Email --}}
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
            <input type="email" id="email" 
                autocomplete="off"
                wire:model="email"
                placeholder="Tu correo"
                class="w-full px-4 py-2 bg-white border border-gray-200 shadow-sm hover:ring-1 hover:ring-gray-500 focus:outline-none focus:ring-2 focus:ring-black @error('email') border-red-500 @enderror"
                aria-invalid="@error('email') true @else false @enderror"
                   required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Campo: Mensaje --}}
        <div>
            <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
            <textarea id="mensaje" 
            autocomplete="off" 
            wire:model="mensaje" rows="5"
                      placeholder="Escríbeme tu mensaje"
                      class="w-full px-4 py-2 bg-white border border-gray-200 shadow-sm hover:ring-1 hover:ring-gray-500 focus:outline-none focus:ring-2 focus:ring-black @error('mensaje') border-red-500 @enderror"
                      aria-invalid="@error('mensaje') true @else false @enderror"
                      required></textarea>
            @error('mensaje')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Botón de envío --}}
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

@push('scripts')
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
@endpush


