<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name;

        return [
            'title' => $title,
            'subtitle' => $this->faker->name,
            'slug' => Str::Slug($title),
            'article_number' => $this->faker->randomNumber(),
            'text' => $this->faker->realText(600),
            'price' => '123.22',
            'youtube_url' => '',
            'status' => 100,
            'active' => 1,
            'featured' => 0,
            'seo_title' => "SEO: ". $title,
            'seo_meta_description' => '',
        ];
    }
}
