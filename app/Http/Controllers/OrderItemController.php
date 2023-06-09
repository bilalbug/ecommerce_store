<?php

namespace App\Http\Controllers;

use App\Models\order_item;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return Order_Item::all();
    }

    public function store(Request $request)
    {
        $Order_Item = Order_Item::create($request->all());

        return response()->json($Order_Item, 201);
    }

    public function show($id)
    {
        $Order_Item = Order_Item::find($id);

        if (!$Order_Item) {
            return response()->json(['message' => 'Order_Item not found'], 404);
        }

        return $Order_Item;
    }

    public function update(Request $request, $id)
    {
        $Order_Item = Order_Item::find($id);

        if (!$Order_Item) {
            return response()->json(['message' => 'Order_Item not found'], 404);
        }

        $Order_Item->update($request->all());

        return response()->json($Order_Item, 200);
    }

    public function destroy($id)
    {
        $Order_Item = Order_Item::find($id);

        if (!$Order_Item) {
            return response()->json(['message' => 'Order_Item not found'], 404);
        }

        $Order_Item->delete();

        return response()->json(['message' => 'Order_Item deleted'], 204);
    }
}
