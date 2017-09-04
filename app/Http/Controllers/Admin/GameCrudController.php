<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GameCrudRequest as StoreRequest;
use App\Http\Requests\GameCrudRequest as UpdateRequest;

class GameCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Game");
        $this->crud->setRoute("admin/games");
        $this->crud->setEntityNameStrings('game', 'games');

        $this->crud->setColumns(['id', 'name', 'access_token']);
        $this->crud->addFields([[
        	    'name' => 'name',
				'label' => "Name of Game"
				], [
        	    'name' => 'website',
				'label' => "Game Website"
				], [
        	    'name' => 'logo_path',
				'label' => "Logo Url"
				]]);
    }

	public function store(StoreRequest $request)
	{   
        $at = uniqid();
        $req = request()->merge(['access_token' => $at]);
		return parent::storeCrud($req);
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}