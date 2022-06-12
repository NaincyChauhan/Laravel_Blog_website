<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'Members';
    protected $primeryKey = 'id';

    // using one to one relations
    // function getGroup(){
    //     return $this->hasOne('App\Models\Group','group_id');
    // }

    // -- using one to many relations
    public function getGroup(){
        return $this->hasMany('App\Models\Group','group_id','group_id');
    }
}
