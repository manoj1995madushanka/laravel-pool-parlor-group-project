<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;

class ReservationController extends Controller
{
    public function tab1(Request $request)
    {
        
        // $this->validate($request, [
        //     'table_id' => 'required',
        //     'username' => 'required',
        //     'dTime' => 'required'
        // ]);
        //echo "dhf";
        $stat = 1;
        

        $res = new Reservation;
        
        $res->t_id = $request -> input('table_id');
        $res->username = $request -> input('username');
        $res->checkin = $request -> input('dTime');
        $res->status = $stat;

        $res->save();

        return view('home');

        
    }
}
