<?php

namespace Database\Seeders;

use App\Models\UserComplain;
use Illuminate\Database\Seeder;

class UserComplainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserComplain::factory()->times(50)->create();
    }
}
