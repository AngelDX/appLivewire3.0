<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @wireUiScripts

        <!-- Styles -->
        @livewireStyles

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    </head>
    <body class="font-sans antialiased">
<<<<<<< HEAD
    <!-- https://tailwindcomponents.com/component/dashboard-template/landing -->
        <div>
            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
                @livewire('admin.sidebar')
                <div class="flex flex-col flex-1 overflow-hidden">
                    @livewire('admin.header')
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                        <div class="container px-6 py-8 mx-auto">
                            {{ $slot }}
                        </div>
                    </main>
                </div>
            </div>
=======
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <x-dialog />
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
>>>>>>> 4f7bbf501885d5a65a33e601cb158cdbadbb188d
        </div>

        @stack('modals')

        @livewireScripts
        <script type="text/javascript">
            Livewire.on('sweetalert',({message})=>{
                Swal.fire(
                'Mensaje del sistema',
                message,
                'success'
                )
            })
        </script>
        @stack('js')
    </body>
</html>




