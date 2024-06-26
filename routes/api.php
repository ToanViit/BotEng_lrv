<?php

use Illuminate\Http\Request;
use App\Http\Controllers\GeminiController;
use App\Http\Controllers\SpeechRecognitionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/question', [GeminiController::class, 'sendQuestion']);
Route::post('/questionTest', [GeminiController::class, 'sendTestQuestion']);
Route::post('/transcribe', [SpeechRecognitionController::class, 'transcribe']);


Route::post('/chat/send-message', [ChatController::class, 'sendMessage'])->name('chat.send_message');