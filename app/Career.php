<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';

    protected $fillable = [
        'name','email','description','image',
    ];
}
