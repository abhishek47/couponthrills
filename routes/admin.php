<?php

CRUD::resource('categories', 'CategoryCrudController');
CRUD::resource('stores', 'StoreCrudController');
CRUD::resource('games', 'GameCrudController');
CRUD::resource('quiz', 'QuizCrudController');
CRUD::resource('quiz-questions', 'QuizQuestionCrudController');

CRUD::resource('offers', 'OfferCrudController');

Route::auth();