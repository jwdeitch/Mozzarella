<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', array('as' => 'index', 'uses' => 'Proposal_submissions@index'));
    Route::get('/new', 'Proposal_submissions@newprop');
    Route::get('/test', function () {
        return Auth::id();
    });
    Route::post('/new', 'Proposal_submissions@newproppost');

});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
