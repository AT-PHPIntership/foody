<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;
use App\Models\OrderDetail;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $inputIdOrder = Order::doesntHave('orderDetail')->pluck('id')->toArray();
        $inputCountOrder = count($inputIdOrder);
        for ($i = 1; $i <= $inputCountOrder; $i++) {
            factory(App\Models\OrderDetail::class,2)->create([
                'order_id' => $i,
            ]);
        }
    }
}
