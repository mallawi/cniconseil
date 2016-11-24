<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acheter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'acheter';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname', 'fname', 'email', 'phone', 'telephone', 'address', 'postalcode',
        'ville', 'type', 'budget', 'lieu', 'message'
    ];


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
