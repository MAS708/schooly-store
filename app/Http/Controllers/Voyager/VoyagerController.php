<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;

class VoyagerController extends BaseVoyagerController
{
    public function index()
    {
        return view('vendor.voyager.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }
}
