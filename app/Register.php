<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $table = "individual_accounts";

    public $timestamps = false;

    protected $fillable = [
        'tbl_lga_id', 'firstname', 'lastname', 'phone_no', 'email', 'password', 'gender', 'address',	
    ];
}
