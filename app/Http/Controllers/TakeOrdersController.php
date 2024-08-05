<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TakeOrdersController extends Controller
{
    public function create(Table $table)
    {
        return view('take-orders.create', [
            'tables' => Table::get(),
            'selectedTable' => $table,
        ]);
    }
}
