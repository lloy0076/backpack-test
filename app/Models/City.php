<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model       as Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

use Illuminate\Database\Eloquent\Builder as Builder;

use Backpack\CRUD\CrudTrait as CrudTrait;

use Venturecraft\Revisionable\RevisionableTrait as RevisionableTrait;

class City extends Model
{
    use CrudTrait, RevisionableTrait, SoftDeletes;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tests';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'phone_no',
        'description',
    ];
    // protected $hidden = [];
    //
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $revisionCreationsEnabled = true;

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
