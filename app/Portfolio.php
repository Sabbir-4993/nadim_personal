<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    protected $fillable = [
        'category_name','title','date','status',
        'url','photo'
    ];
    
}
