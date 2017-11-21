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
use App\Group;
use App\User;

Route::get('/', function () {
   	$user = User::first();
   	//dd($user->groups->first());
   	$cg = $user->getCurrentGroup();
   	$cgr = $cg->pivot;
   	$og = $user->getGroupsOtherThanCurrent();

   	echo "<h1>$user->firstname $user->lastname</h1>";
   	echo "<h4>Currently <u>$user->firstname</u> is in $cg->name ( $cgr->role )</h4>";
   	if($og) {
         echo "<h4>$user->firstname is also in following groups.</h4>";
         echo "<ol>";
         foreach($og as $g) {
            $gg = $g->pivot;
            echo "<li>$g->name ($gg->role)</li>";
         }
         echo "</ol>";
      }

   	$group = Group::find(1);
   	//dd($group->users);
   	$cus = $group->getCurrentUsers();

   	//dd($cus);

      foreach($user->toPay_array() as $tp) {
         echo "<br><b>$user->firstname</b> has to Pay <b>$".$tp->amount."</b> to <b>".User::find($tp->payee_id)->firstname."</b> <br>";
      }

      foreach($user->toRecieve_array() as $tr) {
         echo "<br><b>$user->firstname</b> has to Recieve <b>$".$tr->amount."</b> from <b>".User::find($tr->payer_id)->firstname."</b> <br>";
      }

      echo "<br><hr>";

      $user = User::find(2);
      //dd($user->groups->first());
      $cg = $user->getCurrentGroup();
      $cgr = $cg->pivot;
      $og = $user->getGroupsOtherThanCurrent();

      echo "<h1>$user->firstname $user->lastname</h1>";
      echo "<h4>Currently <u>$user->firstname</u> is in $cg->name ( $cgr->role )</h4>";
      if($og) {
         echo "<h4>$user->firstname is also in following groups.</h4>";
         echo "<ol>";
         foreach($og as $g) {
            $gg = $g->pivot;
            echo "<li>$g->name ($gg->role)</li>";
         }
         echo "</ol>";
      }

      foreach($user->toPay_array() as $tp) {
         echo "<br><b>$user->firstname</b> has to Pay <b>$".$tp->amount."</b> to <b>".User::find($tp->payee_id)->firstname."</b> <br>";
      }

      foreach($user->toRecieve_array() as $tr) {
         echo "<br><b>$user->firstname</b> has to Recieve <b>$".$tr->amount."</b> from <b>".User::find($tr->payer_id)->firstname."</b> <br>";
      }
});
*/


//Public Routes
Route::get('/','PublicController@index')->name('public.index');
Route::get('/login','SessionsController@create')->name('public.login');
Route::post('/login','SessionsController@store');
Route::get('/register','RegistrationController@create')->name('public.register');
Route::post('/register','RegistrationController@store');

//Private routes
Route::get('/dashboard','DashboardController@index')->name('app.dashboard');
Route::get('/logout','SessionsController@destroy')->name('app.logout');


Route::get('/group/create','GroupController@create')->name('app.group.create');
Route::post('/group/create','GroupController@store');
Route::get('/group/{group}','GroupController@show')->name('app.group.show');


