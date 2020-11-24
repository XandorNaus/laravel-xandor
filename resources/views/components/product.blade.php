<div>
    <div {{ $attributes->merge(['class' => 'border m-2 p-2']) }}>
        <h1 class="text-4xl text-orange-400">{{ $title }}</h1>
        {{ $slot }}

        @isset($price)
        <div>{!! $price !!}</div>
        @endisset

        @isset($button)
            {{ $button }}
        @else
            <a href="{{ route('product.index') }}" class="inline-block px-4 py-2 text-white bg-yellow-400 rounded mt-2 hover:text-black">&raquo; Show index</a>
        @endisset

    </div>
</div>
