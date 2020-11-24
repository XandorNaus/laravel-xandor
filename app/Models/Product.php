<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    public function scopeActive($q){

        return $q->where('active', 1);

    }

    public function scopeInStock($q){
        return $q->where('status', '!=', 300);
    }

    public function scopeInStockAndActive($q){

        return $q->active()->inStock();

    }

    public function getPermalinkAttribute(){

        return route('product.show', ['slug' => $this->slug]);

    }

    public function getPriceFormattedAttribute(){

        return "&euro; ". str_replace(",00", ",-", number_format($this->price, 2, ",", ""));

    }

    public function getStatusLabelAttribute(){

        return config('den-elzen.status', [])[$this->status] ?? '';

    }

}
