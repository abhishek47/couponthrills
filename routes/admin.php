<?php

CRUD::resource('categories', 'CategoryCrudController');
CRUD::resource('stores', 'StoreCrudController');
CRUD::resource('games', 'GameCrudController');

Route::auth();