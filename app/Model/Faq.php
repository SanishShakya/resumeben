<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use SoftDeletes;

    protected $table = 'faq';

    protected $fillable = [
        'questions', 'answers','status','created_by','updated_by'
    ];


    function  createdBy(){
        return $this->hasOne(User::class,'id','created_by');
    }
    function  updatedBy(){
        return $this->hasOne(User::class,'id','updated_by');
    }

}
