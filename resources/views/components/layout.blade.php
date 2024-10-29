
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'X') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/logo' ) . '/' . 'DananerLogo.png' }}" type="image/x-icon">

<!-- Open Graph Image -->
<meta property="og:image" content="/path-to-your-image/social-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<!-- Apple Touch Icon -->
<link rel="apple-touch-icon" href="{{ asset('storage/logo' ) . '/' . 'DananerLogo.png' }}">

        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <div class="min-h-screen bg-gray-800" 
      >
          

            <!-- Page Heading -->
         
             <header class="bg-gray-800 shadow">
                <nav class="bg-gray-800">
                   <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                  <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                      <!-- Mobile menu button-->

                    
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                      <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src=" {{ asset('storage/logo' ) . '/' . 'DananerLogo.png'}}" alt="Your Company">
                      </div>
                      <div class="hidden md:block">
                      <div class="flex m-4 space-x-4">
                          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                          <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                          <svg id="i-home" class="m-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                             <path d="M12 20 L12 30 4 30 4 12 16 2 28 12 28 30 20 30 20 20 Z" />
                          </svg>
                          {{ __('Home') }}
                          
                         </x-nav-link>
                          <x-nav-link :href="route('finals.index')" :active="request()->routeIs('finals.index')">
                          {{ __('Finals') }}
                         </x-nav-link>
                        
                          <x-nav-link :href="route('finals.create')" :active="request()->routeIs('finals.create')">
                          {{ __('Create Final') }}
                         </x-nav-link>
                       
                        </div>
                       
                      </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                      
                      <!-- Profile dropdown -->
                 
                    </div>
                  </div>
                   </div>
                </nav>
             </header>

            <!-- Page Content -->
     
            {{ $slot }}
       
        </div>
    </body>
</html>
