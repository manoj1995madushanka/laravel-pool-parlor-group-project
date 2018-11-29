<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use App\User;
use DB;

class ReservationController extends Controller
{
    public function index()
    {
        $username = auth()->user()->username;
        
       // $res = Reservation::
        $res = DB::table('reservations')->where('username', $username)->get();

        return view('mybookings')->with('res', $res);
       
    }

    public function show()
    {
       
        
       $res = Reservation::all();

        return view('auth.bookings')->with('res', $res);
       
    }

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

    public function tab2(Request $request)
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

    public function tab3(Request $request)
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

    public function tab4(Request $request)
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
