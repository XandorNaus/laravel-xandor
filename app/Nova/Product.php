<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable()->hideFromIndex(),
            Text::make('Titel', 'title')->rules('required')->sortable(),
            Text::make('Subtitel', 'subtitle')->sortable(),
            Text::make('Slug', 'slug')->rules('required')->sortable(),
            Text::make('Artikelnummer', 'article_number')->sortable(),
            Trix::make('Tekst', 'text')->sortable(),
            Currency::make('Prijs', 'price')->currency('EUR')->sortable(),
            Images::make('Afbeeldingen', 'images')->enableExistingMedia(),
            Text::make('YouTube url', 'youtube_url')->hideFromIndex(),
            Boolean::make('Uitgelicht', 'featured')->hideFromIndex(),
            Select::make('Status', 'status')->rules('required')->options(config('den-elzen.status', []))->displayUsingLabels(),
            Boolean::make('Actief', 'active')->withMeta(['value' => $this->active ?? true]),
            Text::make('SEO titel', 'seo_title')->hideFromIndex(),
            Textarea::make('Meta omschrijving', 'seo_meta_description')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
