<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AdvancedFeaturesController extends Controller {

    public function previewData(Request $request) {
        // Call Scrap.io API for real-time preview
        $response = Http::post('https://api.scrap.io/tasks/preview', [
            'query' => $request->input('query'),
            'location' => $request->input('location'),
            'max_results' => $request->input('max_results')
        ]);
        return response()->json($response->json());
    }

    public function setAlert(Request $request) {
        // Call Scrap.io API to set up alerts
        $response = Http::post('https://api.scrap.io/alerts', [
            'query' => $request->input('query'),
            'location' => $request->input('location'),
            'alert_type' => $request->input('alert_type'),
            'email' => $request->input('email')
        ]);
        return response()->json($response->json());
    }

    public function scheduleScraping(Request $request) {
        // Call Scrap.io API to schedule scraping
        $response = Http::post('https://api.scrap.io/tasks/schedule', [
            'query' => $request->input('query'),
            'location' => $request->input('location'),
            'interval' => $request->input('interval'),
            'max_results' => $request->input('max_results')
        ]);
        return response()->json($response->json());
    }

    public function cleanData(Request $request) {
        // Call Scrap.io API to clean data
        $response = Http::post('https://api.scrap.io/data/clean', [
            'data' => $request->input('data')
        ]);
        return response()->json($response->json());
    }

}