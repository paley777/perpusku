<?php

namespace Database\Seeders;
use App\Models\Book;
use App\Models\User;
use App\Models\Member;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Book::factory(100)->create();
        User::factory(3)->create();
        // Member::factory(100)->create();
    }
}
