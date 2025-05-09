<?php

use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('about', [App\Http\Controllers\HomeController::class, 'aboutus']);
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contactus']);
Route::post('contact', [App\Http\Controllers\HomeController::class, 'postContact'])->name('contact.submit');

Route::get('menu', [App\Http\Controllers\HomeController::class, 'ourmenu']);
Route::get('blog', [App\Http\Controllers\HomeController::class, 'ourblog']);
Route::get('blogdetails', [App\Http\Controllers\HomeController::class, 'blogs']);
Route::get('premium', [App\Http\Controllers\HomeController::class, 'ourpremium'])->name('subscription.plans');
Route::get('faq', [App\Http\Controllers\HomeController::class, 'ourfaq']);
Route::get('search', [App\Http\Controllers\HomeController::class, 'oursearch']);
Route::get('verify-auction', [App\Http\Controllers\HomeController::class, 'verifiedProperty'])->name('verifiedProperty');

Route::post('add-to-wishlist', [App\Http\Controllers\HomeController::class, 'addToWishlist']);


Route::post('remove-from-wishlist', [App\Http\Controllers\HomeController::class, 'removeFromWishlist']);




// Route::get('ibc-auction', [App\Http\Controllers\HomeController::class, 'ibcAuction']);
// Route::get('car-auction', [App\Http\Controllers\HomeController::class, 'carAuction']);
// Route::get('drt-auction', [App\Http\Controllers\HomeController::class, 'drtAuction']);
// Route::get('jewellery-auction', [App\Http\Controllers\HomeController::class, 'jewelleryAuction']);



Route::get('notice', [App\Http\Controllers\HomeController::class, 'allNotice']);


Route::get('noticedetails', [App\Http\Controllers\HomeController::class, 'allNoticeDetails']);


Route::get('search-details/{slug}', [App\Http\Controllers\HomeController::class, 'oursearchDetails'])->name('auction.details');


Route::get('find-property', [App\Http\Controllers\HomeController::class, 'findProperty']);





Route::post('/buy-plan', [App\Http\Controllers\HomeController::class, 'buyPlan'])->name('buy.plan');

// wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index')->middleware('auth');
Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->middleware('auth')->name('wishlist.toggle');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout',['middleware' => 'auth', 'uses' =>'App\Http\Controllers\HomeController@getLogout']);


Route::get('admin/user-management', ['middleware' => 'auth', 'uses' =>'LocationController@getDeleteLocation']);








Route::get('admin/user-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@all']);

Route::get('admin/user-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@allData']);


Route::get('admin/create-user', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@getAddUser']);
Route::post('admin/create-user', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@postAddUser']);

Route::get('admin/update-user/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@getEditUser']);
Route::post('admin/update-user/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@postEditUser']);

Route::get('admin/active-user/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@activeUser']);
Route::get('admin/inactive-user/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@inactiveUser']);

Route::get('admin/delete-user/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\UserController@delete']);



//category

Route::get('admin/category-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@all']);
Route::get('admin/category-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@allData']);

Route::get('admin/create-category', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@getAddCategory']);
Route::post('admin/create-category', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@postAddCategory']);

Route::get('admin/update-category/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@getEditCategory']);
Route::post('admin/update-category/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@postEditCategory']);

Route::get('admin/active-category/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@activeCategory']);
Route::get('admin/inactive-category/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@inactiveCategory']);

Route::get('admin/delete-category/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\CategoryController@delete']);




//subscription

Route::get('admin/subscription-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@all']);
Route::get('admin/subscription-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@allData']);

Route::get('admin/create-subscription', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@getAddSubscription']);
Route::post('admin/create-subscription', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@postAddSubscription']);


Route::get('admin/update-subscription/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@getEditSubscription']);
Route::post('admin/update-subscription/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@postEditSubscription']);

Route::get('admin/active-subscription/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@activeSubscription']);
Route::get('admin/inactive-subscription/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@inactiveSubscription']);

Route::get('admin/delete-subscription/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\SubscriptionController@delete']);




//notice

Route::get('admin/notice-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@all']);
Route::get('admin/notice-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@allData']);

Route::get('admin/create-notice', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@getAddNotice']);
Route::post('admin/create-notice', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@postAddNotice']);

Route::get('admin/update-notice/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@getEditNotice']);
Route::post('admin/update-notice/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@postEditNotice']);

Route::get('admin/active-notice/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@activeNotice']);
Route::get('admin/inactive-notice/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@inactiveNotice']);

Route::get('admin/delete-notice/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\NoticeController@delete']);


//advertising

Route::get('admin/advertising-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@all']);
Route::get('admin/advertising-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@allData']);

Route::get('admin/create-advertising', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@getAddAdvertising']);
Route::post('admin/create-advertising', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@postAddAdvertising']);
Route::get('admin/update-advertising/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@getEditAdvertising']);

Route::post('admin/update-advertising/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@postEditAdvertising']);

Route::get('admin/active-advertising/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@activeAdvertising']);
Route::get('admin/inactive-advertising/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@inactiveAdvertising']);
Route::get('admin/delete-advertising/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AdvertisingController@delete']);




//auction

Route::get('admin/auction-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@all']);
Route::get('admin/auction-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@allData']);

Route::get('admin/create-auction', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@getAddAuction']);
Route::post('admin/create-auction', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@postAddAuction']);

Route::get('admin/update-auction/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@getEditAuction']);
Route::post('admin/update-auction/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@postEditAuction']);

Route::get('admin/active-auction/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@activeAuction']);
Route::get('admin/inactive-auction/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@inactiveAuction']);

Route::get('admin/view-auction/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@view']);

Route::get('admin/delete-auction/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\AuctionController@delete']);

//Blog

Route::get('admin/blog-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@all']);
Route::get('admin/blog-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@allData']);

Route::get('admin/create-blog', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@getCreateBlog']);
Route::post('admin/create-blog', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@postCreateBlog']);

Route::get('admin/update-blog/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@getEditBlog']);
Route::post('admin/update-blog/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@postEditBlog']);

Route::get('admin/active-blog/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@activeBlog']);
Route::get('admin/inactive-blog/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@inactiveBlog']);

Route::get('admin/delete-blog/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BlogController@delete']);

//Bank

Route::get('admin/bank-management', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@all']);
Route::get('admin/bank-management-allData', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@allData']);

Route::get('admin/create-bank', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@getAddBank']);
Route::post('admin/create-bank', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@postAddBank']);

Route::get('admin/update-bank/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@getEditBank']);
Route::post('admin/update-bank/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@postEditBank']);

Route::get('admin/active-bank/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@activeBank']);
Route::get('admin/inactive-bank/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@inactiveBank']);

Route::get('admin/delete-bank/{id}', ['middleware' => 'auth', 'uses' =>'App\Http\Controllers\BankController@delete']);






