<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendre extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendre';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'forms_id', 'address', 'postalcode', 'ville', 'type', 'prix', 'address_bien'
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
