
<?php
Route::group([
    'namespace' => 'Team',
    'prefix' => 'team',
    'as' => 'team.'
], function() {


    Route::group([ 'prefix' => 'fixtures',  'as' => 'fixtures.'], function() {

        /*Routes Here*/
        Route::get('/index','ResultController@index')->name('index');


    });

});
