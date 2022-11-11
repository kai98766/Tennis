<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Tournament;
use App\Models\Target;
use App\Models\Account;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function tournaments()   
    {
    return $this->hasMany(Tournament::class);  
    }
    public function targets()   
    {
    return $this->hasMany(Target::class);  
    } 
    public function accounts()   
    {
    return $this->hasOne(Account::class);  
    } 
    public function getTournament()
    {
        return $this::with('tournaments')->find(Auth::id())->tournaments()->get();
    }
    public function getTarget()
    {
        return $this::with('targets')->find(Auth::id())->targets()->get();
    }
    public function getAccount()
    {
        return $this::with('accounts')->find(Auth::id())->accounts()->get();
    }
}
