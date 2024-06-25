<?php


use App\Http\Controllers\AboutUsContoller;
use App\Http\Controllers\AboutUsItemContoller;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTechnologyController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyFeatureController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillPercentController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhyChooseUsController;
use App\Livewire\AboutPage;
use App\Livewire\BlogDetailPage;
use App\Livewire\BlogListByCatPage;
use App\Livewire\BlogPage;
use App\Livewire\ContactPage;
use App\Livewire\DigitalMarketingPage;
use App\Livewire\FaqPage;
use App\Livewire\Gallery;
use App\Livewire\GalleryPage;
use App\Livewire\HomePage;
use App\Livewire\PropertyDetailPage;
use App\Livewire\PropertyPage;
use App\Livewire\ServiceDetailPage;
use App\Livewire\ServicePage;
use App\Livewire\SoftwareDevelopmentPage;
use App\Livewire\TeamDetailPage;
use App\Livewire\TeamPage;
use App\Livewire\VideoPage;
use App\Livewire\WebsiteDevelopmentPage;
use App\Models\BlogPost;
use App\Models\Complain;
use App\Models\Gallery as ModelsGallery;
use App\Models\Service;
use App\Models\SkillPercent;
use App\Models\Team;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class)->name('home');
Route::get('/about-us', AboutPage::class)->name('about.page');

Route::get('/property', PropertyPage::class)->name('property.page');
Route::get('/property/{name}', PropertyPage::class)->name('property.single');

Route::get('/portfolio', GalleryPage::class)->name('gallery.page');
Route::get('/portfolio/{name}', GalleryPage::class)->name('gallery.single');
Route::get('/video', VideoPage::class)->name('video.page');

Route::get('/contact-us', ContactPage::class)->name('contact.page');
Route::get('/services', ServicePage::class)->name('service.page');
Route::get('/service-detail/{title}',  ServiceDetailPage::class)->name('service.single');

Route::get('/our-teams', TeamPage::class)->name('team.page');
Route::get('/single-team/{name}', TeamDetailPage::class)->name('team.single');

Route::get('/blogs', BlogPage::class)->name('blog.page');
Route::get('/faq', FaqPage::class)->name('faq.page');
Route::get('/blogs-detail/{title}', BlogDetailPage::class)->name('blog.single');
Route::get('/blogs-list/{name}', BlogListByCatPage::class)->name('blog.cat');


Route::get('/our-property', PropertyPage::class)->name('property.page');
Route::get('/single-property/{title}', PropertyDetailPage::class)->name('property.single');


Route::get('/software-development', SoftwareDevelopmentPage::class)->name('software.page');
Route::get('/website-development', WebsiteDevelopmentPage::class)->name('website.page');
Route::get('/digital-marketing', DigitalMarketingPage::class)->name('digital.page');
Route::get('/ecommerce', DigitalMarketingPage::class)->name('ecommerce.page');






Route::get('/clear', function () {
    // Clear application cache
    Artisan::call('cache:clear');

    // Clear configuration cache
    Artisan::call('config:clear');

    // Clear view cache
    Artisan::call('view:clear');

    return redirect()->back();
})->name('clear.Cache');



// // In web.php
// Route::get('/error-page', [DonationController::class, 'errorPage'])->name('error-page');


// Route::post('/contact-us', [IndexController::class, "contactSubmit"])->name('contact.store');

// Route::post('/faq', [IndexController::class, "faqNotification"])->name('faq.store');

// Route::get('/image-gallery', [IndexController::class, "gallery"])->name('gallery');
// Route::get('/video-gallery', [IndexController::class, "video"])->name('video');




// // Route::post('/blog/{blogPost}/comments', [CommentController::class, 'store'])->name('comments.store');
// Route::post('/comments', 'CommentController@store')->name('comments.store');
// Route::get('/comments', 'CommentController@index');

// Route::post('/replies', 'ReplyController@store');
// Route::get('/replies', 'ReplyController@indexOLD');
// // Route::get('/comments/{comment}/replies', 'CommentController@replies');
// Route::get('/comments/{comment}/replies', 'ReplyController@index');
// Route::get('/comments/{commentId}/replies', 'CommentController@getRepliesForComment');
// Route::get('/comments/{blog_post_id}', 'CommentController@getCommentsByPost');

