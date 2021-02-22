<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected $fillable = [
        'category_name','title','description','date','url','image', 'status',
    ];

}
