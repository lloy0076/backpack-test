<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MyUserRequest as StoreRequest;

class IndexController extends Controller
{
    public function index()
    {
        return redirect('/admin/dashboard');
    }

    public function whatIsMyRequest()
    {
        $request = new StoreRequest();

        if ($request instanceof \Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest) {
            dump("It is a " . \Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest::class);
        } else {
            throw new \Exception('Not a ' . \Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest::class);
        }
    }
}
