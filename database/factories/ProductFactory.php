<?php

namespace Database\Factories;

use App\Livewire\Pw\Product;
use App\Models\UnitMeasure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = Product::class;
    public function definition(): array {
        /*return [
            'product_category_id',
            'product_type_id',
            'product_model_id',
            'unit_measure_id',
            'code',
            'product_color_id',
            'description',
            'detail',
            'characteristics',
            'specifications',
            'image',
            'stock',
            'price_min',
            'price_max',
            'discount',
            'offer',
            'batch',
            'expiration_date',
            'is_active',
            'created_at',
        ];*/
        $um = UnitMeasure::inRandomOrder()->first();

        return [
            'product_category_id'   => \App\Models\ProductCategory::factory(),
            'product_type_id'       => \App\Models\ProductType::factory(),
            'product_model_id'      => \App\Models\ProductModel::factory(),
            'unit_measure_id'       => $um->id,
            'code'                  => $this->faker->unique()->bothify('PROD-#####'),
            'product_color_id'      => \App\Models\ProductColor::factory(),
            'description'           => $this->faker->sentence(6),
            'detail'                => $this->faker->paragraph(3),
            'characteristics'       => $this->faker->paragraph(2),
            'specifications'        => json_encode([
                'weight'            => $this->faker->randomFloat(2, 0.1, 10),
                'dimensions'        => $this->faker->randomElement(['10x20x30', '15x25x35', '20x30x40']),
                'material'          => $this->faker->randomElement(['Plástico', 'Metal', 'Madera', 'Vidrio'])
            ]),
            'image' => $this->faker->randomElement([
                'products/product1.jpg',
                'products/product2.jpg',
                'products/product3.jpg'
            ]),
            'stock'             => $this->faker->numberBetween(0, 100),
            'price_min'         => $this->faker->randomFloat(2, 10, 50),
            'price_max'         => $this->faker->randomFloat(2, 51, 200),
            'discount'          => $this->faker->numberBetween(0, 50),
            'offer'             => $this->faker->boolean(30), // 30% de probabilidad de estar en oferta
            'batch'             => $this->faker->bothify('BATCH-####'),
            'expiration_date'   => $this->faker->dateTimeBetween('+1 month', '+2 years'),
            'is_active'         => $this->faker->boolean(80), // 80% de probabilidad de estar activo
            'created_at'        => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => true,
        ]);
    }

    /**
     * Indicate that the product is inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }

    /**
     * Indicate that the product is on offer.
     */
    public function onOffer(): static
    {
        return $this->state(fn (array $attributes) => [
            'offer' => true,
            'discount' => $this->faker->numberBetween(10, 50),
        ]);
    }

    /**
     * Indicate that the product is out of stock.
     */
    public function outOfStock(): static
    {
        return $this->state(fn (array $attributes) => [
            'stock' => 0,
        ]);
    }

    /**
     * Indicate that the product has high stock.
     */
    public function highStock(): static
    {
        return $this->state(fn (array $attributes) => [
            'stock' => $this->faker->numberBetween(50, 200),
        ]);
    }
}
