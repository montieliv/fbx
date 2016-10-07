<?php


Route::get('/', function () {
    return view('index');
});

Route::get('infoFBX', function () {
    return view('bio');
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('blade', function () {
    return view('child');
});

?>