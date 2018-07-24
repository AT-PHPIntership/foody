<?php

use Illuminate\Database\Seeder;

class ShopOpeningStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ShopOpeningStatus::class, 5)->create();
    }
}
