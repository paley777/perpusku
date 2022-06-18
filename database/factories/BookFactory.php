<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 8)),
            'kategori' => $this->faker->sentence(mt_rand(1, 2)),
            'pengarang' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'tahun_terbit' => $this->faker->year(),
            'stok' => $this->faker->randomDigit(),
        ];
    }
}
