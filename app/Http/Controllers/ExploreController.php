<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //
    public function __invoke(){
        $users=User::paginate(10);
        return view('explore')->with('users',$users);
    }
}
