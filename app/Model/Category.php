<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug','status','created_by','updated_by'
    ];


    function  createdBy(){
        return $this->hasOne(User::class,'id','created_by');
    }
    public function informations()
    {
        return $this->hasMany(Introduction::class);
    }

}
