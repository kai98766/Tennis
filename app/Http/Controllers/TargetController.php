<?php

namespace App\Http\Controllers;

use App\Models\Target;
use App\Models\User;
use App\Http\Requests\TargetRequest;

class TargetController extends Controller
{
    public function create(User $user)
    {
        
        return view('/mypage/targets/create');
    }
    
    public function store(Target $target, TargetRequest $request)
    {
    $input = $request['target'];
    $target->fill($input)->save();
    return redirect('/');
    }
    
}