<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\{Counter, ToDoList};
use App\Livewire\Posts\{CreatePost, ListPost, ShowPost, UpdatePost};
use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskShow;
use App\Livewire\Tasks\TaskUpdate;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('posts', ListPost::class);
Route::get('create-post', CreatePost::class);
Route::get('update-post/{post}', UpdatePost::class);
Route::get('delete', ListPost::class);

// Accessing route parameters
// Route::get('/post/{id}', ShowPost::class);

// Using route model binding
Route::get('/post/{post}', ShowPost::class);
Route::get('/todo-list', ToDoList::class);

Route::get('/tasks', TaskIndex::class)->name('tasks');
Route::get('/tasks/create', TaskCreate::class);
Route::get('/tasks/update', TaskUpdate::class);
Route::get('/tasks/{task}', TaskShow::class);
