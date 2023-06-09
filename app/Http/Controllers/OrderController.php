<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        $Order = Order::create($request->all());

        return response()->json($Order, 201);
    }

    public function show($id)
    {
        $Order = Order::find($id);

        if (!$Order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return $Order;
    }

    public function update(Request $request, $id)
    {
        $Order = Order::find($id);

        if (!$Order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $Order->update($request->all());

        return response()->json($Order, 200);
    }

    public function destroy($id)
    {
        $Order = Order::find($id);

        if (!$Order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $Order->delete();

        return response()->json(['message' => 'Order deleted'], 204);
    }
}
