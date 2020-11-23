<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\Image;

class Review extends Model
{
    use SoftDeletes;

    protected $table = 'review';

    protected $fillable = [
        'name', 'profession', 'description','status','created_by','updated_by','image'
    ];


    function  createdBy(){
        return $this->hasOne(User::class,'id','created_by');
    }
    function  updatedBy(){
        return $this->hasOne(User::class,'id','updated_by');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
