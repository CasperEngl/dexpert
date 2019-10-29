<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'subscription_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
