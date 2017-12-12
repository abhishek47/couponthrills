<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\QuizQuestionCrudRequest as StoreRequest;
use App\Http\Requests\QuizQuestionCrudRequest as UpdateRequest;

class QuizQuestionCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\QuizQuestion");
        $this->crud->setRoute("admin/quiz-questions");
        $this->crud->setEntityNameStrings('question', 'questions');

        $this->crud->setColumns(['id', 'question', 'points']);
        $this->crud->addFields([
				[
				'name' => 'quiz_id',
				'label' => "Choose Quiz",
				 'type' => 'select',
				   'entity' => 'quiz', // the method that defines the relationship in your Model
				   'attribute' => 'title', // foreign key attribute that is shown to user
				   'model' => "App\Models\Quiz" // foreign key model
				],[
				'name' => 'question',
				'label' => "Question"
				],[
				'name' => 'option_1',
				'label' => "Option 1",

				],[
				'name' => 'option_2',
				'label' => "Option 2",

				],[
				'name' => 'option_3',
				'label' => "Option 3",

				],[
				'name' => 'option_4',
				'label' => "Option 4",

				], [
				'name' => 'points',
				'label' => "points"
				],[
				'name' => 'level',
				'label' => "Level",

				],[
				'name' => 'points',
				'label' => "Tokens",
				],[
				'name' => 'hint',
				'label' => "Hint",

				],[
				'name' => 'time',
				'label' => "Time Limit",
				'type' => 'number'
				],
				[
				'name' => 'answer',
				'label' => "Answer",

				]]);
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}