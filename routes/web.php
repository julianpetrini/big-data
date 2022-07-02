<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;



// THIS TAKES YOU TO THE HOME PAGE ; LANDING PAGE 
Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    return view('home');
});
// THIS IS THE WELCOME AUTOMATIC LAYOUT THAT LARAVEL BRINGS
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/createpost', function () {
    return view('createPost');
});

Route::get('/editcomment', function () {
    return view('editComment');
});

// -----------------IMPORTANT. WHEN YOU ENTER TO A POST DETAILS AND YOU CLICK ON THE NAV FOR EXAMPLE REGISTER OR LOGIN IT TAKES
// YOU TO A http://localhost/postdetail/login AND THEN DOESNT WORK. IT SHOULD BE ALWAYS localhost/login


// THIS WILL TAKES YOU TO THE POST DETAIL YOU CLICKED ON 
Route::get('/postdetail/{id}', function () {
    return view('postDetail');
});

Route::get('/aboutus', function () {
    return view('aboutUs');
>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<<<<<<< HEAD
Route::get('/test', function () {
    return view('test');
});

Route::get('/test', [BlogController::class, 'showAll']);
=======
// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/', [BlogController::class, 'showAll']);
>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143

Route::post('/test/{id}', [BlogController::class, 'update']);

Route::post('/test', [BlogController::class, 'create']);

Route::delete('/test/{id}', [BlogController::class, 'delete']);

Route::post('/update/{id}', [BlogController::class, 'update']);

<<<<<<< HEAD
Route::get('/details/{id}', [BlogController::class, 'details']);





// Route::post('/', [BlogController::class, 'comments']);
=======
Route::get('/details/{id}', [BlogController::class, 'details']);
>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143
