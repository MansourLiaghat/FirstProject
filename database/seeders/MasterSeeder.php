<?php

namespace Database\Seeders;

use App\Models\master;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        master::factory()->count(3)->create();
    }
}
