<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(2)->create()->each(function ($customer) {
            Report::factory()->count(2)->make()->each(function ($report) use ($customer) {
                $customer->reports()->save($report);
            });
        });
    }
}
