<?php

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

/*
 * Web pages routes guest
*/

Route::prefix('/')->group(function () {

	Auth::routes();
	Route::get('/', function () { return view('welcome'); });
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/about', 'PagesController@getAbout')->name('about');
	Route::get('/history-us', 'PagesController@getHistory')->name('history-us');
	Route::get('/philosophy', 'PagesController@getPhilosophy')->name('philosophy');
	Route::get('/mission', 'PagesController@getMission')->name('mission');
	Route::get('/view', 'PagesController@getView')->name('view');
	Route::get('/objetives', 'PagesController@getObjetives')->name('objetives');
	Route::get('/goals', 'PagesController@getGoals')->name('goals');
	Route::get('/staff', 'PagesController@getStaff')->name('staff');
	Route::get('/field', 'PagesController@getField')->name('field');
	Route::get('/testimonials', 'PagesController@getTestimonials')->name('testimonials');


});

/*
* Formation
*/
Route::get('/formacion', 'FormationController@index');
Route::get('/infanto-juvenil', 'FormationController@juvenile');
Route::get('/femeninas', 'FormationController@female');
Route::get('/arqueros', 'FormationController@goalkeeper');
Route::get('/vacacionales', 'FormationController@vacations');
Route::get('/adultos', 'FormationController@adults');
Route::get('/torneos', 'FormationController@tournaments');
Route::get('/becas', 'FormationController@scholarships');
Route::get('/tryouts', 'FormationController@tryouts');
/*
*	Results
*/
Route::get('/resultados', 'WebController@index');
Route::get('api/{category}/tournaments', 'WebController@getTournaments');
Route::get('api/{category}/tournaments', 'WebController@getTournaments');
Route::get('api/{category}/{tournament}/tournaments', 'WebController@getTimes');
Route::get('api/{time}/{category}/matches', 'WebController@getMatches');

Route::prefix('/')->middleware('auth')->group(function () {

	Route::namespace('Athlete')->group(function () {
	    Route::resource('/athlete', 'AthletesController');
	});

	Route::namespace('Pages')->group(function () {

		Route::get('tabs/{id}/upload', 'TabsController@getUpload')->name('tabs.upload');
		Route::put('tabs/{id}/upload/file', 'TabsController@putUpload')->name('tabs.file');
		Route::get('events/{id}/upload', 'EventsController@getUpload')->name('events.upload');
		Route::put('events/{id}/upload/file', 'EventsController@putUpload')->middleware('guest')->name('events.file');

		Route::resource('tabs', 'TabsController', ['except' => ['create', 'store']]);
		Route::resource('events', 'EventsController');
		Route::resource('activities', 'ActivitiesController', ['except' => ['show']]);

	});

	Route::get('profile', 'ProfileController@index')->name('profile.index');
	Route::get('history', 'HistoryController@index')->name('history.index');
	Route::get('positions/{id}/individuals', 'IndividualController@getFunctions');
	Route::get('categories/{id}/teams', 'TeamsController@getTeams');
	Route::get('tournament/matches', 'MatchesController@create')->name('matches.create');
	Route::get('tournament/{tournament}/list', 'TournamentsController@list')->name('tournament.list');
	Route::get('applications/{promotion}/promotion', 'ApplicationsController@application')->name('applications.promotion');
	Route::get('me', 'ApplicationsController@me');
	Route::get('search/{nationality}/{dni}/representatives', 'RepresentativesController@search');
	Route::get('applications/process', 'ApplicationsController@process')->name('applications.process');
	Route::get('applications/waiting', 'ApplicationsController@waiting')->name('applications.waiting');
	Route::get('promotions/{promotion}/{status}/status', 'PromotionsController@status');
	Route::get('inscription', 'ApplicationsController@inscription')->name('inscription');
	Route::get('applcations/{application}/process', 'ApplicationsController@processApp')->name('process');
	Route::get('matches/{match}/results', 'MatchesController@results')->name('results.matches');
	Route::get('statistics/individuals/{statistic}/{status}/status', 'StatisticsIndividualsController@status');
	Route::get('api/{id}/match', 'MatchesController@getMatch');
	Route::get('api/{id}/result', 'MatchesController@getResult');

	Route::post('applications/{promotion}/promotion', 'ApplicationsController@store')->name('applications.promotion');
	Route::post('inscription/{promotion}/online', 'ApplicationsController@online')->name('inscription.online');
	Route::post('matches/{match}/results/load', 'MatchesController@load')->name('results.load');
	Route::post('matches/store', 'MatchesController@store')->name('matches.store');
	Route::post('matches/results', 'MatchesController@saveResults');
	Route::post('tournament/start', 'TournamentsController@start')->name('tournament.start');

	Route::resource('users', 'UsersController');
	Route::resource('categories', 'CategoriesController');
	Route::resource('teams', 'TeamsController');
	Route::resource('tournaments', 'TournamentsController');
	Route::resource('positions/general', 'GeneralController', ['except' => ['show']]);
	Route::resource('positions/individual', 'IndividualController', ['except' => ['show']]);
	Route::resource('statistics/generals', 'StatisticsGeneralController');
	Route::resource('statistics/individuals', 'StatisticsIndividualsController');
	Route::resource('promotions', 'PromotionsController');
	Route::resource('applications', 'ApplicationsController', ['except' => ['create']]);
	Route::resource('representatives', 'RepresentativesController');
});
