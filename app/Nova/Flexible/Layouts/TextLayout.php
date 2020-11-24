<?php

namespace App\Nova\Flexible\Layouts;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Spatie\MediaLibrary\HasMedia;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Whitecube\NovaFlexibleContent\Layouts\Layout;


class TextLayout extends Layout implements HasMedia
{
    use HasMediaLibrary;
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'text';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Tekst';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Titel', 'title'),
            Trix::make('Tekst', 'text'),
            Images::make('Afbeeldingen', 'images')->conversionOnIndexView('thumb')->conversionOnDetailView('thumb')->hideFromIndex(),
        ];
    }

}
