@extends('layouts.app')

@section('content')

    <div class="w-full py-56  shadow-2xl px-34 bg-cover w-full h-32 object-bottom" style="background-image: url('https://images.pexels.com/photos/3861951/pexels-photo-3861951.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">

        <div class="container max-w-7xl mx-autor">
        </div>

    </div>

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col
            text-left  w-full mb-7">

                <h1 class="sm:text-3xl text-2xl text-left font-bold text-pink title-font text-gray-900">{{ $page->title }} </h1>
                <p class="mb-10 font-light"> {!! $page->text !!} </p>

            </div>



    @if($page->blocks->count() > 0)

        <div class="blocks mt-5 mb-5">

            @foreach($page->blocks as $block)

                @if(View::exists('blocks.'. Str::slug($block->name())))
                    @php
                        $add_class = '';
                        if(isset($block->block_style) && $block->block_style != ""){
                            $add_class .= " ". $block->block_style;
                        }
                    @endphp
                    @include('blocks.'. Str::slug($block->name()), ['block' => $block, 'add_class' => $add_class])
                @else
                    <div> BLOCK: 'blocks/{{ Str::slug($block->name()) }}.blade.php' NOT AVAILABLE </div>
                @endif
            @endforeach
        </div>
    @endif
            </div>
        </div>
    </section>

@endsection

