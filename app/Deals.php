<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Deals extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'deals';
    
    protected $fillable = [
          'title',
          'content'
    ];
    

    public static function boot()
    {
        parent::boot();

        Deals::observe(new UserActionsObserver);
    }
    
    
    
    
}