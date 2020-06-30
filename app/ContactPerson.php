<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    //
    public $table = "contact_persons";

    public $timestamps = false;

    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'email', 'contact_email', 'contact_phone_no', 
    ];
    					
}
