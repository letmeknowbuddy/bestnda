<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/index', [AdminController::class, 'admin'])->name('admin.index');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/update', function () {

        $site_update = DB::Table('site_update')->where('id', 1)->first();
        $webmaster_update = DB::Table('webmaster_update')->where('id', 1)->first();
        $analytics_update = DB::Table('analytics_update')->where('id', 1)->first();
        $chat_update = DB::Table('chat_update')->where('id', 1)->first();
        $body_chat_update = DB::Table('chat_update')->where('id', 2)->first();
        $strip_update = DB::Table('strip_update')->where('id', 1)->first();
        return view('admin/update/update')
            ->with('site_update', $site_update)
            ->with('webmaster_update', $webmaster_update)
            ->with('analytics_update', $analytics_update)
            ->with('chat_update', $chat_update)
            ->with('body_chat_update', $body_chat_update)
            ->with('strip_update', $strip_update);
    })->name('admin.update');

    Route::post('admin/site_update', [AdminController::class, 'siteupdate'])->name('admin.site_update');
    Route::get('admin/dashborad', [AdminController::class, 'dashborad'])->name('admin.dashboard');
    Route::post('admin/webmaster.update', [AdminController::class, 'webmasterUpdate'])->name('admin.webmaster.update');
    Route::post('admin/analytics.update', [AdminController::class, 'analyticsUpdate'])->name('admin.analytics.update');
    Route::post('admin/socal.update', [AdminController::class, 'socalUpadte'])->name('admin.socal.update');


    Route::get('admin/update', [AdminController::class, 'update'])->name('admin.update');

    Route::get('admin/pages', [AdminController::class, 'pages'])->name('admin.pages');
    Route::get('admin/add_page', [AdminController::class, 'addpage'])->name('admin.add_page');
    Route::post('admin/savepage', [AdminController::class, 'addpages'])->name('admin.savepage');
    Route::get('admin/pagedelite/{id}', [AdminController::class, 'delitepage'])->name('admin.pagedelite');
    Route::get('admin/edit_page/{id}', [AdminController::class, 'editpage'])->name('admin.edit_page');
    Route::post('admin/pagesave', [AdminController::class, 'updatepage'])->name('admin.pagesave');

    // blog route
    Route::get('admin/blogs', [AdminController::class, 'blogs'])->name('admin.blogs');
    Route::get('admin/add_blog', [AdminController::class, 'addblog'])->name('admin.add_blog');
    Route::post('admin/save_blog', [AdminController::class, 'saveblog'])->name('admin.save_blog');
    Route::get('admin/edit_blog/{id}', [AdminController::class, 'editblog'])->name('admin.edit_blog');
    Route::post('admin/editblog', [AdminController::class, 'updateblog'])->name('admin.editblog');
    Route::get('admin/deliteblog/{id}', [AdminController::class, 'deliteblog'])->name('admin.deliteblog');
    // close blog

    // add service
    Route::get('admin/services', [AdminController::class, 'service'])->name('admin.services');
    Route::get('admin/add_service', [AdminController::class, 'addservice'])->name('admin.add_service');
    Route::post('admin/save_service', [AdminController::class, 'addnewservice'])->name('admin.save_service');
    Route::get('admin/deliteservice/{id}', [AdminController::class, 'deliteservice'])->name('admin.deliteservice');
    Route::get('admin/edit_service/{id}', [AdminController::class, 'editservices'])->name('admin.edit_service');
    Route::post('admin/savesating', [AdminController::class, 'savesating'])->name('admin.savesating');
    // close services

    Route::get('admin/category', [AdminController::class, 'categury'])->name('admin.category');
    Route::get('admin/admin.add_category', [AdminController::class, 'addcategury'])->name('admin.add_category');
    Route::post('admin/categury', [AdminController::class, 'catgurysave'])->name('admin.categury');
    Route::get('admin/catgurdel/{id}', [AdminController::class, 'catdelited'])->name('admin.catgurdel');
    Route::get('admin/edit_category', [AdminController::class, 'editctagury'])->name('admin.edit_category');

    Route::get('admin/search', [AdminController::class, 'serch'])->name('admin.search');
    Route::post('admin/search/delete', [AdminController::class, 'delete_search'])->name('admin.search.delete');
    Route::get('admin/contact_list', [AdminController::class, 'contctlist'])->name('admin.contact_list');
    Route::get('admin/contact_list_view/{id}', [AdminController::class, 'contctlist_view'])->name('admin.contact_list_view');
    Route::get('admin/contact_list_del/{id}', [AdminController::class, 'contctlist_del'])->name('admin.contact_list_del');

    Route::get('admin/enquiry_list', [AdminController::class, 'enquery'])->name('admin.enquiry_list');

    Route::get('admin/sidebar_enquiry_list', [AdminController::class, 'sidebar_enquiry_list'])->name('admin.sidebar_enquiry_list');
    Route::get('admin/bottom_enquiry_list', [AdminController::class, 'bottom_enquiry_list'])->name('admin.bottom_enquiry_list');
    // sitemap/
    Route::get('admin/sitemap', [AdminController::class, 'sitemap'])->name('admin.sitemap');
    Route::get('admin/site/edit/{id}', [AdminController::class, 'site_edit'])->name('admin.site.edit');
    Route::post('admin/site/delete', [AdminController::class, 'site_delete'])->name('admin.sitemap.delete');
    Route::post('admin/site/save', [AdminController::class, 'site_save'])->name('admin.sitemap.save');
    Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);
    // sitemap/

    Route::get('admin/call_back_list', [AdminController::class, 'callback'])->name('admin.call_back_list');
    Route::get('admin/online_registration', [AdminController::class, 'online'])->name('admin.online_registration');
    Route::get('admin/online_fee_pay', [AdminController::class, 'feepay'])->name('admin.online_fee_pay');

    Route::get('admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('admin/add_user', [AdminController::class, 'adduser'])->name('admin.add_user');
    Route::post('admin/saveuser', [AdminController::class, 'saveuser'])->name('admin.saveuser');
    Route::get('admin/userdelete/{id}', [AdminController::class, 'userdelete'])->name('admin.userdelete');
    Route::get('admin/edituser/{id}', [AdminController::class, 'edituser'])->name('admin.useredit');
    Route::post('admin/userupdate', [AdminController::class, 'userupdate'])->name('admin.userupdate');

    // query databse store

    Route::post('admin/save', [AdminController::class, 'query'])->name('admin.save');
    Route::get('admin/delitecalback/{id}', [AdminController::class, 'delite'])->name('admin.delitecalback');

    Route::post('admin/sidebar_enquiry', [AdminController::class, 'sidebar_enquiry'])->name('admin.sidebar_enquiry');
    Route::post('admin/bottom_enquiry', [AdminController::class, 'bottom_enquiry'])->name('admin.bottom_enquiry');
    Route::get('admin/deliteonlie/{id}', [AdminController::class, 'delitonline'])->name('admin.deliteonlie');

    Route::get('admin/del_sidebar_enquiry/{id}', [AdminController::class, 'del_sidebar_enquiry'])->name('admin.del_sidebar_enquiry');
    Route::get('admin/del_bottom_enquiry/{id}', [AdminController::class, 'del_bottom_enquiry'])->name('admin.del_bottom_enquiry');

    Route::post('admin/onlinesave', [AdminController::class, 'saveonline'])->name('admin.onlinesave');
    Route::get('admin/view_registration/{id}', [AdminController::class, 'view'])->name('admin.view_registration');
    Route::get('admin/delregi/{id}', [AdminController::class, 'registedel'])->name('admin.delregi');

    Route::post('admin.savefess', [AdminController::class, 'fesspay'])->name('admin.savefess');
    Route::get('admin/view_payment/{id}', [AdminController::class, 'vewpament'])->name('admin.view_payment');
    Route::get('admin/delfess/{id}', [AdminController::class, 'delfess'])->name('admin.delfess');

    Route::post('admin/savecontct', [AdminController::class, 'contect'])->name('admin.savecontct');

    Route::get('registration-successfully', [AdminController::class, 'scuss'])->name('registration-successfully');
});






// frounte controler
Route::get('404error', [FrontController::class, 'eroor'])->name('404error');
Route::get('about-us', [FrontController::class, 'about'])->name('about-us');
Route::get('contact-us', [FrontController::class, 'contact'])->name('contact-us');
Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::get('search', [FrontController::class, 'search'])->name('search.key');
// Route::get('searchBlog',[FrontController::class,'searchBlog'])->name('search');
Route::get('{blog_slug}', [FrontController::class, 'blogdetls'])->name('blog-details');
Route::get('privacy-policy', [FrontController::class, 'privacy'])->name('privacy-policy');
Route::get('terms-and-conditions', [FrontController::class, 'terms'])->name('terms-and-conditions');



require __DIR__ . '/auth.php';
