<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Category::class, 7)->create();
        factory(App\Models\Category::class, 10)->states('parent')->create();
    }
}
