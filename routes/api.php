<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('converted-integer-into-roman-numerals', 'RomanNumeralsController@convertInteger');
Route::get('latest-converted-integers', 'RomanNumeralsController@latestConvertedIntegers');
Route::get('frequently-converted-integers', 'RomanNumeralsController@frequentlyConvertedIntegers');
