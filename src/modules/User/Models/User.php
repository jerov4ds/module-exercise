<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'is_enabled'];
}

