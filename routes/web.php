<?php

use Illuminate\Support\Facades\Route;
use App\Ai\Agents\LocalAssistant;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ai', function () {
    $response = LocalAssistant::make()->prompt("write my name from arabic '
    خالد علام احمد عمر
    ' to every language in the world,
     separated by <br> before and after");

    return (string) $response;
});