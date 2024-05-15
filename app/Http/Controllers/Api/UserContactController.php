<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index($userId) : JsonResponse
    {
        $user = User::with('contacts')->findOrFail($userId);
        $contacts = $user->contacts;
        return response()->json($contacts);
    }

    public function create($userId, Request $request) : JsonResponse
    {
        $data = $request->validate([
            'type' => 'required',
            'value' => 'required',
        ]);
        $user = User::findOrFail($userId);
        $contact = $user->contacts()->create($data);
        return response()->json($contact);
    }
}
