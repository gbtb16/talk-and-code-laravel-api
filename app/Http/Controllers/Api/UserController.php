<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserController extends Controller
{
    public function index() : JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }
}
