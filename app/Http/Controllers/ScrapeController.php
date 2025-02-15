<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ScrapeController extends Controller
{

public function createTask(Request $request) {
    $query = $request->input('query');
    $maxResults = $request->input('max_results');

    // Call Scrap.io API to create a task
    $response = Http::post('https://api.scrap.io/tasks', [
        'query' => $query,
        'max_results' => $maxResults
    ]);

    return response()->json($response->json());
}

public function getResults($taskId) {
    // Call Scrap.io API to fetch results
    $response = Http::get("https://api.scrap.io/tasks/{$taskId}/results");
    return response()->json($response->json());
}

}