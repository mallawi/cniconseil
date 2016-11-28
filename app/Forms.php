<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forms';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname', 'fname', 'email', 'phone', 'telephone', 'message'
    ];


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
    * Get the acheter for the forms.
    */
    public function acheter()
    {
        return $this->hasMany('App\Acheter');
    }
}
