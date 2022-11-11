<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\User;
use App\Models\Tournament;
use App\Models\Target;

class UserController extends Controller
{
    public function index(User $user)
    {
        $points=Tournament::where('user_id', \Auth::user()->id)->orderBy('points','desc')->take(5)->sum('points');
        $goal=Target::where('user_id',\Auth::user()->id)->orderBy('created_at','desc')->value('point');
        $slogun=Target::where('user_id',\Auth::user()->id)->orderBy('created_at','desc')->value('slogun');
        return view('/mypage')->with(['goal'=>$goal,'points'=>$points,'slogun'=>$slogun]);
    }
}