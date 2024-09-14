<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
   use HasApiTokens,HasFactory,Notifiable;

   protected $fillable = ['name','email','password'];

   protected $hidden = ['password','remember_token'];

   protected $casts = [
      'email_verified_at' => 'datetime',
      'password' => 'hashed'
   ];

   public function roles(): BelongsToMany
   {
      return $this->belongsToMany(Role::class);
   }
}