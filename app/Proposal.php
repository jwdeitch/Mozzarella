<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model {

	//


    public function user() {
        $this->belongsTo('App\User');
    }

}
