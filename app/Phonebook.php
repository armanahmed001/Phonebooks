<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $hidden = [
        'created_at', 'update_at',
    ];

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
