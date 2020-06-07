<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Access Control Routes.......
Route::middleware('auth')->namespace('AccessControl')/*->prefix('access-control')*/->group(function () {
    Route::resource('users', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
});
//Temp
Route::get('/temp','WelcomeController@getTempPage');

//welcome
Route::get('/','WelcomeController@getWelcomePage');
//Create Test
Route::get('/create-test','CreateTestController@getCreateTestPage');
//Previous Test
Route::get('/previous-test','PreviousTestController@getPreviousTestPage');
//Reports
Route::get('/reports','ReportsController@getReportsPage');
//Graphs
Route::get('/graphs','GraphsController@getGraphsPage');
//Search
Route::get('/search','SearchController@getSearchPage');
//Notes
Route::get('/notes','NotesController@getNotesPage');
//Flash Cards
Route::get('/flash-cards','FlashCardsController@getFlashCardsPage');
//Reset
Route::get('/reset','ResetController@getResetPage');
//Help
Route::get('/help','HelpController@getHelpPage');
//Help -> How to use
Route::get('/list-how-to-use','HelpController@listHowToUse');
Route::get('/create-how-to-use','HelpController@createHowToUse');
Route::post('/store-how-to-use','HelpController@storeHowToUse');
Route::get('/edit-how-to-use','HelpController@editHowToUse');
Route::post('/update-how-to-use','HelpController@updateHowToUse');
Route::get('/delete-how-to-use','HelpController@deleteHowToUse');
//Help -> FAQ
Route::get('/faq-list','HelpController@listFaq');
Route::get('/faq-create','HelpController@createFAQ');
Route::post('/faq-store','HelpController@storeFaq');
Route::get('/faq-edit','HelpController@editFaq');
Route::post('/faq-update','HelpController@updateFaq');
Route::get('/faq-delete','HelpController@deleteFaq');
//Resume
Route::get('/resume','ResumeController@getResumePage');
//Results
Route::get('/results','ResultsController@getResultsPage');
//Analysis
Route::get('/analysis','AnalysisController@getAnalysisPage');
Route::get('/test-analysis','AnalysisController@getTestAnalysisPage');
Route::get('/review-test','ReviewTestController@getReviewTestPage');
