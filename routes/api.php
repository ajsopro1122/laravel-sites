<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/posts', function() {
//     $post = Post::create([
//         'title'=>'my first post',
//         'slug'=>'my-first-post'
//     ]);

//     return $post;
// });

// Route::post('/post')

// Route::put('/posts/{id}')

// Route::delete('/posts/{id}')

// Route::get('/testing-the-api', function()  {
//     return ['message' => 'hello'];
// });

Route::prefix('v1')->group(function() {
    Route::apiResource('posts', 'PostController');
});

Route::get('/comments/{commentId}')


// Route::get('/posts', 'PostController@index');
// Route::post('/posts', 'PostController@store');
// Route::put('/posts', 'PostController@update');
// Route::delete('/posts', 'PostController@destroy');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
