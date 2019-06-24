<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users API
Route::get('users', function() {
    return App\User::all();
});

Route::get('users/{id}', function($id) {
    return App\User::find($id);
});

Route::post('users', function(Request $request) {
    return App\User::create($request->all());
});

Route::put('users/{id}', function(Request $request, $id) {
    $user = App\User::findorfail($id);
    $user->update($request->all());

    return $user;
});

Route::delete('users/{id}', function($id) {
    App\User::find($id)->delete();

    return 204;
});

// User Roles API
Route::get('user_roles', function() {
    return App\UserRole::all();
});

Route::get('user_roles/{id}', function($id) {
    return App\UserRole::find($id);
});

Route::post('user_roles', function(Request $request) {
    return App\UserRole::create($request->all());
});

Route::put('user_roles/{id}', function(Request $request, $id) {
    $user_role = App\UserRole::findorfail($id);
    $user_role->update($request->all());

    return $user_role;
});

Route::delete('user_roles/{id}', function($id) {
    App\UserRole::find($id)->delete();

    return 204;
});

// User Addresses API
Route::get('user_addresses', function() {
    return App\UserAddress::all();
});

Route::get('user_addresses/{id}', function($id) {
    return App\UserAddress::find($id);
});

Route::post('user_addresses', function(Request $request) {
    return App\UserAddress::create($request->all());
});

Route::put('user_addresses/{id}', function(Request $request, $id) {
    $user_address = App\UserAddress::findorfail($id);
    $user_address->update($request->all());

    return $user_address;
});

Route::delete('user_addresses/{id}', function($id) {
    App\UserAddress::find($id)->delete();

    return 204;
});