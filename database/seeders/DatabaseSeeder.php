<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\Type;
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
//        Type::factory(20)->create();
//        Format::factory(10)->create();
        Order::factory(30)->create();
    }
}
