<?php

namespace Tests\Browser\Admin\Products;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Admin\AdminTestCase;
use App\Models\Product;
use App\Models\Store;
use App\Models\Category;
use Tests\Browser\Pages\Admin\Product\ShowProduct;

class ShowProductTest extends AdminTestCase
{
    use DatabaseMigrations;

    /**
    * Override function setUp() for make user login
    *
    * @return void
    */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * A Dusk test show list user.
     *
     * @return void
     */
    public function test_show_list_products()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit(new ShowProduct);
        });
    }

    /**
     * Test view Admin List Products with pagination
     *
     * @return void
     */
    public function test_list_products_pagination()
    {
        $this->browse(function (Browser $browser) {
            factory(Store::class, 5)->create();
            factory(Category::class,5)->create();
            factory(Product::class, 10)->create();
            $browser->loginAs($this->user);

            $elements = $browser->visit(new ShowProduct)
                                ->elements('.table-responsive table tbody tr');
            $numRecord = count($elements);
            $this->assertTrue($numRecord == 5);
            $elements = $browser->visit('/admin/products?page=8')
                                ->elements('.table-responsive table tbody tr');
            $numRecord = count($elements);
            $this->assertTrue($numRecord == 0);
        });
    }
}
