<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\User;

class TournamentController extends Controller
{
    public function index(User $user)
    {
        // $user->tournaments()->with('user')->get();
        // dd($user->get());
        return view('tournaments/index')->with(['tournaments' => $user->getByUser()]);
    }
}
