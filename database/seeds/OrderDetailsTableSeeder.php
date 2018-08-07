<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //factory(App\Models\OrderDetail::class, 7)->create();
        $inputId = Order::doesntHave('orderDetail')->pluck('id')->toArray();
        $inputCount = count($inputId);
        for ($i = 0; $i < $inputCount; $i++) {
            factory(App\Models\OrderDetail::class,2)->create([
                'order_id' => $faker->unique()->randomElement($inputId),
            ]);
        }
    }
}
