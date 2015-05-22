<?php namespace App\Http\Controllers;


class UserController extends Controller {

  

    public function showSth()
    {
        $sessions =\App\Session::all();
        return \View::make ('haha')->with('sessions', $sessions);
    }

}