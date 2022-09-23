<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\BooksFiles;
use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\Position;
use App\Models\Role;
use App\Models\Status;
use App\Models\Task;
use App\Models\Type;
use App\Models\User;
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
        Status::factory(3)->create();
        Type::factory(20)->create();
        Format::factory(10)->create();
        Order::factory(30)->create();
        Position::factory(10)->create();
        Role::factory(4)->create();
        User::factory(20)->create();
        Task::factory(40)->create();
        BooksFiles::factory(50)->create();
    }
}
