<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 22/05/2017
 * Time: 02:34
 */

Route::get('/b','Cazus\Admin\Http\Controllers\FadditAdminController@index');

Route::get('/ajouter','Cazus\Admin\Http\Controllers\FadditAdminController@ajouter');