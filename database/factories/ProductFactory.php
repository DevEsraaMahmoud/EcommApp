<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Subsubcategory;

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
        return [
            'category_id' => Category::factory(),
            'subcategory_id' => Subcategory::factory(),
            'subsubcategory_id' => Subsubcategory::factory(),
            'product_name' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'product_slug' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'product_code' => $this->faker->randomFloat(2, 0, 999999.99),
            'product_qty' => $this->faker->randomFloat(2, 0, 999999.99),
            'product_tag' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'product_size' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'product_color' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'selling_price' => $this->faker->randomFloat(2, 0, 999999.99),
            'discount_price' => $this->faker->randomFloat(2, 0, 999999.99),
            'short_descp' => $this->faker->text,
            'long_descp' => $this->faker->text,
            'product_thambnail' => $this->faker->text,
            'hot_deals' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'featured' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'special_offer' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'special_deals' => $this->faker->regexify('[A-Za-z0-9]{191}'),
            'status' => $this->faker->randomFloat(2, 0, 999999.99),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
