<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
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
            'nip' => $this->faker->unique()->numerify($string = '##########'),
            'tgl_lahir' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'jenis_kel' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'no_tlp' => $this->faker->unique()->PhoneNumber(),
            'username' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('admin'),
            'jabatan' => 'Administrator',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [];
        });
    }
}
