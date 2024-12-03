<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importación correcta de DB

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'Ordered'],
            ['name' => 'In Process'],
            ['name' => 'In Route'],
            ['name' => 'Delivered'],
        ]);
    }
}
