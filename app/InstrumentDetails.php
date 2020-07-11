<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstrumentDetails extends Model
{
    public $table = "instrument_details";

    // protected $primaryKey = 'id'; // here set table's primary Key field name

    public $timestamps = false;

    protected $fillable = [
        'transaction_date', 'no_of_extra_copies'
    ];

}
