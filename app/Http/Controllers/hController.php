<?php namespace App\Http\Controllers;


class hController extends Controller {

  

    public function showTable()
    {
        $table =\App\horses::all();
        return \View::make ('horses')->with('table', $table);
    }

}
