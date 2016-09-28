<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'as' => 'dashboard.index',
    'uses' => 'DashboardController@index'
]);

Route::get('dashboard', [
    'as' => 'dashboard.index',
    'uses' => 'DashboardController@index'
]);

Route::get('dashboard/tweets', [
    'as' => 'dashboard.tweets.index',
    'uses' => 'TweetController@index'
]);

Route::post('dashboard/tweets/store', [
    'as' => 'dashboard.tweets.store',
    'uses' => 'TweetController@store'
]);

Route::post('dashboard/tweets/import', [
    'as' => 'dashboard.tweets.import',
    'uses' => 'TweetController@import'
]);

Route::get('dashboard/remove-duplicate', [
    'as' => 'dashboard.remove.duplicate.index',
    'uses' => 'RemoveDuplicateController@index'
]);

Route::post('dashboard/remove-duplicate/remove', [
    'as' => 'dashboard.remove.duplicate.remove',
    'uses' => 'RemoveDuplicateController@remove'
]);

Route::get('dashboard/tokenizing', [
    'as' => 'dashboard.tokenizing.index',
    'uses' => 'TokenizingController@index'
]);

Route::post('dashboard/tokenizing/tokenize', [
    'as' => 'dashboard.tokenizing.tokenize',
    'uses' => 'TokenizingController@tokenize'
]);

Route::get('dashboard/stopwords', [
    'as' => 'dashboard.stopwords.index',
    'uses' => 'StopwordController@index'
]);

Route::post('dashboard/stopwords/store', [
    'as' => 'dashboard.stopwords.store',
    'uses' => 'StopwordController@store'
]);

Route::post('dashboard/stopwords/importtxt', [
    'as' => 'dashboard.stopwords.importtxt',
    'uses' => 'StopwordController@importtxt'
]);

Route::post('dashboard/stopwords/process', [
    'as' => 'dashboard.stopwords.process',
    'uses' => 'StopwordController@process'
]);

Route::get('dashboard/normalization', [
    'as' => 'dashboard.normalization.index',
    'uses' => 'NormalizationController@index'
]);

Route::post('dashboard/normalization/store', [
    'as' => 'dashboard.normalization.store',
    'uses' => 'NormalizationController@store'
]);

Route::post('dashboard/normalization/importtxt', [
    'as' => 'dashboard.normalization.importtxt',
    'uses' => 'NormalizationController@importtxt'
]);

Route::post('dashboard/normalization/process', [
    'as' => 'dashboard.normalization.process',
    'uses' => 'NormalizationController@process'
]);

Route::get('dashboard/idf', [
    'as' => 'dashboard.idf.index',
    'uses' => 'IDFController@index'
]);

Route::post('dashboard/idf/process', [
    'as' => 'dashboard.idf.process',
    'uses' => 'IDFController@process'
]);

Route::post('dashboard/idf/selection', [
    'as' => 'dashboard.idf.selection',
    'uses' => 'IDFController@selection'
]);

Route::post('dashboard/idf/tfselection', [
    'as' => 'dashboard.idf.tfselection',
    'uses' => 'IDFController@tfselection'
]);

Route::post('dashboard/idf/getTFIDF', [
    'as' => 'dashboard.idf.getTFIDF',
    'uses' => 'IDFController@getTFIDF'
]);

Route::get('dashboard/naive-bayes', [
    'as' => 'dashboard.naivebayes.index',
    'uses' => 'NaiveBayesController@index'
]);

Route::post('dashboard/naive-bayes/classify', [
    'as' => 'dashboard.naivebayes.classify',
    'uses' => 'NaiveBayesController@classify'
]);

Route::get('dashboard/negation-handling', [
    'as' => 'dashboard.negationhandling.index',
    'uses' => 'NegationHandlingController@index'
]);

Route::post('dashboard/negation-handling/process', [
    'as' => 'dashboard.negationhandling.process',
    'uses' => 'NegationHandlingController@process'
]);
