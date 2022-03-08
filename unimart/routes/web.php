<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware('auth')->group(function(){
    //Bắt đầu DashboardController
    Route::get('dashboard','DashboardController@show');
    Route::get('admin','DashboardController@show');       //  giống route dashboard
    //Kết thúc DashboardController

    // Bắt đầu AdminUserController 
    Route::get('admin/user/list','AdminUserController@list');
    Route::get('admin/user/add','AdminUserController@add');
    Route::post('admin/user/store','AdminUserController@store');
    Route::get('admin/user/delete/{id}','AdminUserController@delete')->name('delete_user');
    Route::get('admin/user/edit/{id}','AdminUserController@edit')->name('user.edit');
    Route::post('admin/user/update/{id}','AdminUserController@update')->name('user.update');
    Route::get('admin/user/action','AdminUserController@action');
    // Kết thúc AdminUserController 

    // // Bắt đầu AdminProductController 
    // Route::get('admin/product/list','AdminProductController@list');
    // Route::get('admin/product/add','AdminProductController@add');  
    // Route::post('admin/product/action','AdminProductController@action');  
    // Route::post('admin/product/store','AdminProductController@store');  
    // Route::get('admin/product/edit/{id}','AdminProductController@edit')->name('product.edit');
    // Route::post('admin/product/update/{id}','AdminProductController@update')->name('product.update');
    // Route::get('admin/product/delete/{id}','AdminProductController@delete')->name('delete_product');
    //Kết thúc AdminProductController

    //Bắt đầu AdminProductCatsController
    Route::get('admin/product/cat/list','AdminProductCatsController@list');
    Route::get('admin/product/cat/list','AdminProductCatsController@add');
    Route::post('admin/product/cat/store','AdminProductCatsController@store');
    // Kết thúc AdminProductCatsController 
});
 // Bắt đầu AdminProductController 
 Route::get('admin/product/list','AdminProductController@list');
 Route::get('admin/product/add','AdminProductController@add');  
 Route::post('admin/product/action','AdminProductController@action');  
 Route::post('admin/product/store','AdminProductController@store');  
 Route::get('admin/product/edit/{id}','AdminProductController@edit')->name('product.edit');
 Route::post('admin/product/update/{id}','AdminProductController@update')->name('product.update');
Route::get('admin/product/delete/{id}','AdminProductController@delete')->name('delete.product');

// Bắt đầu AdminPageController 
Route::get('admin/page/list','AdminPageController@list');
Route::get('admin/page/add','AdminPageController@add');
Route::post('admin/page/store','AdminPageController@store');
Route::get('admin/page/delete/{id}','AdminPageController@delete')->name('delete_page');
// Kết thúc AdminPageController 

// Bắt đầu AdminPostController 
Route::get('admin/post/list','AdminPostController@list');
Route::get('admin/post/add','AdminPostController@add');
Route::get('admin/post/cat/add','AdminPostController@cat');
// Kết thúc AdminPostController 

 // Bắt đầu AdminOrderController 
 Route::get('admin/order/list' ,'AdminOrderController@list');
 Route::post('admin/order/action' ,'AdminOrderController@action');
 Route::get('admin/order/edit/{id}' ,'AdminOrderController@edit')->name('edit.order');
 Route::get('admin/order/delete/{id}','AdminOrderController@delete')->name('delete_order');
 Route::post('admin/order/update/{id}','AdminOrderController@update')->name('order.update');
 // Kết thức AdminOrderController 


//  Bắt đầu FrontController
Route::get('/','FrontController@index')->name('index');
Route::get('lien-he','FrontController@contact')->name('contact');
Route::post('/tim-kiem','FrontController@search')->name('search');
Route::get('listproduct/{id}','FrontController@listproduct')->name('product');

Route::get('product/detail/{id}','FrontController@detailproduct')->name('detail.product');
// Route::get('home','FrontController@home')->name('index');
// Kết thúc FrontController 



// Bắt đầu CartController
Route::get('cart/show','CartController@show')->name('showcart');
Route::get('cart/add/{id}','CartController@add')->name('addcart');
Route::get('cart/remove/{rowId}','CartController@remove')->name('removecart');
Route::get('cart/destroy','CartController@destroy')->name('destroycart');
Route::post('cart/update','CartController@update')->name('updatecart');
Route::get('cart/updateAjax','CartController@update_ajax');
// Kết thúc Cartcontroller 


// Bắt đầu CheckoutController 
Route::get('cart/checkout','CheckoutController@checkout')->name('checkoutcart');
Route::post('save-checkout-customer','CheckoutController@insert')->name('insertcustomer');
Route::get('checkout/{id}','CheckoutController@buynow')->name('buynow');
Route::post('checkout/buynow/{id}','CheckoutController@store_buynow')->name('store.buynow');
// Kết thúc CheckoutController 
