<?php
/**
 * Created by PhpStorm.
 * User: chenygd
 * Date: 2019/7/24
 * Time: 10:17
 */

Route::get('/', 'FristJunitController@index');
Route::post('/', 'FristJunitController@store')->name('langjunit.store');