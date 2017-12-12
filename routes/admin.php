<?php

CRUD::resource('categories', 'CategoryCrudController');
CRUD::resource('stores', 'StoreCrudController');
CRUD::resource('games', 'GameCrudController');
CRUD::resource('quiz', 'QuizCrudController');

Route::auth();