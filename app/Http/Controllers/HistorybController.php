<?php

namespace App\Http\Controllers;

use App\Models\Historyb;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class HistorybController extends Controller
{
    public function index()
    {
        $history = Historyb::all();
        return view('historyb.index', compact('history'));
    }

    public function create()
    {
        $users = User::all();
        $orders = Order::all();

        return view('historyb.create', compact('users', 'orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
            'purchase_date' => 'required|date',
        ]);

        Historyb::create([
            'user_id' => $request->user_id,
            'order_id' => $request->order_id,
            'purchase_date' => $request->purchase_date,
        ]);

        return redirect()->route('historyb.index');
    }

    public function show(string $id)
    {
        $record = Historyb::findOrFail($id);
        return view('historyb.show', compact('record'));
    }

    public function edit(string $id)
    {
        $record = Historyb::findOrFail($id);
        $users = User::all();
        $orders = Order::all();

        return view('historyb.edit', compact('record', 'users', 'orders'));
    }

    public function update(Request $request, string $id)
    {
        $record = Historyb::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
            'purchase_date' => 'required|date',
        ]);

        $record->update([
            'user_id' => $request->user_id,
            'order_id' => $request->order_id,
            'purchase_date' => $request->purchase_date,
        ]);

        return redirect()->route('historyb.index');
    }

    public function destroy(string $id)
    {
        $record = Historyb::findOrFail($id);
        $record->delete();

        return redirect()->route('historyb.index');
    }
}