<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\ScheduleInstance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PrayerPointController;
use App\Http\Controllers\ScheduleInstanceController;

// Public routes
// Route::get('run',function(){
//     $schedules = ScheduleInstance::all();
//     foreach($schedules as $schedule){
//         $schedule->scheduled_at = $schedule->scheduled_date;
//         $schedule->save();
//     }
//     return 'done';
// });
Route::view('/','welcome')->name('index');

// Auth routes
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/forgot-password', [AuthController::class, 'sendOneTimePassword'])->name('otp.send');
Route::post('/login-otp', [AuthController::class, 'loginWithOneTimePassword'])->name('otp.login');

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('prayer-points', PrayerPointController::class);
    Route::view('dashboard','dashboard')->name('dashboard');
    Route::group(['prefix'=> 'prayer-points','as'=> 'prayer-point.'],function(){
        Route::get('/',[PrayerPointController::class,'index'])->name('index');
        Route::post('store',[PrayerPointController::class,'store'])->name('store');
        Route::get('show/{prayer}',[PrayerPointController::class,'show'])->name('show');
        
        Route::post('{prayer}/comments',[PrayerPointController::class,'storeComment'])->name('comment.store');
        Route::delete('comments/{comment}',[PrayerPointController::class,'deleteComment'])->name('comment.delete');
        Route::post('schedule-instances/bulk-update',[PrayerPointController::class,'bulkUpdateInstances'])->name('instances.bulk-update');
    });
    
    Route::get('schedules', [ScheduleController::class, 'index'])->name('schedules');
    Route::view('support','support')->name('support');
});

// Prayer App API Routes
Route::prefix('api')->group(function () {
    Route::get('categories/search', [CategoryController::class, 'search']);
    Route::post('categories', [CategoryController::class, 'store']);

    Route::get('/schedule-instances/upcoming', [ScheduleInstanceController::class, 'upcoming']);
    Route::get('/schedule-instances/past', [ScheduleInstanceController::class, 'past']);
    Route::get('/schedule-instances/today', [ScheduleInstanceController::class, 'today']);
    Route::get('/schedule-instances/statistics', [ScheduleInstanceController::class, 'statistics']);
    Route::post('/schedule-instances/{instance}/prayed', [ScheduleInstanceController::class, 'markAsPrayed']);
    Route::post('/schedule-instances/{instance}/skipped', [ScheduleInstanceController::class, 'markAsSkipped']);
    Route::post('/schedules/{schedule}/generate-instances', [ScheduleInstanceController::class, 'generateInstances']);
});
