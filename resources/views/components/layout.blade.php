<!DOCTYPE html>
<html class="dark" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title ?? 'Kofa Crown Hotel' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Cairo:wght@400;700&family=IBM+Plex+Sans+Arabic:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <!-- CSS and JS (Direct Paths) -->
    <link rel="stylesheet" href="/css/app.css" />
    <script src="/js/app.js" defer></script>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container overflow-x-hidden w-full relative">
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>