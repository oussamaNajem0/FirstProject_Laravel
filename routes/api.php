<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/posts', function () {
//     return response()->json([
//         'posts'=> [
//             [
//                 'id'=> 1,
//                 'title'=> 'First Post',
//                 'body'=> 'This is the first post.'
//             ],
//             [
//                 'id'=> 2,
//                 'title'=> 'Second Post',
//                 'body'=> 'This is the second post.'
//             ]
//         ],
//         'comments'=> [
//             [
//                 'id'=> 1,
//                 'title'=> 'First Comment',
//                 'body'=> 'This is the first comment.'
//             ],
//         ]
//     ]);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
