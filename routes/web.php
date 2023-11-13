<?php

use Illuminate\Support\Facades\Route;

// 追加
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\SendTestMail;

// ルーティングを設定するコントローラーを宣言する
use App\Http\Controllers\PostController;
// ルーティングを設定するコントラーを宣言する（メール）
use App\Http\Controllers\MailSendController;

use App\Http\Controllers\ContactFormController;

use App\Http\Controllers\AjaxTestController;

// use App\Http\Livewire\Destination;

use App\Http\Livewire\Search;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// WEB申請メニュー画面
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
// WEB申請画面を表示
Route::get('/posts/create_applicant',[PostController::class,'create_applicant'])->name('posts.create_applicant');
// 申請画面にて送信先を表示させる
Route::get('/posts/show_destination',[PostController::class,'show_destination'])->name('posts.show_destination');
// Route::get('/posts/create_applicant',[PostController::class,'search_destination'])->name('search_destination');
// 作成用
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
// WEB申請画面（create_applicant.php)に入力されたデータのルート設定を追加とnameを設定することによりblade.phpのformタグに省略して渡せる
Route::post('/posts/store',[PostController::class,'store'])->name('post.store');
// WEB申請画面（購買担当者）
Route::get('/posts/order',[PostController::class,'order'])->name('post.order');




// 申請履歴一覧の箇所
// WEB申請履歴一覧
Route::get('/posts/index_history',[PostController::class,'index_history'])->name('posts.index_history');
// WEB申請履歴一覧からの詳細画面
Route::get('/posts/show_applicant/{id}',[PostController::class,'show_applicant'])->name('post.show_applicant');
// 削除機能
Route::post('/posts/{id}/destroy',[PostController::class,'destroy'])->name('post.destroy');
// WEB申請履歴一覧からの複写画面・編集
Route::get('/posts/edit_applicant/{id}',[PostController::class,'edit_applicant'])->name('post.edit_applicant');
// 複写画面
Route::get('/posts/create_copy/{id}',[ItemController::class,'create_copy'])->name('post.create_copy');
// 編集画面
Route::get('/posts/{id}/edit',[PostController::class,'edit'])->name('post.edit');
// 編集更新
Route::post('/posts/{id}/update',[PostController::class,'update'])->name('post.update');
// WEB申請画面（上長）の表示
Route::get('/posts/create_authorizer',[PostController::class,'create_authorizer'])->name('posts.create_authorizer');





// WEBプロフィール画面一覧
Route::get('/posts/profile',[PostController::class,'profile'])->name('posts.profile');
// WEBパスワード変更画面
Route::get('/posts/{posts}/edit_password',[PostController::class,'posts.edit_password'])->name('posts.edit_password');
// パスワード編集画面
Route::controller(PostController::class)->group(function () {
Route::get('/posts/edit_password', 'edit_password')->name('posts.edit_password');
Route::put('/posts/edit_password', 'update_password')->name('posts.update_password');  
});




// 後略
// パスワード変更の編集させるための画面を表示させる
// Route::controller(PostController::class)->group(function () {
//     Route::get('/posts/change_pass', 'change_pass')->name('change_pass');
//     Route::get('/posts/change_pass', 'edit')->name('change_pass.edit');
//     Route::put('/posts/change_pass', 'update')->name('change_pass.update');
// });

// // ルートの追加（メール）
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::post('/contact', [ContactFormController::class, 'store']);


// mailにアクセスしたらPostController::class,'send'を呼び出し実行
// Route::get('/posts/mail', [PostController::class,'send']);

// WEB申請画面をユーザーに渡す（テスト画面を表示させる）
// Route::get('/posts/applicant_t',[PostController::class,'applicant_t'])->name('posts.applicant_t');


// Route::get('/destination',Destination::class)->name('destination');

// Route::get('/',Destination::class)->name('destination');


// メールアドレスを取得するように設定をする
Route::get("/api/emails/{id}",[PostController::class,'choiceEmail'])->name('choice_email');




// 実験用
Route::get('/ajax_test', [AjaxTestController::class,'getIndex'])->name('ajax_test');
Route::get('/ajax_test/show_all', [AjaxTestController::class,'showAll'])->name('show_all');
