<div class="block block-video{{ isset($add_class) ? ' '. $add_class : '' }}">

    @if($block->title != "")
        <h1>{{ $block->title }}</h1>
    @endif

    @if($block->video != "" && getYouTubeCode($block->video))
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ getYouTubeCode($block->video) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    @endif
    <hr>
</div>
