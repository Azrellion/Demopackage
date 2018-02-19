<?php

Route::get('hello', function () {
   echo 'Hello, This is my Composer Package Demo';
});

Route::get('displayName/{name}', 'Azrellion\Demopackage\ExampleController@displayName');