@extends('layouts.app')

@section('content')

    <div class="w-full py-56 shadow-2xl px-34 bg-cover bg-no-repeat bg-center relative z-30" style="background-image: url('https://images.pexels.com/photos/374016/pexels-photo-374016.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">

    </div>

    <body>

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
    <div class="lg:container lg:mx-auto text-black justify-center ml-20 py-6">
        <!-- /hero -->
        @if(method_exists($products,'render'))
            <div>
                {{ $products->render() }}
            </div>

    </body>

    </div>

    </div>
    @endif

@endsection
