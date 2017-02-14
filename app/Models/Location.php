<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Location extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'locations';

    protected $fillable=['room',
    					'adress',
    					'city_id'];
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
  
    // protected $hidden = [];
    // protected $dates = [];

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
	public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function membership(){
        return $this->belongsTo('App\Models\Membership');
    }

    public function getFullAdressAttribute() {
   		return $this->city_id.' '.$this->adress.' '.$this->room;
}
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
