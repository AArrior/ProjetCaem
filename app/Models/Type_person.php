<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Type_person extends Model
{
    use CrudTrait;

   
    protected $fillable = ['name'];
 
}
