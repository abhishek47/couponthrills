<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\QuizCrudRequest as StoreRequest;
use App\Http\Requests\QuizCrudRequest as UpdateRequest;

class QuizCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Quiz");
        $this->crud->setRoute("admin/quiz");
        $this->crud->setEntityNameStrings('quiz', 'quizzes');

        $this->crud->setColumns(['id', 'title', 'description']);
        $this->crud->addFields([[
				'name' => 'title',
				'label' => "Quiz name"
				], [
				'name' => 'description',
				'label' => "Description"
				],[
				'name' => 'level',
				'label' => "Level",

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