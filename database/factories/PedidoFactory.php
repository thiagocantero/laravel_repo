<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'detalhes'       => $this->faker->sentences(4, true),
            'cliente'         => $this->faker->name(),
            'foi_concluida' => $this->faker->boolean(),
        ];
    }
}
