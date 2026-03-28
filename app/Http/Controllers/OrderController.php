<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        return view('orders.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_number' => 'required|unique:orders,order_number',
            'user_id' => 'required|exists:users,id',
            'client' => 'required|max:100',
            'date' => 'required|date',
            'rfc' => 'required|max:20',
            'address' => 'required|max:150',
            'status' => 'required',
        ]);

        Order::create([
            'order_number' => $request->order_number,
            'user_id' => $request->user_id,
            'client' => $request->client,
            'date' => $request->date,
            'rfc' => $request->rfc,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index');
    }

    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        $users = User::all();

        return view('orders.edit', compact('order', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'order_number' => 'required|unique:orders,order_number,' . $order->id,
            'user_id' => 'required|exists:users,id',
            'client' => 'required|max:100',
            'date' => 'required|date',
            'rfc' => 'required|max:20',
            'address' => 'required|max:150',
            'status' => 'required',
        ]);

        $order->update([
            'order_number' => $request->order_number,
            'user_id' => $request->user_id,
            'client' => $request->client,
            'date' => $request->date,
            'rfc' => $request->rfc,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index');
    }

    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index');
    }
}