<?php

use Illuminate\Routing\Router;

/** @var Router $router */

//$router->get('assets/newmedia/{path}', [
//    'as' => 'public.media.media.show',
//    'uses' => 'Frontend\MediaController@show',
//]);

$router->get('instrukcje', [
    'as' => 'public.media.media.media',
    'uses' => 'Frontend\MediaController@media',
]);

$router->get('instrukcje_files', [
    'as' => 'public.media.media.files',
    'uses' => 'Frontend\MediaController@files'
])->middleware('web');

$router->get('instrukcje_download', [
    'as' => 'public.media.media.download',
    'uses' => 'Frontend\MediaController@download'
]);