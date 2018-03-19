<?php

namespace App;

use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    
    /**
     * Связь моделей User и Shop, один ко многим
     * 
     * @return
     */
    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
    
    /**
     * Проверка прав на запись/изменение/удаление
     * 
     * @return
     */
    public function isAdmin()
    {
        if ($user = Auth::user()) {
            return $user->id == 1;
        }
        
        return false;
    }
}
