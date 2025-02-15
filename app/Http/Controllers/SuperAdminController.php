<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SuperAdminController extends Controller
{

public function getTotalUsers() {
    // Call Scrap.io API to fetch total users
    $response = Http::get('https://api.scrap.io/admin/stats/users');
    return response()->json($response->json());
}

public function getTotalCreditsSold() {
    // Call Scrap.io API to fetch total credits sold
    $response = Http::get('https://api.scrap.io/admin/stats/credits');
    return response()->json($response->json());
}

public function getTopCreditUsers() {
    // Call Scrap.io API to fetch top credit users
    $response = Http::get('https://api.scrap.io/admin/stats/top-users');
    return response()->json($response->json());
}

public function getUserActivity() {
    // Call Scrap.io API to fetch user activity
    $response = Http::get('https://api.scrap.io/admin/stats/activity');
    return response()->json($response->json());
}

}