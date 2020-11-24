@extends('layouts.app')

@section('content')

    <!-- hero -->
    <div class="w-full py-56 px-34 shadow-2xl bg-cover mnb-10 bg-no-repeat bg-center relative z-30" style="background-image: url('https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">

        <div class="container max-w7xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
        </div>
    </div>

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col
            text-left  w-full mb-7">

            </div>

            <div id=product">
                <div class= "mt-10 mb-10">

                    <div class="mt-10 ml-40 mr-40 text-4xl text-pink font-medium">{{ $product->title }}</div>
                    <div class="mt-10 ml-40 mr-40 text-2xl text-pink font-medium">{{ $product->subtitle }}</div>
                    <div class="prose ml-40 mr-40 mb-10 max-w-text-pink">{!! $product->text !!}</div>

                    <button class="rounded bg-pink ml-40 items-center ml-4 text-white px-4 py-3 no-underline text-pink transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 transition ease-in-out duration-300 ...">
                        Ga terug naar home
                    </button>


                </div>
    </div>
    </section>

@endsection
