<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfitLoss extends Model
{
    //
    protected $fillable = ['month_year', 'Qty', 'Total', 'Rate', 'Type'];
}
