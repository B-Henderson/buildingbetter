<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use View;

class ShortController extends BaseController
{

    public function index()
    {
        return View::make('short');
    }
}
