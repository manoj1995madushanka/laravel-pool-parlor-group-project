<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class TableshowController extends Controller
{
    public function tab1()
    {
        $uname = Auth::user()->username;
        $tab_id = 1;

        $tabData = array($uname,$tab_id);

        return view('table1')->with('tabD', $tabData);
    }

    public function tab2()
    {
        $uname = Auth::user()->username;
        $tab_id = 2;

        $tabData = array($uname,$tab_id);

        return view('table2')->with('tabD', $tabData);
    }

    public function tab3()
    {
        $uname = Auth::user()->username;
        $tab_id = 3;

        $tabData = array($uname,$tab_id);

        return view('table3')->with('tabD', $tabData);
    }

    public function tab4()
    {
        $uname = Auth::user()->username;
        $tab_id = 4;

        $tabData = array($uname,$tab_id);

        return view('table4')->with('tabD', $tabData);
    }

}
