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

Route::get('/' , 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}' , 'PostsController@show');


Route::post('/posts', 'PostsController@store');
Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{tasks}', 'TasksController@show');


//Controller => PostsController

//ELOQUENT MODEL =>Post

//migration => create_posts_table


// Route::get('/tasks', function () {
//     //$tasks = DB::table('tasks')->get();
//     $tasks = Tasks::all(); //eloquent code
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//     //$tasks = DB::table('tasks')->find($id);
//     $tasks = Tasks::find($id);

 
//     return view('tasks.show', compact('tasks'));
// });

Auth::routes();
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');
