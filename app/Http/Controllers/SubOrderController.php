<?php

namespace App\Http\Controllers;

use App\SubOrder;
use Illuminate\Http\Request;

class SubOrderController extends Controller
{
    public function markDelivered(SubOrder $suborder)
    {
        $suborder->status = 'completed';
        $suborder->save();

        //check if all suborders complete
        $pendingSubOrders = $suborder->order->subOrders()->where('status','!=', 'completed')->count();

        if($pendingSubOrders == 0) {
            $suborder->order()->update(['status'=>'completed']);
            $suborder->order()->update(['is_paid'=>1]);
        }

        return redirect()->to('/seller/sub-orders')->withMessage('Order marked complete');
    }

    public function markCanceled(SubOrder $suborder)
    {
        $suborder->status = 'decline';
        $suborder->save();

        //check if all suborders complete
        $pendingSubOrders = $suborder->order->subOrders()->where('status','!=', 'decline')->count();

        if($pendingSubOrders == 0) {
            $suborder->order()->update(['status'=>'decline']);
        }

        return redirect()->to('/seller/sub-orders')->withMessage('Order marked decline');
    }
}
