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
Use App\Tasks;


Route::get('/', function(){
    return view('welcome');
});

Route::get('/' , 'PostsController@index');
Route::get('/posts/{post}' , 'PostsController@show');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{tasks}', 'TasksController@show');


//Controller => PostsController

//ELOQUENT MODEL =>Post

//migration => create_posts_table


// Route::get('/tasks', function () {
//     //$tasks = DB::table('tasks')->get();
//     $tasks = Tasks::all();
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//     //$tasks = DB::table('tasks')->find($id);
//     $tasks = Tasks::find($id);

 
//     return view('tasks.show', compact('tasks'));
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');