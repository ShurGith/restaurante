<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;

class KitchenOrdersController extends Controller
{
    public function index()
    {
        return view('kitchen.index', [
            'pendingOrders' => Order::with(['menuEntry', 'table'])
                ->where('status', OrderStatus::Pending)
                ->get(),
            'preparingOrders' => Order::with(['menuEntry', 'table'])
                ->where('status', OrderStatus::Preparing)
                ->get(),
            'completedOrders' => Order::with(['menuEntry', 'table'])
                ->where('status', OrderStatus::Completed)
                ->get(),
        ]);
    }
}
