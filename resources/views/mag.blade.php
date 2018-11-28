
@extends('includes.admin_navbar')

@section('content')
    <div class="col-md-8">
        {{-- <h2 class="cmntwlcmtxt">Welcome {{ Auth::user()->name }}</h2> --}}
    </div>
    <div>
        <h1 class="row cmnttxt justify-content-center">Messages</h1>
    </div>
    <br>
    @if(count($msg) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($msg as $m)
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$m->name}}</h3>
                                <small>{{$m->email}}</small><br><br>
                                <p> {!! $m->msg !!}</p><br>
                                <small>Recived on {!! $m->created_at !!}</small>
                            </div>
                        </div><br><br>
                    @endforeach
                </div>
            </div>  
        </div>   
    @else
        <h3>No Messages Found</h3>
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