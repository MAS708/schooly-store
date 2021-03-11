<?php

namespace App\Widgets;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        if(auth()->user()->hasRole('seller'))
        {
            $count =  Product::where('shop_id', auth()->user()->shop->id)->count();
        } else
        {
            $count =  Product::count();
        }

        $string = trans_choice('dimmer.product', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-basket',
            'title'  => "{$count} Products",
            'text'   => "You have {$count} Products in your database. Click on button below to view all Products.",
            'button' => [
                'text' => "View All Products",
                'link' => route('voyager.products.index'),
            ],
            'image' => asset('default02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Product::class));
    }
}
