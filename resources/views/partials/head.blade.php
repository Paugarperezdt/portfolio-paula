<title>{{ $title ?? 'Portfolio de Paula' }}</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio profesional de Paula García, desarrolladora de aplicaciones multiplataforma.">
<meta name="author" content="Paula García">

<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles

{{-- Tipografía e iconos --}}
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
