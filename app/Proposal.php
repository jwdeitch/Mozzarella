<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model {

	//
    protected $dates = array('exp_date');


    public function user() {
        $this->belongsTo('App\User');
    }


}
