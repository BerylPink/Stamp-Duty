<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localgovernment extends Model
{
    public $table = "tbl_lga";
    protected $primaryKey = 'id'; // here set table's primary Key field name


    protected $fillable = [
        'id','descrp',
    ];

    public function student(){
        return $this->hasOne(Student::class);
    }
}
