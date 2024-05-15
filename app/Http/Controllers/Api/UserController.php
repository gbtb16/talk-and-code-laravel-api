<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() : JsonResponse
    {
        $users = User::with('contacts')->get();
        return response()->json($users);
    }

    public function create(UserRequest $userRequest) : JsonResponse
    {
        $data = $userRequest->all();
        $user = User::create($data);
        return response()->json($user, 201);
    }
}
