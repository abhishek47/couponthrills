<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\StoreCrudRequest as StoreRequest;
use App\Http\Requests\StoreCrudRequest as UpdateRequest;

class StoreCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Store");
        $this->crud->setRoute("admin/stores");
        $this->crud->setEntityNameStrings('store', 'stores');

        $this->crud->setColumns(['id', 'name', 'link']);
        $this->crud->addFields([[
				'name' => 'name',
				'label' => "Store name"
				], [
				'name' => 'link',
				'label' => "Store Url"
				],[
				'name' => 'logo_path',
				'label' => "Logo Url"
				],
				[
				'name' => 'category_id',
				'label' => "Choose Category"
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