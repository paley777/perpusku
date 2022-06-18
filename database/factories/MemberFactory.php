<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nis' => $this->faker->unique()->numerify($string = '#####'),
            'nisn' => $this->faker->unique()->numerify($string = '##########'),
            'tgl_lahir' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'alamat' => $this->faker->address(),
            'jenis_kel' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'no_tlp' => $this->faker->unique()->PhoneNumber(),
        ];
    }
}
