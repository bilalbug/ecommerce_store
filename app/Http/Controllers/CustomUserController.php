<?php

namespace App\Http\Controllers;

use App\Models\custom_user;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    public function index()
    {
        return custom_user::all();
    }

    public function store(Request $request)
    {
        $C_User = custom_user::create($request->all());

        return response()->json($C_User, 201);
    }

    public function show($id)
    {
        $C_User = custom_user::find($id);

        if (!$C_User) {
            return response()->json(['message' => 'C_User not found'], 404);
        }

        return $C_User;
    }

    public function update(Request $request, $id)
    {
        $C_User = custom_user::find($id);

        if (!$C_User) {
            return response()->json(['message' => 'C_User not found'], 404);
        }

        $C_User->update($request->all());

        return response()->json($C_User, 200);
    }

    public function destroy($id)
    {
        $C_User = custom_user::find($id);

        if (!$C_User) {
            return response()->json(['message' => 'C_User not found'], 404);
        }

        $C_User->delete();

        return response()->json(['message' => 'C_User deleted'], 204);
    }
}
