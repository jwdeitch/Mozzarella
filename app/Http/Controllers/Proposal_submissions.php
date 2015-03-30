<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Proposal_submissions extends Controller {

	public function index() {


        return view('index');
    }

    public function newprop() {


        return view('submit');
}

}
