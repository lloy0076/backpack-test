<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Admin\CrudPanel;
use App\Models\City;

/**
 * Class AdminCrudController
 * @package Admin\Http\Controllers
 * @property CrudPanel $crud
 */
class AdminCrudController extends CrudController
{
    function __construct(City $city)
    {
        $this->city = $city;
        parent::__construct();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getQuery()
    {
        return clone $this->crud->query;
    }
}
