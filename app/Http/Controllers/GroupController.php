<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use App\User;

class GroupController extends Controller
{

    public function __contruct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('app.group.create');
    }

    public function store(){
        //validate user input
        $this->validate(request(),[
            'name' => 'required'
        ]);
        //create the group
        $user = auth()->user();
        $group = new Group;
        $group->name = request()->name;
        $group->user_count = 1;
        $group->save();
        $group->users()->attach($user,['role'=>'admin','current'=>'1']);

        //redirect to group page
        return redirect()->route('app.group.show',[$group]);
    }

    public function show($group) {
        return view('app.group.show',['group'=>$group]);
    }
}
