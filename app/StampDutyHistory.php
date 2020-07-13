<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StampDutyHistory extends Model
{
    public $table = "stamp_duty_history";

    protected $fillable = [
        'users_id', 'tax_stamp_duty_id', 'certificate_no', 'party_a_name', 'party_a_phone_no', 'party_b_name', 'party_b_phone_no', 'reference_no'	
    ];
}
