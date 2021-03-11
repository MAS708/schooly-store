<?php

namespace App\Widgets;

use App\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class ShopDimmer extends BaseDimmer
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
            $count =  Shop::where('user_id', auth()->id())->count();
        } else
        {
            $count =  Shop::count();
        }

        $string = trans_choice('dimmer.shop', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-shop',
            'title'  => "{$count} Shops",
            'text'   => "You have {$count} Shops in your database. Click on button below to view all Shops.",
            'button' => [
                'text' => "View All Shops",
                'link' => route('voyager.shops.index'),
            ],
            'image' => asset('default01.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Shop::class));
    }
}
