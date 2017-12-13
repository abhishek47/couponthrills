<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OfferCrudRequest as StoreRequest;
use App\Http\Requests\OfferCrudRequest as UpdateRequest;

class OfferCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Offer");
        $this->crud->setRoute("admin/offers");
        $this->crud->setEntityNameStrings('offer', 'offers');

        $this->crud->setColumns(['code', 'tokens', 'valid_till']);
        $this->crud->addFields([[
				'name' => 'code',
				'label' => "Offer Code"
				], [
				'name' => 'tokens',
				'label' => "Free Tokens"
				],[
				'name' => 'valid_till',
				'label' => "Expiry Date",
				'type' => "date"
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