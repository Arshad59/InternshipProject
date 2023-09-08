<?php

use App\Http\Controllers\AddEvents;
use App\Http\Controllers\AddMembers;
use App\Http\Controllers\AddResearch;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeleteMembers;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddPhotos;


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
Route::get('/', [NavigationController::class,'home'])->name('home');
Route::get('/home', [NavigationController::class,'home'])->name('home');


Route::get('/about', [NavigationController::class,'about'])->name('about');
Route::get('/about', [NavigationController::class,'displaymember'])->name('about');

Route::get('/event',[NavigationController::class,'event'])->name('event');
Route::get('/event',[NavigationController::class,'displayphoto'])->name('event');

Route::get('/research', [NavigationController::class,'research'])->name('research');
Route::get('/research', [NavigationController::class,'displayresearch'])->name('research');

Route::get('/contact', [NavigationController::class,'contact'])->name('contact');
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin');


Route::group(['middleware'=>['AccessControl']],function(){

   Route::get('/dashboard',[DashboardController::class,'index']);
   Route::get('/dashboard',[DashboardController::class,'count']);

Route::get('/addmember',[AddMembers::class,'addmember'])->name('addmember');
Route::post('/addmember',[AddMembers::class,'submit'])->name('addmember');


Route::get('/addphotos',[AddPhotos::class,'index'])->name('addphotos');
Route::post('/addphotos',[AddPhotos::class,'upload'])->name('addphotos');
Route::get('/viewphotos',[AddPhotos::class,'viewphotos'])->name('view.photos');


Route::get('/addevents',[AddEvents::class,'addevents'])->name('addevents');
Route::post('/addevents',[AddEvents::class,'submit'])->name('addevents');
Route::get('/viewevents',[AddEvents::class,'viewevent'])->name('view.events');

Route::get('/addresearch',[AddResearch::class,'addresearch'])->name('addresearch');
Route::post('/addresearch',[AddResearch::class,'submit'])->name('addresearch');
Route::get('/viewresearch',[AddResearch::class,'viewresearch'])->name('view.research');


Route::get('/viewmember',[DeleteMembers::class,'view'])->name('deletemembers');
Route::get('/viewmember/{id}',[DeleteMembers::class,'delete'])->name('delete.members');

Route::get('/addmember/{id}',[DeleteMembers::class,'edit'])->name('edit.members');
Route::post('/update/{id}',[DeleteMembers::class,'update'])->name('update.members');

Route::get('/updateevents',[AddEvents::class,'updateevents'])->name('update.events');
Route::get('/updateresearch',[AddResearch::class,'updateresearch'])->name('update.research');
});
Route::get('/logout',[DashboardController::class,'logout'])->name('logout');

