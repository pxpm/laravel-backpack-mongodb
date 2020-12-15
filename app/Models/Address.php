<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Jenssegers\Mongodb\Eloquent\Model;

class Address extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'addresses';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['monster_id', 'street', 'country', 'icon_id'];

    public $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    
    public function monster()
    {
        return $this->belongsTo(\App\Models\Monster::class, 'monster_id');
    }

    public function icon()
    {
        return $this->belongsTo(\App\Models\Icon::class, 'icon_id');
    }

}
