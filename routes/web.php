<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagehandle;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

	Route::get('/', [Pagehandle::class,'about'])->name('about');


Route::group(['middleware'=>'auth'],function (){
	Route::post('publish/comment',[Pagehandle::class,'comment_store'])->name('publish_comment');
Route::get('/sample/page', [Pagehandle::class,'sample'])->name('sample');  
Route::post('/blog_posted', [Pagehandle::class,'poststore'])->name('blog_post');  
Route::post('/blog/deleted', [Pagehandle::class,'delete'])->name('post_del');  


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