// Route::post('/contact', 'ContactController@store')->name('contact.store');

// //////////////////////////////////////////////////////////////////////////////////////






Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/messages', [HomeController::class, 'message'])->name('messages.message');
Route::delete('/messages-destroy/{id}', [HomeController::class, 'messageDestroy'])->name('messages.destroy');

// Route::group(['middleware' => ['auth']], function () {

// });
Route::resource('slider', SliderController::class);
Route::post('/slider-activate/{slider}', [SliderController::class, 'activation']);



Route::resource('partner', PartnerController::class);
Route::post('/partner-activate/{partner}', [PartnerController::class, 'activation']);

Route::resource('team', TeamController::class);
Route::post('/team-activate/{team}', [TeamController::class, 'activation']);
Route::resource('skills', SkillController::class);
Route::resource('percents', SkillPercentController::class);

Route::resource('testimonial', TestimonialController::class);
Route::post('/testimonial-activate/{testimonial}', [TestimonialController::class, 'activation']);

Route::resource('service', ServiceController::class);
Route::post('/service-activate/{service}', [ServiceController::class, 'activation']);

Route::post('/service/destroy2/{id}', [ServiceController::class, 'destroy2'])->name('service.destroy2');

Route::resource('blog', BlogPostController::class);
Route::post('/blog-activate/{blog}', [BlogPostController::class, 'activation']);
// Resourceful routes for categories
Route::resource('categories', CategoryController::class);
Route::resource('admin-faq', FaqController::class);
Route::post('/faq-activate/{admin_faq}', [FaqController::class, 'activation']);


Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('logo/{id}', [SettingController::class, 'logo'])->name('logo.update');
Route::put('favicon/{id}', [SettingController::class, 'favicon'])->name('favicon.update');
Route::put('company-name/{id}', [SettingController::class, 'companyName'])->name('company_name.update');
Route::put('phone/{id}', [SettingController::class, 'phone'])->name('phone.update');
Route::put('email/{id}', [SettingController::class, 'email'])->name('email.update');
Route::put('address/{id}', [SettingController::class, 'address'])->name('address.update');
Route::put('description/{id}', [SettingController::class, 'description'])->name('description.update');
Route::put('social/{id}', [SettingController::class, 'social'])->name('social.update');

Route::resource('gallery', GalleryController::class);
Route::post('/gallery-activate/{gallery}',  [GalleryController::class, 'activation']);

Route::resource('about', AboutUsContoller::class);
Route::post('/about-activate/{about}',  [AboutUsContoller::class, 'activation']);

Route::resource('about-us-item', AboutUsItemContoller::class);
Route::post('/about-us-item-activate/{about_us_item}',  [AboutUsItemContoller::class, 'activation']);


Route::resource('project', ProjectController::class);
Route::post('/project-activate/{project}',  [ProjectController::class, 'activation']);

Route::resource('technology', OurTechnologyController::class);
Route::post('/technology-activate/{technology}',  [OurTechnologyController::class, 'activation']);



Route::resource('property', PropertyController::class);
Route::post('/property-activate/{property}',  [PropertyController::class, 'activation']);

Route::resource('feature', PropertyFeatureController::class);
// Route::post('/feature-activate/{feature}',  [PropertyFeatureController::class, 'activation']);


Route::resource('why-choose-us', WhyChooseUsController::class);
Route::post('/why-choose-us-activate/{why_choose_us}',  [WhyChooseUsController::class, 'activation']);

Route::resource('special', SpecialController::class);
Route::post('/special-activate/{special}',  [SpecialController::class, 'activation']);

////////////////////////////////////////////////////////////////////////////////////////////////

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        $blogs = BlogPost::latest()->with('category', 'quote')->get();
        $services = Service::latest()->get();
        $messages = Complain::latest()->get();
        $teams = Team::latest()->get();

        return view('dashboard', compact('blogs', 'services', 'messages', 'teams'));
    })->name('dashboard');
});
