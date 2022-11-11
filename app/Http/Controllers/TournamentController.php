<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\User;
use App\Http\Requests\TournamentRequest;

class TournamentController extends Controller
{
    public function index()
    {
        // $user->tournaments()->with('user')->get();
        // dd($user->get());
        $tournaments=Tournament::where('user_id', \Auth::user()->id)->get();
        return view('/mypage/tournaments/index')->with(['tournaments'=>$tournaments]);
    }
    public function create(User $user)
    {
        $tournament=Tournament::where('user_id', \Auth::user()->id)->get();
        return view('/mypage/tournaments/create')->with(['tournament'=>$tournament]);
    }
    
    public function store(Tournament $tournament, TournamentRequest $request)
    {
    $input = $request['tournament'];
    $tournament->fill($input)->save();
    return redirect('/tournaments');
    }
    
    public function edit(Tournament $tournament)
    {
    $tournament=Tournament::where('user_id', \Auth::user()->id)->get();
    return view('/mypage/{tournament}/edit')->with(['tournament' => $tournament]);
    }
    
    public function update(TournamentRequest $request, Tournament $tournament)
    {
    $input_user = $request['tournament'];
    $tournament->fill($input)->save();
    return redirect('/tournaments');
    }
    
    public function delete(Tournament $tournament)
    {
    $tournament->delete();
    return redirect('/tournaments');
    }
}
