<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartyA extends Model
{
    public $table = "tbl_party_a";

    protected $fillable = [
        'instrument_details_id', 'payer_id', 'business_or_last_name', 'firstname', 'phone_no', 'email', 'address'
    ];
}
