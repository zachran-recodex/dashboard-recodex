<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Route::get('/dashboard', function () {
//    return view('dashboard.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/crm', [DashboardController::class, 'crm'])->name('crm');
            Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('ecommerce');
            Route::get('/crypto-currency', [DashboardController::class, 'cryptoCurrency'])->name('crypto-currency');
            Route::get('/investment', [DashboardController::class, 'investment'])->name('investment');
            Route::get('/lms', [DashboardController::class, 'lms'])->name('lms');
            Route::get('/nft', [DashboardController::class, 'nft'])->name('nft');
        });

        Route::get('/email', [DashboardController::class, 'email'])->name('email');

        Route::get('/chat-message', [DashboardController::class, 'chatMessage'])->name('chat-message');

        Route::get('/calendar', [DashboardController::class, 'calendar'])->name('calendar');

        Route::get('/kanban', [DashboardController::class, 'kanban'])->name('kanban');

        Route::prefix('invoice')->name('invoice.')->group(function () {
            Route::get('/list', [DashboardController::class, 'invoiceList'])->name('list');
            Route::get('/preview', [DashboardController::class, 'invoicePreview'])->name('preview');
            Route::get('/add', [DashboardController::class, 'invoiceAdd'])->name('add');
            Route::get('/edit', [DashboardController::class, 'invoiceEdit'])->name('edit');
        });

        Route::prefix('ai-application')->name('ai-application.')->group(function () {
            Route::get('/text-generator', [DashboardController::class, 'textGenerator'])->name('text-generator');
            Route::get('/code-generator', [DashboardController::class, 'codeGenerator'])->name('code-generator');
            Route::get('/image-generator', [DashboardController::class, 'imageGenerator'])->name('image-generator');
            Route::get('/voice-generator', [DashboardController::class, 'voiceGenerator'])->name('voice-generator');
            Route::get('/video-generator', [DashboardController::class, 'videoGenerator'])->name('video-generator');
        });

        Route::prefix('crypto-currency')->name('crypto-currency.')->group(function () {
            Route::get('/wallet', [DashboardController::class, 'wallet'])->name('wallet');
        });

        Route::prefix('component')->name('component.')->group(function () {
            Route::get('/typography', [DashboardController::class, 'typography'])->name('typography');
            Route::get('/colors', [DashboardController::class, 'colors'])->name('colors');
            Route::get('/button', [DashboardController::class, 'button'])->name('button');
            Route::get('/dropdown', [DashboardController::class, 'dropdown'])->name('dropdown');
            Route::get('/alert', [DashboardController::class, 'alert'])->name('alert');
            Route::get('/card', [DashboardController::class, 'card'])->name('card');
            Route::get('/carousel', [DashboardController::class, 'carousel'])->name('carousel');
            Route::get('/avatar', [DashboardController::class, 'avatar'])->name('avatar');
            Route::get('/progress', [DashboardController::class, 'progress'])->name('progress');
            Route::get('/tabs', [DashboardController::class, 'tabs'])->name('tabs');
            Route::get('/pagination', [DashboardController::class, 'pagination'])->name('pagination');
            Route::get('/badges', [DashboardController::class, 'badges'])->name('badges');
            Route::get('/tooltip', [DashboardController::class, 'tooltip'])->name('tooltip');
            Route::get('/videos', [DashboardController::class, 'videos'])->name('videos');
            Route::get('/star-rating', [DashboardController::class, 'starRating'])->name('star-rating');
            Route::get('/tags', [DashboardController::class, 'tags'])->name('tags');
            Route::get('/list', [DashboardController::class, 'list'])->name('list');
            Route::get('/radio', [DashboardController::class, 'radio'])->name('radio');
            Route::get('/switch', [DashboardController::class, 'switch'])->name('switch');
            Route::get('/image-upload', [DashboardController::class, 'imageUpload'])->name('image-upload');
        });

        Route::get('/form', [DashboardController::class, 'form'])->name('form');
        Route::prefix('form')->name('form.')->group(function () {
            Route::get('/layout', [DashboardController::class, 'formLayout'])->name('layout');
            Route::get('/validation', [DashboardController::class, 'formValidation'])->name('validation');
            Route::get('/wizard', [DashboardController::class, 'wizard'])->name('wizard');
        });

        Route::prefix('table')->name('table.')->group(function () {
            Route::get('/basic', [DashboardController::class, 'tableBasic'])->name('basic');
            Route::get('/data', [DashboardController::class, 'tableData'])->name('data');
        });

        Route::prefix('chart')->name('chart.')->group(function () {
            Route::get('/line', [DashboardController::class, 'lineChart'])->name('line');
            Route::get('/column', [DashboardController::class, 'columnChart'])->name('column');
            Route::get('/pie', [DashboardController::class, 'pieChart'])->name('pie');
        });

        Route::get('/widget', [DashboardController::class, 'widget'])->name('widget');

        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/list', [DashboardController::class, 'userList'])->name('list');
            Route::get('/grid', [DashboardController::class, 'userGrid'])->name('grid');
            Route::get('/add', [DashboardController::class, 'addUser'])->name('add');
            Route::get('/view-profile', [DashboardController::class, 'viewProfile'])->name('view-profile');
        });

        Route::prefix('authentication')->name('authentication.')->group(function () {
            Route::get('/sign-in', [DashboardController::class, 'signIn'])->name('sign-in');
            Route::get('/sign-up', [DashboardController::class, 'signUp'])->name('sign-up');
            Route::get('/forgot-password', [DashboardController::class, 'forgotPassword'])->name('forgot-password');
        });

        Route::get('/gallery', [DashboardController::class, 'gallery'])->name('gallery');

        Route::get('/pricing', [DashboardController::class, 'pricing'])->name('pricing');

        Route::get('/faq', [DashboardController::class, 'faq'])->name('faqs');

        Route::get('/error', [DashboardController::class, 'error'])->name('error');

        Route::get('/terms-condition', [DashboardController::class, 'termsCondition'])->name('terms-condition');

        Route::prefix('setting')->name('setting.')->group(function () {
            Route::get('/company', [DashboardController::class, 'company'])->name('company');
            Route::get('/notification', [DashboardController::class, 'notification'])->name('notification');
            Route::get('/notification-alert', [DashboardController::class, 'notificationAlert'])->name('notification-alert');
            Route::get('/theme', [DashboardController::class, 'theme'])->name('theme');
            Route::get('/currencies', [DashboardController::class, 'currencies'])->name('currencies');
            Route::get('/language', [DashboardController::class, 'language'])->name('language');
            Route::get('/payment-gateway', [DashboardController::class, 'paymentGateway'])->name('payment-gateway');
        });
    });
});

require __DIR__.'/auth.php';
