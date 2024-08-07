<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Table;
use App\Models\MenuEntry;
use Illuminate\Http\Request;

class TakeOrdersController extends Controller
{
    public function create(Table $table)
    {
        return view('take-orders.create', [
            'tables' => Table::get(),
            'selectedTable' => $table->load('orders.menuEntry'),
            'menuEntries' => MenuEntry::get(),
        ]);
    }

    public function store(Table $table, Request $request)
    {
        $order = Order::create([
            'table_id' => $table->id,
            'menu_entry_id' => $request->input('menu_entry_id'),
            'quantity' => $request->input('quantity'),
            'notes' => '',
            'status' => 'pending',
        ]);

        return $order;
    }
}
