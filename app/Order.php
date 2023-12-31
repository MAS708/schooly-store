<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->withPivot('quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subOrders()
    {
        return $this->hasMany(SubOrder::class);
    }

    public function generateSubOrders()
    {
        $orderItems = $this->items;
        foreach($orderItems->groupBy('shop_id') as $shopId => $products) {

            $shop = Shop::find($shopId);

            $suborder = $this->subOrders()->create([
                'order_number'=> $this->order_number,
                'order_id'=> $this->id,
                'seller_id'=> $shop->user_id ?? 1,
                'grand_total'=> $products->sum(function($buyDetail) {
                    return $buyDetail->pivot->quantity * $buyDetail->pivot->price;
                  }),
                'item_count'=> $products->count(),
                'shipping_fullname'=> $this->shipping_fullname,
                'shipping_address'=> $this->shipping_address,
                'shipping_phone'=> $this->shipping_phone
            ]);

            foreach($products as $product) {
                $suborder->items()->attach($product->id, ['price' => $product->pivot->price, 'quantity' => $product->pivot->quantity]);
            }

        }

    }
}
