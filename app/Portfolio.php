<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected $fillable = [
        'category_name','title','date','url','image',
    ];

}
