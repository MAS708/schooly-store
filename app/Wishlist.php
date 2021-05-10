<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $primaryKey = 'id';
    protected $fillable= ['user_id', 'pro_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'pro_id');
    }
}
