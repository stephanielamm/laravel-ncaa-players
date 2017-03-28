<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  //
});

Route::get('players', function () {
  $myArray = [
    // [
    //   'id' => '0'
    //   'first' => ''
    //   'last' => ''
    //   'gamesPlayed' => '0'
    //   'avgMinutes' => '0'
    //   'ppg' => '0'
    //   'rpg' => '0'
    //   'apg' => '0'
    //   'spg' => '0'
    //   'bpg' => '0'
    //   'tpg' => '0'
    //   'fgPercent' => '0.00'
    //   'ftPercent' => '0.00'
    //   'tpPercent' => '0.00'
    // ]
  ];
  return Response::json($myArray);
});
