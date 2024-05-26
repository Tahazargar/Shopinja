<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\DiscountController;
use App\Http\Controllers\Admin\Market\GalleryController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\Market\PaymentController;
use App\Http\Controllers\Admin\Market\StoreController;
use App\Http\Controllers\Admin\Ticket\TicketController;
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

// Admin Routes
Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.home');
    Route::prefix('market')->namespace('Market')->group(function (){

        // Category Market
        Route::prefix('category')->name('category.')->group(function (){
            Route::resource('/', CategoryController::class);
        });

        // Brand
        Route::prefix('brand')->name('brand.')->group(function (){
            Route::resource('/', BrandController::class);
        });

        // Comment
        Route::prefix('comment')->name('comment.')->group(function (){
            Route::resource('/', CommentController::class);
        });

        // Delivery
        Route::prefix('delivery')->name('delivery.')->group(function (){
            Route::resource('/', DeliveryController::class);
        });

        // Discount
        Route::prefix('discount')->group(function (){
            Route::get('/coupon', [DiscountController::class, 'coupon'])->name('discount.coupon');
            Route::get('/coupon/create', [DiscountController::class, 'couponCreate'])->name('discount.coupon.create');
            Route::get('/common-discount', [DiscountController::class, 'commonDiscount'])->name('discount.commonDiscount');
            Route::get('/common-discount/create', [DiscountController::class, 'commonDiscountCreate'])->name('discount.commonDiscount.create');
            Route::get('/amazing-sale', [DiscountController::class, 'amazingSale'])->name('discount.amazingSale');
            Route::get('/amazing-sale/create', [DiscountController::class, 'amazingSaleCreate'])->name('discount.amazingSale.create');
        });

        // Order
        Route::prefix('order')->group(function (){
            Route::get('/', [OrderController::class, 'allOrders'])->name('order.all');
            Route::get('new-order', [OrderController::class, 'newOrders'])->name('order.new');
            Route::get('sending', [OrderController::class, 'sending'])->name('order.sending');
            Route::get('unpaid', [OrderController::class, 'unpaid'])->name('order.unpaid');
            Route::get('canceled', [OrderController::class, 'canceled'])->name('order.canceled');
            Route::get('returned', [OrderController::class, 'returned'])->name('order.returned');
            Route::get('show', [OrderController::class, 'show'])->name('order.show');
            Route::get('change-send-status', [OrderController::class, 'changeSendStatus'])->name('order.changeSendStatus');
            Route::get('change-order-status', [OrderController::class, 'changeOrderStatus'])->name('order.changeOrderStatus');
            Route::get('cancel-order', [OrderController::class, 'cancelOrder'])->name('order.cancelOrder');
        });

        // Payment
        Route::prefix('payment')->group(function (){
            Route::get('/', [PaymentController::class, 'index'])->name('payment.index');
            Route::get('online', [PaymentController::class, 'online'])->name('payment.online');
            Route::get('offline', [PaymentController::class, 'offline'])->name('payment.offline');
            Route::get('attendance', [PaymentController::class, 'attendance'])->name('payment.attendance');
            Route::get('confirm', [PaymentController::class, 'confirm'])->name('payment.confirm');
        });

        // Product
        Route::prefix('product')->name('product.')->group(function (){
            Route::resource('/', ProductController::class);

            // Gallery
            Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
            Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
            Route::delete('gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
        });

        // Property
        Route::prefix('property')->name('property.')->group(function (){
            Route::resource('/', PropertyController::class);
        });

        Route::prefix('store')->group(function (){
            Route::get('/', [StoreController::class, 'index'])->name('store.index');
            Route::get('add-to-store', [StoreController::class, 'addToStore'])->name('store.add-to-store');
            Route::post('store', [StoreController::class, 'store'])->name('store.store');
            Route::get('edit/{id}', [StoreController::class, 'edit'])->name('store.edit');
            Route::put('update/{id}', [StoreController::class, 'update'])->name('store.update');
            Route::delete('destroy/{id}', [StoreController::class, 'destroy'])->name('store.destroy');
        });
    });

    Route::prefix('content')->namespace('Content')->group(function (){

        // Category
        Route::prefix('category')->group(function (){
            Route::get('/', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'index'])->name('content.category.index');
            Route::get('create', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'create'])->name('content.category.create');
            Route::post('store', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'store'])->name('content.category.store');
            Route::get('edit/{postCategory}', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'edit'])->name('content.category.edit');
            Route::put('update/{postCategory}', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'update'])->name('content.category.update');
            Route::delete('destroy/{postCategory}', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'destroy'])->name('content.category.destroy');
            Route::get('status/{postCategory}', [\App\Http\Controllers\Admin\Content\CategoryController::class, 'status'])->name('content.category.status');
        });

        // Comment
        Route::prefix('comment')->name('content.comment.')->group(function (){
            Route::resource('/', CommentController::class);
        });

        // FAQ
        Route::prefix('faq')->name('faq.')->group(function (){
            Route::resource('/', FAQController::class);
        });

        // Menu
        Route::prefix('menu')->name('menu.')->group(function (){
            Route::resource('/', MenuController::class);
        });

        // Page builder
        Route::prefix('page-builder')->name('pageBuilder.')->group(function (){
            Route::resource('/', PageBuilderController::class);
        });

        // Post
        Route::prefix('post')->name('post.')->group(function (){
            Route::resource('/', PostController::class);
        });
    });

    Route::prefix('user')->namespace('User')->group(function (){
        Route::prefix('admin-user')->name('user.admin.')->group(function (){
            Route::resource('/', AdminUserController::class);
        });

        // Customer
        Route::prefix('customer')->name('user.customer.')->group(function (){
            Route::resource('/', CustomerUserController::class);
        });

        // Role
        Route::prefix('role')->name('role.')->group(function (){
            Route::resource('/', RoleController::class);
        });

        // Permission
        Route::prefix('permission')->name('permission.')->group(function (){
            Route::resource('/', PermissionController::class);
        });

    });

    Route::prefix('notify')->namespace('Notify')->group(function (){
        // Email
        Route::prefix('email')->name('email.')->group(function (){
            Route::resource('/', EmailController::class);
        });

        // SMS
        Route::prefix('sms')->name('sms.')->group(function (){
            Route::resource('/', SMSController::class);
        });
    });

    Route::prefix('ticket')->namespace('Ticket')->group(function (){
        Route::get('/', [TicketController::class, 'index'])->name('ticket.index');
        Route::get('create', [TicketController::class, 'addToStore'])->name('ticket.create');
        Route::post('store', [TicketController::class, 'store'])->name('ticket.store');
        Route::get('edit/{id}', [TicketController::class, 'edit'])->name('ticket.edit');
        Route::put('update/{id}', [TicketController::class, 'update'])->name('ticket.update');
        Route::get('show', [TicketController::class, 'show'])->name('ticket.show');
        Route::delete('destroy/{id}', [TicketController::class, 'destroy'])->name('ticket.destroy');
        Route::get('new-tickets', [TicketController::class, 'newTickets'])->name('ticket.new-tickets');
        Route::get('open-tickets', [TicketController::class, 'openTickets'])->name('ticket.open-tickets');
        Route::get('closed-tickets', [TicketController::class, 'closedTickets'])->name('ticket.closed-tickets');
    });

    Route::prefix('setting')->name('setting.')->namespace('Setting')->group(function (){
        Route::resource('/', SettingController::class);
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
