<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/', function ($name = null) {
//    $name = 'Allan';
    return view('index', ['name' => $name]);
});

Route::redirect('/home', '/');

Route::prefix('/tasks')->name('tasks.')->group(callback: function () {
    route::get('/', function (array $tasks = null) {
        $tasks = [
            '0' => [
                'name' => 'Do chores',
                'urgency' => 1,
                'category' => 'home',
            ],
            '1' =>[
                'name' => 'Do work',
                'urgency' => 0,
                'category' => 'work',
            ],
            '2' => [
                'name' => 'Play games',
                'urgency' => 2,
                'category' => 'leisure',
            ],
        ];
        return view('tasks.index', ['tasks' => $tasks]);
    })->name('index');

    route::get('/task', function (\Illuminate\Http\Request $request) {
        return view('tasks.task', ['task' => $request]);
    })->name('task');

})->name('tasks');

Route::get('/hello', function () {
    return 'Hello World!!!';
})->name('hello');

Route::get('/hallo', function (){
    return redirect()->route('hello');
});

Route::get('/hello/{name}', function ($name) {
    return '<h2>Hello '. $name .'!</h2>';
});

Route::fallback(function (){
    return "<h2 style='font-family: Arial,sans-serif;'>404 - I'm completely lost ;( </h2>";
});
