<?php

namespace OWLSMATE;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name','author','isbn','image_6', 'image_1','image_2','image_3','image_4','image_5','edition', 'price', 's_id', 'course_id', 'course_name','product_type','b_type','description','available','course_description',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function pictures(){
        return $this->hasMany('OWLSMATE\Picture');
    }
}
