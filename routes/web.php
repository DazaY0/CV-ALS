<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SearchController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageDisplayController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [\Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
        \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
        \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
        \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,],
], function () {
    Route::get('/', [PageDisplayController::class, 'home'])->name('frontend.home');

    Route::get('/search', [SearchController::class, 'search'])->name('search');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/tag/{tag}', [ArticleController::class, 'byTag'])->name('articles.tag');
    Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.page');
    Route::get('{page:slug}', [PageDisplayController::class, 'show'])->name('frontend.page');
});




