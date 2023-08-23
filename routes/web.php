<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminBlogCatController;
 
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AjaxController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('admin-blog', [AdminBlogController::class, 'index']);
    Route::get('/add_blog',  [AdminBlogController::class, 'add']);
    Route::post('admin-blog/store',  [AdminBlogController::class, 'blogsave']);
    Route::get('admin-blog/edit/{id}', [AdminBlogController::class, 'edit']);
    Route::post('admin-blog/update', [AdminBlogController::class, 'update']);
    Route::get('admin-blog/delete/{id}', [AdminBlogController::class, 'delete']);
    Route::get('admin-blog-cat', [AdminBlogCatController::class, 'index']);
    Route::get('/add_blog-cat',  [AdminBlogCatController::class, 'add']);
    Route::post('admin-blog-cat/store',  [AdminBlogCatController::class, 'blogsave']);
    Route::get('admin-blog-cat/edit/{id}', [AdminBlogCatController::class, 'edit']);
    Route::post('admin-blog-cat/update', [AdminBlogCatController::class, 'update']);
    Route::get('admin-blog-cat/delete/{id}', [AdminBlogCatController::class, 'delete']);
    

});

require __DIR__.'/auth.php';

Route::get('/home',  [HomeController::class, 'index'])->name('home');
//Route::get('/login',  [HomeController::class, 'error');
Route::group(['middleware' => ['auth', 'role:admin']], function () {
Route::get('/safe-ecb',  [HomeController::class, 'login']);
Route::get('/brand',  [BrandController::class, 'index']);
Route::get('/add_brand',  [BrandController::class, 'add']);
Route::post('brand/store',  [BrandController::class, 'brandsave']);
Route::get('brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('brand/update', [BrandController::class, 'update']);
Route::get('brand/delete/{id}', [BrandController::class, 'delete']);
Route::get('model', [BrandController::class, 'index']);


 Route::get('users', [BrandController::class, 'index']);
 Route::get('/user',  [BrandController::class, 'add']);
 Route::post('user/store',  [BrandController::class, 'save']);
 Route::get('user/edit/{id}', [BrandController::class, 'edit']);
 Route::post('user/update', [BrandController::class, 'update']);
 Route::get('user/delete/{id}', [BrandController::class, 'delete']);
 
 Route::get('/add_model',  [BrandController::class, 'add']);
Route::post('model/store',  [BrandController::class, 'brandsave']);
Route::get('model/edit/{id}', [BrandController::class, 'edit']);
Route::post('model/update', [BrandController::class, 'update']);
Route::get('model/delete/{id}', [BrandController::class, 'delete']);
Route::get('branches', [BranchController::class, 'index']);
Route::get('/add_branch',  [BranchController::class, 'add']);
Route::post('branch/store',  [BranchController::class, 'branchsave']);
Route::get('branch/edit/{id}', [BranchController::class, 'edit']);
Route::post('branch/update', [BranchController::class, 'update']);
Route::get('branch/delete/{id}', [BranchController::class, 'delete']);
Route::get('booking-approve', [BookingController::class, 'index']);
Route::post('booking-approve', [BookingController::class, 'index']);
Route::get('booking/approve/{id}', [BookingController::class, 'approve']);
Route::get('booking/disapprove/{id}', [BookingController::class, 'disapprove']);



});



Route::get('step-1', function(){
  return redirect('/');  
});
Route::Post('step-2', [BookingController::class, 'step_1']);
Route::Post('car-selling-confirmation', [BookingController::class, 'step_2']);
Route::Post('form-step-2', [BookingController::class, 'form_step_1']);
Route::Post('car-selling-confirmation-2', [BookingController::class, 'form_step_2']);
Route::post('contact-us', [BookingController::class, 'contactus']);



Route::get('logout', function () {
   Auth::logout();
  return redirect('/');
});

Route::get('/register', function () {
  Auth::logout();
  return redirect('/');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

/*--------Vue js routes-----------------*/

Route::get('/',  [SinglePageController::class, 'index']);
//Route::get('/sitemap.xml',  [HomeController::class, 'sitemap');
Route::post('/search', [SinglePageController::class, 'search']);

Route::post('/', [SinglePageController::class, 'index']);
Route::get('/about', [SinglePageController::class, 'about']);
Route::get('/sell-my-car-sharjah', [SinglePageController::class, 'sellmycarsharjah']);
Route::get('/sell-my-car-dubai', [SinglePageController::class, 'sellmycardubai']);
Route::get('/sell-my-car-abudhabi', [SinglePageController::class, 'sellmycarabudhabi']);
// Route::get('/car-service', [SinglePageController::class, 'carservice');
Route::get('/faqs', [SinglePageController::class, 'faqs']);
Route::get('/contact', [SinglePageController::class, 'contact']);
Route::get('/sell-any-car', [SinglePageController::class, 'sellanycar']);
Route::get('/we-cash-any-car', [SinglePageController::class, 'cashanycar']);
Route::get('/we-buy-any-car', [SinglePageController::class, 'buyanycar']);
Route::get('/homemodel/{brand_id}', [AjaxController::class,'homemodel']);
Route::post('/booking',  [BookingController::class, 'create_booking']);
Route::get('/blog', [SinglePageController::class, 'blog']);

Route::get('/blog/page/{number}', [SinglePageController::class, 'showPage']);
Route::get('/blog/{any}', [SinglePageController::class, 'blogsingle']);
Route::get('/category/{any}', [SinglePageController::class, 'blogcategory']);


//sell my car
Route::get('/sell-cars/acura', [SinglePageController::class, 'sell_acura']);
Route::get('/sell-cars/bugatti', [SinglePageController::class, 'sell_bugatti']);
Route::get('/sell-cars/ferrari', [SinglePageController::class, 'sell_ferrari']);
Route::get('/sell-cars/infiniti', [SinglePageController::class, 'sell_infiniti']);
Route::get('/sell-cars/land-rover', [SinglePageController::class, 'sell_land_rover']);
Route::get('/sell-cars/mazda', [SinglePageController::class, 'sell_mazda']);
Route::get('/sell-cars/opel', [SinglePageController::class, 'sell_opel']);
Route::get('/sell-cars/subaru', [SinglePageController::class, 'sell_subaru']);


Route::get('/sell-cars/alfa-romeo', [SinglePageController::class, 'sell_alfa_romeo']);
Route::get('/sell-cars/fiat', [SinglePageController::class, 'sell_fiat']);
Route::get('/sell-cars/jaguar', [SinglePageController::class, 'sell_jaguar']);
Route::get('/sell-cars/lexus', [SinglePageController::class, 'sell_lexus']);
Route::get('/sell-cars/mcLaren', [SinglePageController::class, 'sell_mcLaren']);
Route::get('/sell-cars/peugeot', [SinglePageController::class, 'sell_peugeot']);
Route::get('/sell-cars/suzuki', [SinglePageController::class, 'sell_suzuki']);


Route::get('/sell-cars/aston-martin', [SinglePageController::class, 'sell_aston_martin']);
Route::get('/sell-cars/cadillac', [SinglePageController::class, 'sell_cadillac']);
Route::get('/sell-cars/ford', [SinglePageController::class, 'sell_ford']);
Route::get('/sell-cars/jeep', [SinglePageController::class, 'sell_jeep']);
Route::get('/sell-cars/lincoln', [SinglePageController::class, 'sell_lincoln']);
Route::get('/sell-cars/mercedes-benz', [SinglePageController::class, 'sell_mercedes_benz']);
Route::get('/sell-cars/tesla', [SinglePageController::class, 'sell_tesla']);
Route::get('/sell-cars/pontiac', [SinglePageController::class, 'sell_pontiac']);


Route::get('/sell-cars/audi', [SinglePageController::class, 'sell_audi']);
Route::get('/sell-cars/chevrolet', [SinglePageController::class, 'sell_chevrolet']);
Route::get('/sell-cars/gmc', [SinglePageController::class, 'sell_gmc']);
Route::get('/sell-cars/kia', [SinglePageController::class, 'sell_kia']);
Route::get('/sell-cars/lotus', [SinglePageController::class, 'sell_lotus']);
Route::get('/sell-cars/mini', [SinglePageController::class, 'sell_mini']);
Route::get('/sell-cars/porsche', [SinglePageController::class, 'sell_porsche']);
Route::get('/sell-cars/toyota', [SinglePageController::class, 'sell_toyota']);


Route::get('/sell-cars/bentley', [SinglePageController::class, 'sell_bentley']);
Route::get('/sell-cars/chrysler', [SinglePageController::class, 'sell_chrysler']);
Route::get('/sell-cars/honda', [SinglePageController::class, 'sell_honda']);
Route::get('/sell-cars/maserati', [SinglePageController::class, 'sell_maserati']);
Route::get('/sell-cars/mitsubishi', [SinglePageController::class, 'sell_mitsubishi']);
Route::get('/sell-cars/renault', [SinglePageController::class, 'sell_renault']);
Route::get('/sell-cars/volkswagen', [SinglePageController::class, 'sell_volkswagen']);


Route::get('/sell-cars/bmw', [SinglePageController::class, 'sell_bmw']);
Route::get('/sell-cars/dodge', [SinglePageController::class, 'sell_dodge']);
Route::get('/sell-cars/hyundai', [SinglePageController::class, 'sell_hyundai']);
Route::get('/sell-cars/lamborghini', [SinglePageController::class, 'sell_lamborghini']);
Route::get('/sell-cars/maybach', [SinglePageController::class, 'sell_maybach']);
Route::get('/sell-cars/nissan', [SinglePageController::class, 'sell_nissan']);
Route::get('/sell-cars/rolls-royce', [SinglePageController::class, 'sell_rolls_royce']);
Route::get('/sell-cars/volvo', [SinglePageController::class, 'sell_volvo']);


/*--------END Vue js routes-----------------*/

Route::get('/sell-cars', [SinglePageController::class, 'sellCars']);
Route::get('/sell-cars/dubai', [SinglePageController::class, 'sellCarsDubai']);
Route::get('/sell-cars/sharjah', [SinglePageController::class, 'sellCarsSharjah']);
Route::get('/sell-cars/abu-dhabi', [SinglePageController::class, 'sellCarsAbuDhabi']);
Route::get('/sell-cars/evaluate-your-car', [SinglePageController::class, 'sellCarsEvaluateYourCar']);

Route::get('/privacy-policy', [SinglePageController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [SinglePageController::class, 'termsCondition']);

Route::get('/sell-cars/{slug}', [SinglePageController::class, 'inner_pages']);

// New Work 09-08-2023


Route::get('/sell-used-cars', [SinglePageController::class, 'scrapCarBuyers']);
Route::get('/scrap-car-buyers', [SinglePageController::class, 'sellUsedCars']);
