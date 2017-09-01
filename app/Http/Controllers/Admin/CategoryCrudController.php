<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryCrudRequest as StoreRequest;
use App\Http\Requests\CategoryCrudRequest as UpdateRequest;

class CategoryCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Category");
        $this->crud->setRoute("admin/categories");
        $this->crud->setEntityNameStrings('category', 'categories');

        $this->crud->setColumns(['id', 'name']);
        $this->crud->addField([
				'name' => 'name',
				'label' => "Category name"
				]);
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