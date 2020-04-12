<?php

namespace OWLSMATE;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'users';

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'first_name','last_name','program', 'email', 'password', 'phone','university', 'year','image'
    ];
    
    protected $hidden = [
        'created_at', 'password', 'remember_token',
    ];
}
