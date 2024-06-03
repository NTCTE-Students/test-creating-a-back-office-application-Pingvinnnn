<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Orchid\Platform\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view("orders.index", compact("orders"));
    }

    public function create()
    {
        return view("orders.create");
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->client_id = $request->input('client_id');
        $order->date = $request->input('date');
        $order->status = $request->input('status');
        $order->total = $request->input('total');
        $order->save();
        return redirect()->route('orders.index');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->client_id = $request->input('client_id');
        $order->date = $request->input('date');
        $order->status = $request->input('status');
        $order->total = $request->input('total');
        $order->save();
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
