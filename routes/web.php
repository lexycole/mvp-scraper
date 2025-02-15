<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/dashboard', 'dashboard')->middleware('auth');;

Route::get('/api/user/credits', [CreditController::class, 'getCredits']);
Route::post('/api/user/credits/add', [CreditController::class, 'addCredits']);

Route::post('/api/scrape', [ScrapeController::class, 'createTask']);
Route::get('/api/scrape/{task_id}/results', [ScrapeController::class, 'getResults']);

Route::get('/api/admin/users', [UserController::class, 'getUsers']);
Route::post('/api/admin/users', [UserController::class, 'addUser']);
Route::delete('/api/admin/users/{user_id}', [UserController::class, 'deleteUser']);
Route::post('/api/admin/users/{user_id}/credits', [UserController::class, 'allocateCredits']);

Route::get('/api/admin/stats/users', [SuperAdminController::class, 'getTotalUsers']);
Route::get('/api/admin/stats/credits', [SuperAdminController::class, 'getTotalCreditsSold']);
Route::get('/api/admin/stats/top-users', [SuperAdminController::class, 'getTopCreditUsers']);
Route::get('/api/admin/stats/activity', [SuperAdminController::class, 'getUserActivity']);

Route::post('/api/tasks/{task_id}/export', [ExportController::class, 'exportData']);

Route::post('/api/tasks/preview', [AdvancedFeaturesController::class, 'previewData']);
Route::post('/api/alerts', [AdvancedFeaturesController::class, 'setAlert']);
Route::post('/api/tasks/schedule', [AdvancedFeaturesController::class, 'scheduleScraping']);
Route::post('/api/data/clean', [AdvancedFeaturesController::class, 'cleanData']);

Route::post('/api/user/affiliate-link', [AffiliateController::class, 'generateAffiliateLink']);
Route::get('/api/user/affiliate-earnings', [AffiliateController::class, 'getAffiliateEarnings']);
Route::get('/api/user/referrals', [AffiliateController::class, 'getReferrals']);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


