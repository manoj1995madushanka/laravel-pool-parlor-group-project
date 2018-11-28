
@extends('includes.admin_navbar')

@section('content')
    <div class="col-md-8">
        {{-- <h2 class="cmntwlcmtxt">Welcome {{ Auth::user()->name }}</h2> --}}
    </div>
    <div>
        <h1 class="row cmnttxt justify-content-center">Messages</h1>
    </div>
    <br>
    @if(count($res) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($res as $r)
                        <div class="card">
                            <div class="card-body">
                                    <h3>{{$r->username}}</h3><br>
                                    <p>Table ID {{$r->t_id}}</p><br>
                                    <p> {!! $r->checkin !!}</p><br>
                                    <small>Booked at {!! $r->created_at !!}</small>
                            </div>
                        </div><br><br>
                    @endforeach
                </div>
            </div>  
        </div>   
    @else
        <h3>No Bookings Yet</h3>
    @endif
@endsection

<style>
    .cmnttxt{
        color: black;
    }

    .cmntwlcmtxt{
        color: aliceblue;
    }

    .custom{
        padding-top: 10px !important;
        padding-bottom: 10px !important;
        padding-left: 1cm !important;
    }
</style>