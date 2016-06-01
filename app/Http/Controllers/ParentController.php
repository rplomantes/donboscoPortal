<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ParentController extends Controller
{
    //
    function getsection(Request $request){
        
        $this->validate($request, [
            'studentid' => 'required|max:9',
            'lastname' => 'required',
        ]);
        
        $studentname = DB::Select("select users.idno, users.lastname, users.firstname, users.middlename, "
                . "statuses.level, statuses.section, statuses.course, statuses.strand, statuses.status from users, statuses "
                . "where users.idno = statuses.idno and users.idno = '". $request->studentid ."' and "
                . "users.lastname like '" .$request->lastname . "%'");
        //return $studentname;
        return view('getsection',compact('studentname'));
    }
}
