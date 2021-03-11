<?php

namespace App\Widgets;

use App\SubOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class SubOrderDimmer extends BaseDimmer
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
            $count =  SubOrder::where('seller_id', auth()->id())->count();
        } else
        {
            $count =  SubOrder::count();
        }

        $string = trans_choice('dimmer.suborder', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bell',
            'title'  => "{$count} Sub Orders",
            'text'   => "You have {$count} Sub Orders in your database. Click on button below to view all Sub Orders.",
            'button' => [
                'text' => "View All Sub Orders",
                'link' => route('voyager.sub-orders.index'),
            ],
            'image' => asset('default03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(SubOrder::class));
    }
}
