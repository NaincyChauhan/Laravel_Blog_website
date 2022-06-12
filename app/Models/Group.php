<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'Groups';
    protected $primeryKey = 'group_id';

    function members(){
        return $this->hasMany('App\Models\Member','group_id','group_id');
    }
}
