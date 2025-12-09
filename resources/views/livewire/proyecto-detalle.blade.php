<div>
    <main class="max-w-5xl mx-auto px-4 pt-24 pb-16">

        <h1 class="text-4xl font-extrabold text-center text-black mb-12">
            {{ $proyecto['titulo'] }}
        </h1>

        <div class="grid md:grid-cols-2 gap-12 items-start">
            {{-- Imagen del proyecto --}}
            <div class="flex justify-center">
                <img src="{{ asset('images/proyectos/' . $proyecto['imagen']) }}"
                    alt="Imagen del proyecto {{ $proyecto['titulo'] }}"
                    class="w-[300px] md:w-[400px] lg:w-[450px] h-auto shadow-md object-contain">
            </div>

            {{-- Información del proyecto --}}
            <div class="flex flex-col gap-6">
                <p class="text-gray-700 text-base leading-relaxed">
                    {{ $proyecto['descripcion'] }}
                </p>

                <div>
                    <h3 class="text-lg font-semibold text-black mb-2">Tecnologías utilizadas</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($proyecto['tecnologias'] as $tech)
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 border border-gray-300 shadow-sm">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-black mb-2">Lo que aprendí</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        {{ $proyecto['aprendizaje'] }}
                    </p>
                </div>

                @if ($proyecto['github'])
                    <a href="{{ $proyecto['github'] }}" target="_blank"
                    class="mt-4 inline-block text-sm font-semibold text-white bg-black px-5 py-2 hover:bg-gray-800 transition">
                        Ver en GitHub
                    </a>
                @endif
            </div>
        </div>

        {{-- Navegación entre proyectos --}}
        <div class="flex justify-between items-center mt-16">
            @if ($anterior)
                <a href="{{ route('proyectos.detalle', ['slug' => $anterior['slug']]) }}"
                class="text-sm font-medium text-gray-700 hover:text-black transition">
                    ← {{ $anterior['titulo'] }}
                </a>
            @else
                <span></span>
            @endif

            @if ($siguiente)
                <a href="{{ route('proyectos.detalle', ['slug' => $siguiente['slug']]) }}"
                class="text-sm font-medium text-gray-700 hover:text-black transition">
                    {{ $siguiente['titulo'] }} →
                </a>
            @endif
        </div>

    </main>

</div>
