<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AffiliateController extends Controller {

    public function generateAffiliateLink(Request $request) {
        // Call Scrap.io API to generate affiliate link
        $response = Http::post('https://api.scrap.io/user/affiliate-link');
        return response()->json($response->json());
    }

    public function getAffiliateEarnings(Request $request) {
        // Call Scrap.io API to fetch affiliate earnings
        $response = Http::get('https://api.scrap.io/user/affiliate-earnings');
        return response()->json($response->json());
    }

    public function getReferrals(Request $request) {
        // Call Scrap.io API to fetch referral list
        $response = Http::get('https://api.scrap.io/user/referrals');
        return response()->json($response->json());
    }
}