<?php

namespace App\Http\Controllers\Admin;

use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as UserCrudController;

use App\Http\Requests\MyUserRequest as StoreRequest;

//use Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest as StoreRequest;

class MyUserCrudController extends UserCrudController
{
    public function setup()
    {
        $request = new StoreRequest();

        if ($request instanceof \Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest) {
            dump("It is a " . \Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest::class);
        } else {
            dump('Not a ' . \Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest::class);
        }

        parent::setup();
    }  

    /*
    public function store(StoreRequest $request)
    {
        parent::store($request);
    }
     */
}
