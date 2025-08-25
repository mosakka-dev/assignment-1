<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Import the controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tasks.index'); // Redirect root to task list
});

Route::resource('tasks', TaskController::class);