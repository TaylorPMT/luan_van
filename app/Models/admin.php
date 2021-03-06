<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;

class admin extends Authenticatable
{
    //
    use Notifiable;
    protected $guard='admin';
    protected $table='admin';
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function nameAdminCreated()
    {
        return $this->belongsTo('App\Models\admin', 'created_by', 'id');
    }
    public function nameAdminUpdated()
    {
        return $this->belongsTo('App\Models\admin', 'updated_by', 'id');
    }

}
