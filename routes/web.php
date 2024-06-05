<?php





use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BMIController;
use Illuminate\Support\Facades\Route;



    // Rute untuk autentikasi

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Rute untuk halaman utama dan informasi
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [AboutUsController::class, 'index'])->name('about_us');
Route::get('/faq', [AboutUsController::class, 'faq'])->name('faq');
Route::get('/how_to_order', [AboutUsController::class, 'how_to_order'])->name('how_to_order');


Route::get('/bmi', [BMIController::class, 'index'])->name('showBMIForm');
Route::post('/bmi', [BMIController::class, 'calculate'])->name('calculateBMI');
Route::get('/bmi/program', [BMIController::class, 'program'])->name('program');
Route::get('/bmi/program/food', [BMIController::class, 'food'])->name('food');
Route::get('/bmi/program/workout', [BMIController::class, 'workout'])->name('workout');





use App\Http\Controllers\FeedbackController;

Route::middleware(['auth'])->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('feedback.index');

});








Route::middleware(['auth:sanctum, admin',
    config('jetstream.auth_session'),
    'verified',
    \App\Http\Middleware\RedirectIfAuthenticated::class, // Tambahkan middleware RedirectIfAuthenticated di sini
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('server.home');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    \App\Http\Middleware\RedirectIfAuthenticated::class, // Tambahkan middleware RedirectIfAuthenticated di sini
])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');
});


Route::prefix('admin')->group(function () {
    Route::get('/users', [AdminController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [AdminController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{user}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
});






// Rute untuk dashboard pengguna setelah login
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('user.dashboard');
//     })->name('dashboard');
// });
