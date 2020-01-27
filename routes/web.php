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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', 'HelloController@index')
//    ->middleware('auth');

Route::get('hello', 'learnController@index')->middleware('first');

//Route::get('hello/{id?}', 'learnController@index');


Route::get('ramen', function () {
    return view('ramen');
});
Route::get('club_member_input', function () {
    return view('club_member_input');
});

Route::post('club_member_conf',  'Controller@update');

Route::post('club_member_done', 'Controller@insert');

Route::get('ramen_login', function () {
    //Session::flush();
    return view('ramen_login');
});

//Route::get('ramen_login',  'LoginController@session');

Route::get('admin_new_top', function () {
    return view('ramen_login');
});


Route::get('admin_new_list',  'LoginController@lists');

Route::post('admin_new_list',  'LoginController@login_to_top');

//Route::post('admin_new_list',  'LoginController@top_to_list');

Route::post('admin_new_edit',  'LoginController@list_to_edit');

Route::post('admin_new_conf',  'LoginController@edit_to_conf');

Route::post('admin_new_done',  'LoginController@conf_to_done');

// Route::get('ramen_login', 'LoginController@session_del');

Route::post('public/insert', 'learncontroller@insert');

Route::post('public/insert', 'learncontroller@insert');

Route::get('public/up', 'learncontroller@lists');


Route::get('public/insert_quick_win', 'learncontroller@insert_quick_win')->name('learn.insert_quick_win');

Route::get('public/list_quick_win', 'learncontroller@list_quick_win');

Route::post('public/list_quick_win', 'learncontroller@list_quick_win');


Route::get('public/list_conflict', 'learncontroller@list_conflict');

Route::post('public/insert_conflict', 'learncontroller@insert_conflict');

Route::get('public/list_learn_act', 'learncontroller@list_learn_act');

Route::post('public/insert_learn_act', 'learncontroller@insert_learn_act');

Route::get('public/list_active', 'learncontroller@list_active');

Route::post('public/insert_active', 'learncontroller@insert_active');

Route::get('public/list_active', 'learncontroller@list_active');

Route::post('public/insert_active', 'learncontroller@insert_active');

Route::get('public/list_trap_trac', 'learncontroller@list_trap_trac');

Route::post('public/insert_trap_trac', 'learncontroller@insert_trap_trac');

Route::get('public/list_trial', 'learncontroller@list_trial');

Route::post('public/insert_trial', 'learncontroller@insert_trial');

Route::get('public/list_positive_thinking', 'learncontroller@list_positive_thinking');

Route::post('public/insert_positive_thinking', 'learncontroller@insert_positive_thinking');

Route::get('public/list_stress_diary', 'learncontroller@list_stress_diary');

Route::post('public/insert_stress_diary', 'learncontroller@insert_stress_diary');

Route::get('public/list_emotion', 'learncontroller@list_emotion');

Route::post('public/insert_emotion', 'learncontroller@insert_emotion');

Route::get('public/list_anger_log', 'learncontroller@list_anger_log');

Route::post('public/insert_anger_log', 'learncontroller@insert_anger_log');

Route::get('public/list_automatic', 'learncontroller@list_automatic');

Route::post('public/insert_automatic', 'learncontroller@insert_automatic');

Route::get('public/time_manegement', function () {
    return view('time_manegement');
});

Route::get('public/study', function () {
    return view('javascript');
});

Route::get('public/Learn', function () {
    //Session::flush();
    return view('learn');
});

Route::get('public/test', 'StudeyController@index');

Route::get('public/daiki', 'learncontroller@daiki');

Route::get('public/vue', function () {
    return view('vue');
});

Route::get('public/vuejs', function () {
    return view('vuejs');
});

Route::get('public/knowledge', function () {
    return view('knowledge');
});

Route::get('public/control', function () {
    return view('control');
});

Route::get('/home', 'HomeController@index')->name('home');

