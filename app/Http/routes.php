<?php

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

Route::get('/', 'MainController@index')->name('MainPage'); //додати нову сторінку

Route::get('who-is', 'MainController@whoIsPage')->name('WhoIsPage');

Route::get('skills', 'MainController@skillsPage')->name('SkillsPage');

Route::get('contact', 'MainController@contactPage')->name('ContactPage');

Route::post('feedback','MainController@feedbackPage')->name('FeedbackPage');

Route::get('email-sent/{Feedbacks}', 'MainController@emailSent')->name('userEmailShow');






