<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ExportController extends Controller {

    public function exportData($taskId, Request $request) {
        $format = $request->input('format'); 

        // Call Scrap.io API to export data
        $response = Http::post("https://api.scrap.io/tasks/{$taskId}/export", [
            'format' => $format
        ]);

        // Return the file for download
        return response($response->body(), 200, [
            'Content-Type' => $response->header('Content-Type'),
            'Content-Disposition' => 'attachment; filename="data.' . $format . '"'
        ]);
    }

}