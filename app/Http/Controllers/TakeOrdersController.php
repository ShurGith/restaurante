<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakeOrdersController extends Controller
{
    public function create()
    {
        return view('take-orders.create');
    }
}
