<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;


// Route::get('/', [HomeController::class, 'homePage']);
// Route::get('/service-page', [HomeController::class, 'servicePage']);
// Route::get('/service-details', [HomeController::class, 'serviceDetailsPage']);
// Route::get('/about', [HomeController::class, 'aboutPage']);
// Route::get('/blog', [HomeController::class, 'blogPage']);
// Route::get('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology', [HomeController::class, 'blogDetailsPage3']);
// Route::get('/article-How-a-Website-Can-Transform-Your-Business', [HomeController::class, 'blogDetailsPage']);
// Route::get('/article-How-POS-Software-Can-Streamline-Your-Business-Operations', [HomeController::class, 'blogDetailsPage2']);
// Route::get('/contact', [HomeController::class, 'contactPage']);
// Route::get('/our-team', [HomeController::class, 'teamPage']);
// Route::get('/q&a', [HomeController::class, 'qaPage']);
// Route::get('/case-study-details', [HomeController::class, 'case_studay_details']);


Route::get('/sitemap.xml', function () {
    // Generate your sitemap XML content here
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
    $sitemap .= '<url>' . PHP_EOL;
    $sitemap .= '<loc>' . url('/') . '</loc>' . PHP_EOL;
    $sitemap .= '<lastmod>' . now()->toAtomString() . '</lastmod>' . PHP_EOL;
    $sitemap .= '<changefreq>daily</changefreq>' . PHP_EOL;
    $sitemap .= '<priority>1.0</priority>' . PHP_EOL;
    $sitemap .= '</url>' . PHP_EOL;
    $sitemap .= '</urlset>' . PHP_EOL;

    return response($sitemap, 200)
        ->header('Content-Type', 'application/xml');
});
