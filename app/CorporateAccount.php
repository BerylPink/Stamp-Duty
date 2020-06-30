<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateAccount extends Model
{
    public $table = "corporate_accounts";

    public $timestamps = false;

    protected $fillable = [
        'users_id', 'country_id', 'states_id', 'contact_persons_id', 'institution_name', 'email', 'phone_no', 'address', 'tin_number', 'CAC_registration_number', 'date_of_incorporation'	
    ];
}
