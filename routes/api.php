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

Route::apiResources(['user' => 'API\UserController']);
Route::get('profile', 'API\UserController@profile');

//branch api routes
Route::apiResources(['branch' => 'API\BranchController']);
Route::get('branches', 'API\BranchController@showBranches');

//get designations
Route::get('designations', function(){
    $designation = \App\Designation::all();
    return $designation;
});

//partners api routes
Route::apiResources(['partner' => 'API\PartnerController']);
Route::get('partners', 'API\PartnerController@showPartners');