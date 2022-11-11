<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller
{
    public function create(User $user)
    {
        return view('/mypage/accounts/create');
    }
    
    public function store(Account $account, AccountRequest $request)
    {
    $input = $request['account'];
    $account->fill($input)->save();
    return redirect('/');
    }
}