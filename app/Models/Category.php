<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //允许修改的字段
    protected $fillable=[
        'name','description',
    ];

}
