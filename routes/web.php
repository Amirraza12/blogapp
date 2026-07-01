<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\serviceController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Basic Routes 

// Route::get('/home', function () {
//     return 'Home Page';
// });

// Route::get('/about', function () {
//     return "About Page";
// });
// Route::get('/contact', function () {
//     return 'Contact Pgae';
// });

// . Route with Controller (REAL PROJECT STYLE)
Route::get('/home',[PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact',[PageController::class, 'contact']);


// 5. Route Parameters (IMPORTANT)

Route::get('/user/{id}', function ($id) {
    return 'User ID is: ' . $id;
});

Route::get('/employee/{id}', function ($id) {
    return 'Employee ID is: ' . $id;
});

Route::get('/student/{id}', function ($id) {
    return 'Student Roll No is: ' . $id;
});


//  Multiple parameters

Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "POST ID: $id | slug: $slug";
});

Route::get('/get/{id}/{slug}', function ($id, $slug) {
    return "Get Id $id | slug : $slug";
});



// Named Routes (VERY IMPORTANT)
Route::get('/dashboard', function () {
    return 'Dashboar';
})->name('dashboard');

Route::get('/blog', function () {
    return 'Blog page';
})->name('blog');

// Route with Controller + Name
Route::get('/faq',[PageController::class,'faq'])->name('faq');

// Route Group (ADVANCED CONCEPT)
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return 'Admin Dashboard';
    });
});

// Service Controller Route
Route::get('service/web',[serviceController::class,'web'])->name('web');
Route::get('service/app',[serviceController::class,'app'])->name('app');
Route::get('service/seo',[serviceController::class,'seo'])->name('seo');



//  CRUD ELOQUENT ORM
Route::get('/add-product',[ProductController::class,'create']);
Route::post('/add-product', [ProductController::class, 'store']);

// Inert with form validation 
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'create_product']);
Route::post('/product/store', [ProductController::class, 'store_product'])->name('product.store');
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/update/{id}', [ProductController::class, 'update']);
Route::get('/products/delete/{id}', [ProductController::class, 'destroy']);