<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investir extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'investir';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'forms_id', 'address', 'postalcode', 'ville', 'revenu', 'impots'
    ];


    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];


    /**
    * Get the forms that owns acheter.
    */
    public function forms()
    {
        return $this->belongsTo('App\Forms');
    }
