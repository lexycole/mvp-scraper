<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class CreditController extends Controller
{
public function getCredits(Request $request) {
    // Fetch credits from Scrap.io API or database
    return response()->json(['credits' => 100]);
}

public function addCredits(Request $request) {
    $amount = $request->input('amount');
    // Simulate adding credits (no actual transaction)
    return response()->json(['credits' => 100 + $amount]); 
}

}