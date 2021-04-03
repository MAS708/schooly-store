<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    public function login()
    {
        if ($this->guard()->user()) {
            return redirect()->route('home');
        }

        return redirect()->route('login');
    }
}
