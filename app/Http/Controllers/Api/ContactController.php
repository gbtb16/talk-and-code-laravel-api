<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function index() : JsonResponse
    {
        $contacts = Contact::with('user')->get();
        return response()->json($contacts);
    }
}
