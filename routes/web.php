<?php

use App\Http\Controllers\admin\gereEns\Enseignat;
use App\Http\Controllers\admin\gereEtudiant\Etudiant;
use App\Http\Controllers\Dashbord;
use App\Http\Controllers\Role;
use App\Http\Controllers\Client\Client;
use App\Http\Controllers\gereformation\Formation;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 
});





Route::prefix('admin')->name('admin.')->middleware(['auth,is_admin'])->group(function () {
    Route::resource('enseignant', Enseignat::class);
   
    Route::resource('etudiant', Etudiant::class);
    Route::resource('formation', Formation::class);

   
});

Route::prefix('client')->name('client.')->group(function () {
    Route::resource('formation', Client::class);
});
Route::get('/home', [Client::class, 'index1'])->name('home');
Route::post('/contact', [Client::class, 'contact'])->name('contact');
Route::get('/', [Client::class, 'index'])->name('client');





Route::middleware(['auth'])->group(function () {//admin
    Route::get('/notification', [Dashbord::class, 'notification','nunberNot'])->name('notifications');
    Route::get('/Viewnotification{id}', [Dashbord::class, 'markNotificationAsRead'])->name('viewNotification');
    Route::get('/lunotification', [Dashbord::class, 'showlunotification'])->name('lunotification');
    Route::get('/nonlunotification', [Dashbord::class, 'nonlunotification'])->name('nonlunotification');
    Route::delete('/daleteNotification{notification}', [Dashbord::class, 'deleteNotification'])->name('deleteNotification');
    Route::get('/corbeille', [Dashbord::class, 'corbeille'])->name('corbeille');

    Route::delete('/daleteNotificationcorbeille{notification}', [Dashbord::class, 'deleteNotificationfinal'])->name('deleteNotificationfinal');
   
});
Route::get('/dashboard', [Dashbord::class, 'index'])->middleware(['auth', 'verified','is_admin:admin'])->name('dashboard');

Route::get('/new', [Role::class,'index'])->name('index');

Route::middleware(['auth'])->group(function () {
Route::get('/new',[Role::class,'create'])->name('new');
Route::post('/new',[Role::class,'store']);
Route::get('/Users',[Role::class,'index'])->name('users');
Route::delete('/delete{user}',[Role::class,'destroy'])->name('delete');
Route::get('/edit{user}',[Role::class,'edit'])->name('edit');
Route::post('/edit{user}',[Role::class,'update']);
});

Route::prefix('users')->name('user.')->middleware(['auth'])->group(function () {//user

    Route::get('/userProfile',[User::class,'index'])->name('userProfile');



});





require __DIR__ . '/auth.php';
