<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    public $table = "tbl_tax_stamp_duty";

    public $timestamps = false;


    protected $fillable = [
        'assess_no ', 'payera_name', 'payerb_name', 'tbl_duty_instruments_name', 'paid_amount',
    ];
}
