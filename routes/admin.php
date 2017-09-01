<?php

CRUD::resource('categories', 'CategoryCrudController');
CRUD::resource('stores', 'StoreCrudController');

Route::auth();