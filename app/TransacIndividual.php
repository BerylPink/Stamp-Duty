<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransacIndividual extends Model
{
    public $table = "tbl_duty_instruments";

    public $timestamps = false;

    protected $fillable = [
        'name', 'rate_type', 'rate', 'extra_copy',
    ];
}
