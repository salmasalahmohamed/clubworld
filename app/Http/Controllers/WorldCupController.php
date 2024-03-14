<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTeamRequest;
use App\Models\Group;
use App\Models\Team;
use Illuminate\Http\Request;

class WorldCupController extends Controller
{
    public function index(){
        $groups=Group::with(['teams'=>function($q){
            $q->orderBy('pts','desc');

        }])->get();
        return view('welcome',get_defined_vars());
    }
    public function edit(Team $team){
        return view('team',get_defined_vars());
    }
    public function update(Team $team  ,UpdateTeamRequest$request){
             $team->update($request->safe()->except('matched_played'));
             return redirect()->back();

    }
}
