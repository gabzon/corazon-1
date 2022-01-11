<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GSK345PG0Y">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-GSK345PG0Y');
    </script>

    {{ $css ?? ''}}
    @livewireStyles
    @bukStyles(true)

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />
    <div class="h-screen overflow-hidden bg-gray-100 flex flex-col">
        <!-- Top nav-->
        <x-layout.navbar />

        <!-- Bottom section -->
        <div class="min-h-0 flex-1 flex overflow-hidden">
            <!-- Narrow sidebar-->
            <x-layout.sidebar />


            @if (session()->has('success'))
            <x-partials.flash-message />
            @endif

            @if (session()->has('warning'))
            <x-partials.flash-message type="warning" />
            @endif

            <!-- Main area -->
            <main class="min-w-0 flex-1 border-t border-gray-200 lg:flex z-0 overflow-hidden">
                <section class="min-w-0 flex-1 max-h-screen flex flex-col overflow-hidden lg:order-last">

                    <!-- Page Heading -->
                    @if (isset($header))
                    <header class="bg-gray-50 shadow z-10">
                        <div class="max-w-full mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                    @endif

                    <x-impersonate />

                    <div class="sm:max-h-screen">
                        {{ $slot }}
                    </div>

                </section>

                @if (isset($aside))
                <!-- Secondary column (hidden on smaller screens) -->
                <aside class="hidden lg:block lg:flex-shrink-0 lg:order-first">
                    <div class="h-full relative flex flex-col w-96 border-r border-gray-200 bg-gray-100">
                        {{$aside}}
                    </div>
                </aside>
                @endif
            </main>
        </div>
    </div>

    {{-- @livewire('navigation-menu') --}}

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    @stack('scripts')
    @stack('modals')

    @livewireScripts
    @bukScripts(true)
</body>

</html>