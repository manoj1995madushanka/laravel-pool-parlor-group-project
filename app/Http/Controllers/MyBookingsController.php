<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class MyBookingsController extends Controller
{
    public function index(){
        $bookings = DB::pooler('select t_id,checkin from reservations ')->where('username','Auth::user()->username');
        return view('my_bookings',['bookings'=>$bookings]);
    }
}
