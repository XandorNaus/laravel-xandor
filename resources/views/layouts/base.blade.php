<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

		<link rel="shortcut icon" href="{{ url(asset('data:image/jpeg;base64,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')) }}">
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

    <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-0 flex-col  md:flex-row items-center">

            <div class="flex w-full justify-between ">
                <div class="inline-flex transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-80 transition ease-in-out duration-300">
                    <a href="{{ route('home') }}">
                        <img src="data:image/jpeg;base64,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" class="w-full " />
                    </a>
                </div>
                <div class="inline-flex">
                    <div class="block">
                    <nav class="block md-auto ml-auto mt-10 text-base font-light w-full text-right">
                        <a href="/" class="mr-10 hover:text-gray-900">Over ons</a>

                        <a href="/form" class="mr-10  hover:text-gray-900">Contact</a>

                        <div class="pt-2 relative mx-auto text-gray-600 inline-block">
                            <input class="border border-gray-300 bg-white h-10 px-4 pr-12 rounded text-sm focus:outline-none"
                                   type="search" name="search" placeholder="Search">
                            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                     viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                     width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
                            </button>
                        </div>
                    </nav>

                    <nav class="block md:ml-auto items-center mt-4 text-base font-bold w-full text-right">
                        <a href="/products" class="mr-5 ml-2 mr-2 hover:text-gray-900">Projecten</a>
                        <a href="/news" class="mr-5 ml-2 mr-2 hover:text-gray-900">Nieuws</a>
                        <a href="/diensten" class="mr-5 ml-2 mr-2 hover:text-gray-900">Diensten</a>
                        <a href="nettt/" class="mr-5 ml-2 mr-2 hover:text-gray-900 ">Nettt</a>
                    </nav>
                    </div>
                </div>
            </div>
                </div>

    </header>

        @yield('body')

    <!-- footer -->

    <footer class="text-gray-700 body-font">
        <div class="container px-10 py-14 mt-6  mx-auto">
            <div class="flex w-full justify-between">
                <div class="transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-80 transition ease-in-out duration-300 inline-flex">
                    <a href="{{ route('home') }}">
                        <img src="data:image/jpeg;base64,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" class="w-full " />
                    </a>
                </div>
                <div class="lg:w-1/4 md:w-1/4 w-full mt-8 mr-10 ml-10 px-10">
                    <nav class="list-none mb-4">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800 font-bold">Nettt Interactieve Media</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Webdesign in Herkenbosch</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Stationsweg 84</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">6075 CD, Herkenbosch</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/4 w-full mt-8 mr-10 ml-2 px-10">
                    <nav class="list-none mb-4">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800 font-bold">Contact</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">0475 358 905</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">info@nettt.nl</a>
                        </li>

                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full mt-10 px-4 ml-10">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-2">Volg ons op sociale media:</h2>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-5 transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-5 transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-5 transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
                </div>
            </div>
        </div>

    </footer>

    <footer class="w-full bg-white mt-7 text-black px-6 border-t">
        <div class="container mx-auto  text-black py-6 flex flex-wrap md:flex-no-wrap  justify-between items-center text-sm">
            &copy;2021 Nettt Interactieve Media. All rights reserved.
            <div class="pt-4 md:p-0 text-center md:text-right text-xs">
                <a href="#" class="text-black no-underline hover:underline">Privacy Policy</a>
                <a href="#" class="text-black no-underline hover:underline ml-4">Terms &amp; Conditions</a>
                <a href="#" class="text-black no-underline hover:underline ml-4">Nettt</a>
            </div>
        </div>
    </footer>
    <!-- /footer -->

        @livewireScripts

    </body>
</html>
