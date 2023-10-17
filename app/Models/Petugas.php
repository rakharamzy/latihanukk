<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

// class Petugas extends Model
// {
//     use HasFactory;
// }
class petugas extends Authenticatable
{
use HasApiTokens, HasFactory, Notifiable;
protected $fillable = [
'id_petugas',
'nama',
'username',
'password',
'telp',
'level',
];
protected $hidden = [
'password',
'remember_token',
];
protected $enums = [
'level' => ['admin', 'gurubk'],
];
protected $casts = [
'username_verified_at' => 'datetime',
'password' => 'hashed',
];

}