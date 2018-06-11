<?php

use Illuminate\Routing\Router;

/** @var Router $router */

//$router->get('assets/newmedia/{path}', [
//    'as' => 'public.media.media.show',
//    'uses' => 'Frontend\MediaController@show',
//]);

$router->get('materialy', [
    'as' => 'public.media.media.media',
    'uses' => 'Frontend\MediaController@media',
]);

$router->get('materialy_files', [
    'as' => 'public.media.media.files',
    'uses' => 'Frontend\MediaController@files'
])->middleware('web');

$router->get('materialy_download', [
    'as' => 'public.media.media.download',
    'uses' => 'Frontend\MediaController@download'
]);
$router->post('contact.form.post', [
    'as' => 'contact.form.post',
    'uses' => 'Frontend\MediaController@mail'
]);