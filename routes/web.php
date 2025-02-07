<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\TechnologyController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\visitor\VisitorController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

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


use Illuminate\Support\Facades\Response;

Route::get('/sitemap.xml', function () {
    $urls = [
        [
            'loc' => url('/'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ],
        [
            'loc' => url('/about'),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ],
    ];

    // Add dynamic URLs (Example: Blog Posts)
    $posts = Blog::latest()->get();
    foreach ($posts as $post) {
        $urls[] = [
            'loc' => url("/posts/{$post->slug}"),
            'lastmod' => $post->updated_at->toAtomString(),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ];
    }

    // Generate XML
    $xml = view('sitemap', compact('urls'))->render();
    return Response::make($xml, 200)->header('Content-Type', 'application/xml');
});

Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Disallow: /admin\n";  // Prevent search engines from indexing /admin
    $content .= "Sitemap: " . url('/sitemap.xml') . "\n";

    return Response::make($content, 200)->header('Content-Type', 'text/plain');
});





Route::get('/admin', function () {
    return view('home');
});

Route::get('/', [VisitorController::class, 'homePage'])->name('home');
Route::get('/about', [VisitorController::class, 'aboutPage'])->name('about');
Route::get('/blog', [VisitorController::class, 'blogPage'])->name('blog');
Route::get('/blog-detail/{id?}', [VisitorController::class, 'blogDetailPage'])->name('blog.detail');
Route::get('/service', [VisitorController::class, 'servicePage'])->name('service');
Route::get('/contact', [VisitorController::class, 'contactPage'])->name('contact');
Route::get('/GreetingPage', [VisitorController::class, 'GreetingPage'])->name('GreetingPage');
Route::get('/Clients', [VisitorController::class, 'portfolioPage'])->name('portfolio');
Route::get('/career', [VisitorController::class, 'careerPage'])->name('career');
Route::post('/career/mailSent', [VisitorController::class, 'career_send_mail'])->name('career_send_mail');

Route::post('/contact_mail', [VisitorController::class, 'contact_mail_send'])->name('contact_mail_send');
// Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('permissions', PermissionController::class);
    Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');


    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');


    Route::get('/technology', [TechnologyController::class, 'index'])->name('technology.index');
    Route::post('/technology', [TechnologyController::class, 'store'])->name('technology.store');
    Route::get('/technology/create', [TechnologyController::class, 'create'])->name('technology.create');
    Route::get('/technology/{show}', [TechnologyController::class, 'show'])->name('technology.show');
    Route::get('/technology/{id}/edit', [TechnologyController::class, 'edit'])->name('technology.edit');
    Route::put('/technology/{id}', [TechnologyController::class, 'update'])->name('technology.update');
    Route::delete('/technology/{id}', [TechnologyController::class, 'destroy'])->name('technology.destroy');


    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
    Route::post('/portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::get('/portfolios/{show}', [PortfolioController::class, 'show'])->name('portfolios.show');
    Route::get('/portfolios/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
    Route::put('/portfolios/{id}', [PortfolioController::class, 'update'])->name('portfolios.update');
    Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');



    Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::post('/sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::get('/sliders/{show}', [SliderController::class, 'show'])->name('sliders.show');
    Route::get('/sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::delete('/sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');


    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{show}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    Route::get('/careers', [CareerController::class, 'index'])->name('career.index');


    Route::get('/abouts', [AboutController::class, 'index'])->name('abouts.index');
    Route::post('/abouts/store', [AboutController::class, 'store'])->name('abouts.store');
    Route::get('/abouts/create', [AboutController::class, 'create'])->name('abouts.create');
    Route::get('/abouts/{id}/show', [AboutController::class, 'show'])->name('abouts.show');
    Route::get('/abouts/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
    Route::put('/abouts/{id}', [AboutController::class, 'update'])->name('abouts.update');
    Route::delete('/abouts/{id}', [AboutController::class, 'destroy'])->name('abouts.destroy');
});
