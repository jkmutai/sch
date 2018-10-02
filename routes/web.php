<?php

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
Route::get('/','AdminController@loginpage' )->name('login');
Route::get('/admin','AdminController@blankadmintemplate' )->name('admin');
Route::get('/students','AdminController@allstudents' )->name('students');
Route::get('/students/get','AdminController@allstudentsdata' )->name('students.get');
Route::get('/allsettings','AdminController@allsettings' )->name('allsettings');
Route::get('/newsettings','AdminController@loadnewsettings' )->name('newsettings');
Route::get('/loadfeeitems','AdminController@loadfeeitemsform' )->name('loadfeeitems');
Route::post('/savesettings','AdminController@savesettings' )->name('savesettings');
Route::post('/savesession','AdminController@savesession' )->name('savesession');
Route::post('/savefeeitems','AdminController@savefeeitems' )->name('savefeeitems');
Route::get('/newstudent','AdminController@newstudent' )->name('newstudent');
Route::get('/teachers','AdminController@allteachers' )->name('teachers');
Route::get('/showstudent/{id}','AdminController@showstudent' )->name('showstudent');
Route::get('/editstudent/{id}','AdminController@editstudent' )->name('editstudent');
Route::get('/edithouses/{id}','AdminController@edithouses' )->name('edithouses');
Route::get('/editclass/{id}','AdminController@editclass' )->name('editclass');
Route::get('/editsubject/{id}','AdminController@editsubjects' )->name('editsubject');
Route::get('/editexam/{id}','AdminController@editexams' )->name('editexam');
Route::get('/editsession/{id}','AdminController@editsessions' )->name('editsession');
Route::post('/updatestudent/{id}','AdminController@updatestudent' )->name('updatestudent');
Route::post('/updatesubject/{id}','AdminController@updatesubjects' )->name('updatesubject');
Route::post('/updatehouse/{id}','AdminController@updatehouses' )->name('updatehouse');
Route::get('/viewsettings/{id}','AdminController@viewschoolsettings' )->name('viewsettings');
Route::get('/loadclasses','AdminController@classesform' )->name('loadclasses');
Route::get('/loadsubjects','AdminController@subjectsform' )->name('loadsubjects');
Route::get('/loadhouses','AdminController@housesform' )->name('loadhouses');
Route::get('/loadexams','AdminController@loadexamsform' )->name('loadexams');
Route::get('/loadsessions','AdminController@loadsessionsform' )->name('loadsessions');
Route::post('/savestudent','AdminController@savestudent' )->name('savestudent');
Route::post('/savesubject','AdminController@savesubject' )->name('savesubject');
Route::post('/saveclasses','AdminController@saveclasses' )->name('saveclasses');
Route::post('/saveexams','AdminController@saveexams' )->name('saveexams');
Route::post('/examsupdate/{id}','AdminController@examsupdate' )->name('examsupdate');
Route::post('/updatesession/{id}','AdminController@updatesession' )->name('updatesession');
Route::post('/updateclasses/{id}','AdminController@updateclasses' )->name('updateclasses');
Route::get('/editsettings/{id}','AdminController@editsettings' )->name('editsettings');
Route::post('/savehouses','AdminController@savehouses' )->name('savehouses');
Route::get('deletestudent/{id}','AdminController@deletestudent')->name('deletestudent');
Route::get('deleteclass/{id}','AdminController@deleteclass')->name('deleteclass');
Route::get('deletesubject/{id}','AdminController@deletesubject')->name('deletesubject');
Route::get('deletehouse/{id}','AdminController@deletehouse')->name('deletehouse');
Route::get('deleteschool/{id}','AdminController@deleteschool')->name('deleteschool');
Route::get('deleteexam/{id}','AdminController@deleteexam')->name('deleteexam');
Route::get('deletesession/{id}','AdminController@deletesession')->name('deletesession');
