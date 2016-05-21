<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call('CategoriesSeeder');

        $this->call('ProductsSeeder');

        $this->call('UsersSeeder');


    }
}
