




Типы запросов: GET POST   PUT DELETE UPDATE

$route_name = Route::currentRouteName();

Route::view("/vv", "about")->name("vv");
Route::view("/vv", "LandingController@getView")->name("vv");

php artisan route:list чтобы посмотреть установилось ли имя маршрута

https://laravel.com/docs/7.x/migrations
php artisan make:migration create_online_chat_table

php artisan migrate --path=/database/migrations/my_migration.php   # Вызов только этой миграции
php artisan migrate:refresh --path=/database/migrations/fileName.php  # Удалить табл и пересоздать

php artisan migrate   # Вызов всех миграций
php artisan migrate:fresh  Удалить все и создать по новой

php artisan make:model ModelName
=============

#Route::get('/',               "LandingController@getView"    )->name('landing');
#Route::get('/ref/{ref_code}', "LandingController@getViewRef" )->name('landing_ref');



/* Для тестов */
Route::view('/main-template',     'main-template' )->name('main-template');
Route::view('/main-template123',  'main-template' )->name('123');

//Route::get('/main-template',  function () { return view('main-template');  })->name('main-template');
/* Для тестов */


123
