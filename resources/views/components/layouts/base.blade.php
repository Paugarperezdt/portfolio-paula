<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.head') {{-- Metadatos y enlaces comunes --}}
    {{-- Opcional: estilo para que x-cloak oculte el menú móvil hasta que Alpine cargue --}}
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans overflow-x-hidden">

    @include('partials.nav')   {{-- Aquí sí se muestra el nav --}}
    
    {{ $slot }}                {{-- Aquí entra el contenido de welcome.blade.php --}}
    
    @include('partials.footer') {{-- Aquí se incluye el footer --}}
    @livewireScripts

    

    {{-- AlpineJS para que funcione el menú responsive --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    
    @stack('scripts')           {{-- Aquí se insertará el script del reCAPTCHA --}}


</body>
</html>
