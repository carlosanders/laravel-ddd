<?php

namespace App\Domains\Users;

use App\Domains\Users\Presenters\UserPresenter;
use App\Support\Laravel\ViewPresenter\Presentable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Presentable, Notifiable;

    /**
     * @var string User Presenter class
     */
    protected $presenter = UserPresenter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
