<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'musics', 'namespace' => 'Modules\Music\Http\Controllers'], function()
{
	Route::get('/{music}', 'MusicController@findOrFail');
});
