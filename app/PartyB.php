<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartyB extends Model
{
    public $table = "tbl_party_b";

    protected $fillable = [
        'instrument_details_id', 'party_b_payer_id', 'party_b_business_or_last_name', 'party_b_firstname', 'party_b_phone_no', 'party_b_email', 'party_b_address'
    ];
}
