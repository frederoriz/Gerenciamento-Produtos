<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.product_component');
});
