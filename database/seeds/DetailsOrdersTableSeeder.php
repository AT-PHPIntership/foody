<?php

use Illuminate\Database\Seeder;

class DetailsOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\DetailsOrder::class, 5)->create();
    }
}
