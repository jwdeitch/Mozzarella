<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proposal;
use Carbon\Carbon;
Use App\Unit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class Proposal_submissions extends Controller {

	public function index() {

        $props = Proposal::all();
        return view('index', compact('props'));
    }

    public function newprop() {


        return view('submit');
}

    public function newproppost(Request $request)
    {

        $proposal = new proposal();

        $proposal->status = 'Pending...';

        $proposal->user_id = Auth::id();

        $proposal->exp_date = Carbon::parse($request->get('date'));
        $proposal->user_note = $request->get('usr_notes');
        $proposal->admin_note = null;
        $proposal->quantity = $request->get('qnt');
        $proposal->save();
        return Redirect::route('index');

    }

}
