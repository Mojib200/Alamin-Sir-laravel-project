<?php
use App\Http\Controllers\ColorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use app\http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VariationController;
use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


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

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('coustomer');
Route::get('/', [FrontendController::class, 'index'])->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });


//frontend Controller start
Route::get('/accounts', [App\Http\Controllers\FrontendController::class, 'accounts'])->name('accounts');
Route::get('/about_us', [App\Http\Controllers\FrontendController::class, 'about_us'])->name('about_us');
Route::post('/coustomer_reg', [App\Http\Controllers\FrontendController::class, 'coustomer_reg'])->name('coustomer_reg');
Route::post('/coustomer_login', [App\Http\Controllers\FrontendController::class, 'coustomer_login'])->name('coustomer_login');
Route::get('/product_deatiles/{id}', [App\Http\Controllers\FrontendController::class, 'product_deatiles'])->name('product_deatiles');


//github
Route::get('/github_redirect', [App\Http\Controllers\FrontendController::class, 'github_redirect'])->name('github_redirect');

Route::get('/github_callback', [App\Http\Controllers\FrontendController::class, 'github_callback'])->name('github_callback');


//github stop


//frontend Controller stop

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');


Route::get('/cover_photo', [App\Http\Controllers\ProfileController::class, 'cover_photo'])->name('cover_photo');


Route::post('/profile/photo', [App\Http\Controllers\ProfileController::class, 'profile_upload'])->name('profile_photo');


Route::post('/cover_photo', [App\Http\Controllers\ProfileController::class, 'cover_upload'])->name('cover_photo');


Route::post('/password_change', [App\Http\Controllers\ProfileController::class, 'password_change'])->name('password_change');

Route::post('/name_change', [App\Http\Controllers\ProfileController::class, 'name_change'])->name('name_change');

Route::post('/email_change', [App\Http\Controllers\ProfileController::class, 'email_change'])->name('email_change');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Categorie Controller start

Route::resource('categorie', App\Http\Controllers\CategorieController::class);


//Categorie Controller end
//product Controller start

Route::resource('product', App\Http\Controllers\ProductController::class);


//product Controller end
//Variation Controller start

Route::resource('variation', VariationController::class);
Route::get('color.index', [ColorController::class, 'index'])->name('color.index');


//Variation Controller end


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
