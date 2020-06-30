<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualAccount extends Model
{

    public $table = "individual_accounts";

    public $timestamps = false;

    protected $fillable = [
        'users_id', 'country_id', 'states_id', 'tin_number', 'firstname', 'lastname', 'phone_no', 'email', 'gender'	
    ];
}
