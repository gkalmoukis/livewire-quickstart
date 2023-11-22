<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Status::factory()
            ->count(3)
            ->create();

        \App\Models\Item::factory()->count(10)->create()->each(function ($item){
            $item->statuses()->attach(\App\Models\Status::all()->random());
            $item->statuses()->attach(\App\Models\Status::all()->random());
            $item->statuses()->attach(\App\Models\Status::all()->random());
        });
    }
}
