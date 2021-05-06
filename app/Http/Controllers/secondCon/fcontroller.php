<?php

namespace App\Http\Controllers\secondCon;
use Illuminate\Routing\Controller;
class fcontroller extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function showstring()
    {

        return 'string show';
    }
    public function showstring2()
    {

        return 'string show';
    }

public function getIndex(){
    return view ('welcome');
}

}
