<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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
// Rout to welcome - view
Route::get('/', function () {
    return view('home');
});

// Route to products
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']); 

Route::get('/posts', [PostsController::class, 'index']);






// // Pattern is integer
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

// // Pattern is string
// Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');




// EXAMPLE OF ROUTING

// // Route to users - string
// Route::get('/users', function(){
//     return 'welcome to users page';
// });

// // Route to users - array(JSON)
// Route::get('/users', function(){
//     return ['PHP', 'HTML', 'LARAVEL'];
// });

// // Route to users - json object
// Route::get('/users', function(){
//     return response()->json([
//         'name' => 'Branko',
//         'project' => 'laravel'
//     ]);
// });

// // Route to users - function
// Route::get('/users', function(){
//     return redirect('/');
// });