<?php

namespace OWLSMATE;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'house';
    protected $fillable = [

    	'house_type','room_type','accomodate','address','postcode','city','bath_type','rent','internet','electricity','bond','min_stay','smoking','pet','user_id','describe_me','describe_others','image_6', 'image_1','image_2','image_3','image_4','image_5','house_description','gender', 'title'
    ];

    protected $hidden = [
        'created_at','id', 'updated_at',
    ];
}
