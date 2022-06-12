<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;

class IndexController extends Controller
{
    public function index(){

        // -- getting member's group  detail
        // return Member::find(1)->getGroup; 

        // -- getting member's data with group detail
        return Member::with('getGroup')->get();
    }

    public function GroupDetails(){

        // getting groups memeber's detail
        return Group::with('members')->get();
    }

    public function YourProfile(){
        session()->put('user_id',1);
        echo "this is your profile";
    }

}
