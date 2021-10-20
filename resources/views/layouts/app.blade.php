<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{-- <script src="https://kit.fontawesome.com/f5ade48764.js" crossorigin="anonymous"></script> --}}
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100" >

            <!-- Page Heading -->
                {{-- @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto bg-gray-500 py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }} test
                        </div>
                    </header>
                @endif --}}

            <!-- Page Content -->
            <main class="flex">
                <aside class="relative bg-gray-800 min-h-screen w-64 hidden sm:block shadow-xl">
                    <div class="p-6">
                        <a href="index.html" class="text-white text-2xl font-semibold uppercase hover:text-gray-300 text-center">ARFFS</a>
                        <button class="w-full bg-red-600 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 flex items-center justify-center">
                           <i class="fas fa-plus mr-3"></i> New Report
                        </button>
                    </div>
                    <nav class="text-white text-base font-semibold pt-3">
                        <a href="{{url('/dashboard')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                            <i class="fas fa-tachometer-alt mr-3"></i> 
                            Dashboard
                        </a>
                        <a href="{{url('/fire')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                            <i class="fas fa-fire mr-3"></i>
                            Fire Incidents
                        </a>
                        <a href="{{url('/ambulance')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                            <i class="fas fa-ambulance mr-3"></i>
                           Ambulance
                        </a>
                        <a href="{{url('/fire-meduims')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                            <i class="fas fa-fire-extinguisher mr-3"></i>
                            Mediums
                        </a>
                        <a href="{{url('/crews')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                          <i class="fas fa-users mr-3"></i>
                            Crews
                        </a>

                        <a href="{{url('/ranks')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                            <i class="fas fa-shield-alt mr-3"></i>
                          {{-- <i class="fas fa-users mr-3"></i> --}}
                            Ranks
                        </a>
                        <a href="{{url('/personnel')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                            <i class="fas fa-shield-alt mr-3"></i>
                          {{-- <i class="fas fa-users mr-3"></i> --}}
                            Personnels
                        </a>
                       
                        
                    </nav>
             
                </aside>

             <div class="w-full flex flex-col h-100 overflow-x-hidden relative">
                @livewire('navigation-menu')
                {{ $slot }}
             </div>
             

            
                   
                
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
