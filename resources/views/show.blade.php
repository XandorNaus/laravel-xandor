@extends('layouts.app')

@section('content')

    <!-- hero -->
    <div class="w-full py-56 px-34 bg-cover bg-no-repeat bg-center relative z-30" style="background-image: url('https://scontent-ams4-1.xx.fbcdn.net/v/t1.0-9/107000679_3646249568758978_249122023679743430_o.jpg?_nc_cat=104&ccb=2&_nc_sid=2c4854&_nc_ohc=CYdNkVLghdkAX-xBsTc&_nc_ht=scontent-ams4-1.xx&oh=6ae3b18f8d3f175889f5d200b8f80aa0&oe=5FC75669');">

        <div class="container max-w-7xl mx-auto text-center">
        </div>

    </div>

    <div id="product">

        <x-product title="{{ $product->title }}">

            <div class="text-2xl">{{ $product->subtitle }}</div>
            <div class="prose max-w-none">{!! $product->text !!}</div>

        </x-product>



    </div>

    <div id="product">

        <x-product title="{{ $product->title }}">

            <div class="text-2xl">{{ $product->subtitle }}</div>
            <div class="prose max-w-text-pink">{!! $product->text !!}</div>


        </x-product>


    </div>

@endsection
