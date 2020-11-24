@extends('layouts.app')

@section('content')

    <!-- /navigation -->

    <!-- hero -->
    <div class="bg-no-repeat bg-top w-full py-56 px-34 bg-cover w-full h-32 object-bottom" style="background-image: url('https://scontent-ams4-1.xx.fbcdn.net/v/t1.0-9/120617102_3944079185642680_8097579894794805658_o.jpg?_nc_cat=104&ccb=2&_nc_sid=2c4854&_nc_ohc=Z4ZXm9SxtncAX9dRh-Z&_nc_ht=scontent-ams4-1.xx&oh=5dbd3fdf877c4dda91c015e9f9f14bd9&oe=5FC7D098');">

        <div class="container max-w-7xl mx-auto text-center">
        </div>

    </div>
    <!-- /hero -->

    <!-- home content -->
    <!-- /about -->

    <section class="text-gray-700 bg-pink body-font">
        <div class="container px-5 py-24 text-center text-white mx-auto">

            <svg class="w-full bg-cover w-full object-top mb-10 animate-bounce text-center w-6 h-8 text-gray-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>

            <h1 class="text-3xl font-medium title-font text-white mb-5 text-center">Nettt Interactieve Media</h1>
            <div class="xl:w-1/2 lg:w-3/4 w-full text-white mx-auto text-center">

                <p class="mb-10 font-light">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

                <button class="rounded bg-white items-center text-pink px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                    Lees verder &raquo;
                </button>

            </div>
        </div>
    </section>

    <!-- /nieuws -->
    <section class="text-gray-700 mb-20 bg-white body-font">
        <div id="products">
            <h1 class="text-4xl font-bold title-font text-pink mt-10 mb-5 text-center">Nieuws</h1>
            <div class="w-full px-10 py-3 text-left bg-white-300 text-pink leading-normal">
                <div class="container max-w7xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">


                @foreach($news as $item)


                                <x-product title="{{ $item->title }}" class="p-8 text-pink text-1xl font-medium " price="{!! $item->price_formatted !!}">
                                    <div class="prose max-w-none text-black mt-10 mb-10 font-light">{!! $item->text !!}</div>

                                    <x-slot name="button">
                                        <a href="{{ $item->permalink }}" class="inline-block px-4 py-2 items-center text-center text-pink bg-white rounded mt-2 hover:text-black">Lees verder &raquo;</a>
                                    </x-slot>

                                </x-product>

                                @endforeach</div>
                <div class="mt-10 text-center">
                    <button class="rounded bg-pink items-center text-white px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                       Bekijk alle nieuwsberichten &raquo;
                    </button>
                </div>
            </div>

    </section>



<!-- /home content -->

    <!-- about -->
    <section class="bg-no-repeat bg-center text-gray-700 text-center body-font color bg-gray-800 w-full bg-cover w-full object-top" style="background-image: url('https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/121197731_3970574902993108_9165789037331815850_o.jpg?_nc_cat=102&ccb=2&_nc_sid=2c4854&_nc_ohc=Z29OB09q03YAX9p5dan&_nc_ht=scontent-amt2-1.xx&oh=1e1b522c94a1bf3ef090cdf2f24fe339&oe=5FC67F6F');">
        <div class="container px-5 py-24 mx-auto">

            <div class="flex flex-wrap  -m-4" >


                    <div class="h-full bg-white shadow-xl bg-gray-200 p-8 rounded"> <h1 class="text-3xl font-medium title-font text-pink mb-7 text-center">Over ons</h1>

                        <div class="xl:w-1/2 lg:w-3/4 w-full text-whitte mx-auto text-center">

                            <p class="mb-10 font-light">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

                            <button class="rounded bg-pink items-center text-white px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                                Lees verder &raquo;
                            </button>

                            <svg class="animate-bounce w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>

                        </div>

            </div>
        </div>
    </section>

    <!-- /about -->

    <section class="text-gray-700 bg-pink body-font">
        <div class="container px-5 py-24 text-center text-white mx-auto">
            <h1 class="text-3xl font-medium title-font text-white mb-5 text-center">Diensten</h1>
            <div class="xl:w-1/2 lg:w-3/4 w-full text-white mx-auto text-center">

                <p class="mb-10 font-light">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

                <button class="rounded bg-white items-center text-pink px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                    Lees verder &raquo;
                </button>


            </div>
        </div>

    </section>

    <!-- /nieuws -->
    <section class="text-gray-700 mb-20 bg-white body-font">
        <div id="products">
            <h1 class="text-3xl font-bold title-font mt-10 text-pink mb-7 text-center">Projecten</h1>
            <div class="w-full px-10 py-3 text-left bg-white-300 text-pink leading-normal">
                <div class="container max-w7xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">

                    @foreach($products as $product)

                        <div class="w-1/3 text 1-xltext-pink bg-white rounded">

                            <x-product title="{{ $product->title }}" class="p-8 text-pink text-1xl font-medium">
                                <div class="prose max-w-none text-black mt-10 mb-10 font-light">{!! $product->text !!}</div>

                                <x-slot name="button">
                                    <a href="{{ $product->permalink }}" class="inline-block px-4 py-2 text-pink bg-white rounded mt-2 transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 hover:text-black">Lees verder &raquo;</a>
                                </x-slot>

                            </x-product>

                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="bg-no-repeat bg-center text-gray-700 text-center body-font color bg-gray-800 w-full bg-cover w-full object-top" style="background-image: url('https://images.pexels.com/photos/273214/pexels-photo-273214.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
        <div class="container px-9 py-24 mx-auto">

            <div class="flex flex-wrap m-4" >
                <div class="p-4 md:w-1/2 w-full" >
                    <div class="h-full bg-pink bg-gray-200 shadow-xl p-8 rounded"> <h1 class="text-3xl font-medium title-font text-white mb-5 text-center">Locatie</h1>

                        <p class="text-white leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>

                        <button class="rounded bg-white items-center text-pink px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                            Lees verder &raquo;
                        </button>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-white bg-gray-200 shadow-xl p-8 rounded"> <h1 class="text-3xl font-medium title-font text-pink mb-5 text-center">Over ons</h1>

                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>

                        <button class="rounded bg-pink items-center text-white px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                            Lees verder &raquo;
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
