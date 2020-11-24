<div class="block block-text{{ isset($add_class) ? ' '. $add_class : '' }}">

    @if($block->title != "")
        <h1>{{ $block->title }}</h1>
    @endif

    @if($block->text != "")
        <div>
            {!! $block->text !!}
        </div>
    @endif
    <hr>
</div>
