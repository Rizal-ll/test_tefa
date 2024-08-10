<?php

use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\FooterColumn;
use App\Models\FooterRow;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Slideshow;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

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

Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::apiResource('categories', CategoryController::class);
});
Route::apiResource('categories', CategoryController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('categories', CategoryController::class);
});



Route::group(
    ['prefix' => "v1"],
    function () {
        Route::get('/users', fn () => QueryBuilder::for(User::class)
            ->allowedFilters(['name', 'email'])
            ->get());
        // Route::get('/articles/{id}',  fn ($id) => Article::findOrFail($id)->get())->whereNumber('id');
        Route::get('/categories', fn () => QueryBuilder::for(Category::class)
);
        Route::get('/users/{name}/profile', fn ($name) => User::where('name', 'like', "%" . $name . "%")->first()->profile()->with('user.roles', 'supervisors', 'tags')->first())->where('name', '[a-zA-Z][a-zA-Z .]+');
        Route::post('/sendMail', EmailController::class);
        Route::post('login', 'AuthController@login');
    }
);
