<?php
Route::group(['middleware' => ['authentication']], function () {
// Route::resource('survey','\Dex\Health\Survey\Controllers\SurveyController');





});
Route::resource('survey','\Dex\Health\Survey\Controllers\SurveyController');



