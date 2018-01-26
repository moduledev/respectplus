<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    //

    public $fillable = [
        'title','body','object_type_id','object_operation_id','object_place_id','area','flat_count','bathroom_count'
    ];

    public function getIdAttribute($value)
    {
        return str_pad($value, 6, '0', STR_PAD_LEFT);
    }

    public function objectoperation()
    {
        return $this->belongsTo('App\ObjectOperation', 'object_operation_id');
    }

}
