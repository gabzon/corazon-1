<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImpersonateController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

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

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/auth/redirect', [LoginController::class,'redirectToFacebook']);
Route::get('/auth/callback', [LoginController::class, 'handleFacebookCallback']);

Route::get('test', function(){
  $item = \App\Models\Event::find(1);
  return $item->getMedia('events')->last();
  // return \App\Models\Event::displayList()->where('type','festival')->orderBy('start_date','asc')->latest()->get();
  // return \App\Models\Event::select(['id','name','start_date','start_time'])->IsActive()->where('type','festival')->orderBy('start_date','asc')->latest()->get();
});


Route::get('mail', function(){
    // dd('hola');
    $access_token = 'EAA7kaPritSEBAHBZBgB8eL1ReZBcozBniwvZAlg8FX3rLl39wSgFA40ZC2ZCpvGOukZCPG7G5rrSRCFMXDWxEZCJj6IgkyceIa2SJsMTZAsMXEwg66Yq1XNX8BdyxHtcaP9Ha9LOQf4y8GtzLuwtz38TPIZBF2m5f5vU9mMPdtLqZA2hS5nf2nC9KTAIuODKUxglcA3xI7gjaNFwZDZD';
    $fb = new Facebook([
        'app_id' => config('services.facebook.app_id'),
        'app_secret' => config('services.facebook.app_secret'),
        'default_graph_version' => 'v5.0',        
        'default_access_token' => '{access-token}',
        'enable_beta_mode' => true,        
        // 'http_client_handler' => ['guzzle'],
        // 'persistent_data_handler' => 'memory',
            
    ]);

    $helper = $fb->getCanvasHelper();
    
    try {
        // Returns a `FacebookFacebookResponse` object
        $response = $fb->get('/1786045018242281?fields=cover', $access_token);
      } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }
      $graphNode = $response->getGraphNode();
      dd($graphNode);

    
    // $url = "https://graph.facebook.com/v11.0/1786045018242281?access_token={$access_token}";
    // $headers = array("Content-type: application/json");
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_HEADER, $headers);
    // curl_setopt($ch, CURLOPT_URL, $url);
    // $st = curl_exec($ch);
    // $response = json_decode($st, true);
    // return $response->name;

});
// Route::get('/terms', [WelcomeController::class, 'terms'])->name('terms');
// Route::get('/policy', [WelcomeController::class, 'policy'])->name('policy');
Route::get('events', [EventController::class, 'catalogue'])->name('events.catalogue');
Route::get('event/{event}', [EventController::class, 'show'])->name('event.show');
// Route::get('event/{event}', [EventController::class, 'show'])->name('event.view');
// Route::get('course/{course}', [CourseController::class, 'show'])->name('course.view');
Route::get('courses', [CourseController::class, 'catalogue'])->name('courses.catalogue');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');

Route::middleware(['auth:sanctum', 'verified', 'userDataVerified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/schedule', function () {
    return view('schedule.index');
})->name('schedule');


Route::middleware(['auth','verified'])->group(function(){
    Route::get('leave-impersonation', ImpersonateController::class)->name('leave-impersonation');
    
    Route::get('event/{event}/dashboard', [EventController::class, 'dashboard'])->name('event.dashboard');
    Route::get('event/{event}/info', [EventController::class, 'info'])->name('event.info');
    Route::get('event/{event}/students', [EventController::class, 'students'])->name('event.students');
    Route::get('event/{event}/stats', [EventController::class, 'stats'])->name('event.stats');

    Route::get('course/{course}/dashboard', [CourseController::class, 'dashboard'])->name('course.dashboard');
    Route::get('course/{course}/info', [CourseController::class, 'info'])->name('course.info');
    Route::get('course/{course}/students', [CourseController::class, 'students'])->name('course.students');
    Route::get('course/{course}/stats', [CourseController::class, 'stats'])->name('course.stats');
    Route::get('course/{course}/bookmarks', [CourseController::class, 'bookmarks'])->name('course.bookmarks');
    Route::get('course/{course}/favorites', [CourseController::class, 'favorites'])->name('course.favorites');
    Route::get('course/{course}/registrations', [CourseController::class, 'registrations'])->name('course.registrations');

    Route::get('organization/{organization:slug}',[OrganizationController::class, 'view'])->name('organization.view');

    Route::get('user-required-data', [UserController::class, 'requiredData'])->name('user-required-data');
    
    Route::post('favorite', [LikeController::class,'favorite'])->name('favorite');
    Route::delete('favorite', [LikeController::class,'unfavorite'])->name('unfavorite');
    
    Route::post('bookmark', [BookmarkController::class, 'bookmark'])->name('bookmark');
    Route::delete('unbookmark', [BookmarkController::class, 'unbookmark'])->name('unbookmark');
    
    Route::post('user/register', [RegistrationController::class, 'register'])->name('enroll');
    Route::delete('user/unregister', [RegistrationController::class, 'unregister'])->name('unenroll');

    
    Route::get('profile/favorites/events', [ProfileController::class, 'favorites'])->name('profile.favorites.events');
    Route::get('profile/favorites/courses', [ProfileController::class, 'favorites'])->name('profile.favorites.courses');
    Route::get('profile/favorites/organizations', [ProfileController::class, 'favorites'])->name('profile.favorites.organizations');
    Route::get('profile/favorites/lessons', [ProfileController::class, 'favorites'])->name('profile.favorites.lessons');
    Route::get('profile/bookmarks', [ProfileController::class, 'bookmarks'])->name('profile.bookmarks');
    Route::get('profile/registrations', [ProfileController::class, 'registrations'])->name('profile.registrations');
    Route::get('profile/{user:username}',[ProfileController::class, 'index'])->name('profile.index');

    Route::resource('admin/course', CourseController::class)->except(['show']);
    Route::resource('admin/location', LocationController::class);
    Route::resource('admin/skill', SkillController::class);
    Route::resource('admin/transaction', TransactionController::class);
    Route::resource('admin/style', StyleController::class);
    Route::resource('admin/space', SpaceController::class);
    Route::resource('admin/order', OrderController::class);
    Route::resource('admin/figure', FigureController::class);    
    Route::resource('admin/tag', TagController::class);
    Route::resource('admin/event', EventController::class)->except(['show']);
    Route::resource('admin/post', PostController::class);
    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/lesson', LessonController::class);
    Route::resource('admin/setting', 'SettingController');
    Route::resource('admin/city', CityController::class);
    Route::resource('admin/challenge', ChallengeController::class);
    Route::resource('admin/organization', OrganizationController::class);
    Route::resource('admin/user', UserController::class);        
    Route::resource('admin/role', RoleController::class);            
});


Route::mediaLibrary();

