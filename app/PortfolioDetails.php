<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioDetails extends Model
{
    protected $table = 'portfoliodetails';

    protected $fillable = [
        'portfolio_id','image',
    ];
}
