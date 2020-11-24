@extends('layouts.app')

@section('content')

    <div class="w-full py-56 shadow-2xl px-34 bg-cover bg-no-repeat bg-center relative z-30" style="background-image: url('https://images.pexels.com/photos/6224/hands-people-woman-working.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">

        <div class="container max-w-7xl mx-auto text-center">
        </div>

    </div>

    <!-- /home content -->

    <!-- about -->
    <section class="text-gray text-center body-font color bg-white w-full bg-cover w-full object-top">
        <div class="container px-7 py-20 mx-auto">

            <div class="flex flex-wrap " >
                <div class="h-full bg-gray p-8 rounded">

                    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                        <h1 class="sm:text-3xl text-2xl font-bold  title-font mb-4 text-pink">Contactgegevens</h1>
                        <p class="mb-5 mt-5 text-black font-light">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

                    </div>

                </div>
            </div>
    </section>

    <section class="text-gray-700 body-font relative">
        <div class="container px-5 p-4 mx-auto mb-5">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-bold  title-font mb-4 text-pink">Neem contact met ons op</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text">
                    </div>
                    <div class="p-2 w-1/2">
                        <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email">
                    </div>
                    <div class="p-2 w-full">
                        <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" placeholder="Message"></textarea>
                    </div>
                    <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    </div>

                    <button class="rounded bg-pink text-white px-4 py-3 no-underline">
                    Versturen &raquo;
                    </button>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


