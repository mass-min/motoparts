<?php

Route::resource('items', 'ItemsController')->only([
    'index', 'show'
]);;