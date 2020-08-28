
<?php
Route::group([
    'namespace' => 'Team',
    'prefix' => 'team',
    'as' => 'team.'
], function() {


    Route::group([ 'prefix' => 'results',  'as' => 'results.'], function() {

        /*Routes Here*/
        Route::get('/index','ResultController@index')->name('index');


    });

});
