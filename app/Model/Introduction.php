<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\Image;

class Introduction extends Model
{
    use SoftDeletes;

    protected $table = 'introductions';

    protected $fillable = [
        'fullName', 'dob', 'website', 'detail','status','email','slug','heading','created_by','updated_by','expBody1','expTitle1','expBody2','expTitle2','expBody3','expTitle3','image'
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
