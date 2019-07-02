<?php

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
         $users=factory(App\User::class,100)->create();
         $books=factory(App\Book::class,100)->create();
         $books=factory(App\Admin::class,1)->create();
    }
}