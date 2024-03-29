<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'email','phone','address', 'image', 'instagram', 'facebook', 'behance', 'fiverr',
    ];
}
