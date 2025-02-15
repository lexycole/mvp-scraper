<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ScrapeController extends Controller
{

    public function getUsers() {
        // Call Scrap.io API to fetch users
        $response = Http::get('https://api.scrap.io/admin/users');
        return response()->json($response->json());
    }

    public function addUser(Request $request) {
        // Call Scrap.io API to add a user
        $response = Http::post('https://api.scrap.io/admin/users', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        return response()->json($response->json());
    }

    public function deleteUser($userId) {
        // Call Scrap.io API to delete a user
        $response = Http::delete("https://api.scrap.io/admin/users/{$userId}");
        return response()->json($response->json());
    }

    public function allocateCredits($userId, Request $request) {
        // Call Scrap.io API to allocate credits
        $response = Http::post("https://api.scrap.io/admin/users/{$userId}/credits", [
            'credits' => $request->input('credits')
        ]);
        return response()->json($response->json());
    }

}