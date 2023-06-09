<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::all();
    }

    public function store(Request $request)
    {
        $Payment = Payment::create($request->all());

        return response()->json($Payment, 201);
    }

    public function show($id)
    {
        $Payment = Payment::find($id);

        if (!$Payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }

        return $Payment;
    }

    public function update(Request $request, $id)
    {
        $Payment = Payment::find($id);

        if (!$Payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }

        $Payment->update($request->all());

        return response()->json($Payment, 200);
    }

    public function destroy($id)
    {
        $Payment = Payment::find($id);

        if (!$Payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }

        $Payment->delete();

        return response()->json(['message' => 'Payment deleted'], 204);
    }
}