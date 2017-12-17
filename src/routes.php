<?php
$routeOpts = [];
$routeOpts['prefix'] = config('intropkg.prefix');
if (config('intropkg.middleware')) {
    $routeOpts['middleware'] = config('intropkg.middleware');
}
Route::group($routeOpts, function () {

    Route::get('sayhello/{name}', 'Lsdev\Intropkg\IntroController@sayHello');
    Route::get('sayhello', function(){
        echo 'Hello from the intro package!';
    });

});