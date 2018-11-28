@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Book Table 1</h1>
    </div><br>

    <div class="formcstm">           
            {!! Form::open(['url' => '/table1/booking', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                <div>
                    {{Form::label('table_id', 'Table ID')}}
                    {{Form::text('table_id', $tabD[1], ['class'=>'form-control'])}}
                </div><br><br>
                <div>
                    {{Form::label('username', 'Username')}}
                    {{Form::text('username', $tabD[0], ['class'=>'form-control'])}}
                </div><br><br>
                <div>
                    {{Form::label('dTime', 'Select Time')}}
                    {{Form::date('dTime', '', ['class'=>'form-control'])}}
                </div><br><br>
                <div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
    </div>
@endsection

<style>

    .formcstm{
        padding-left: 15%;
        padding-right: 15%;
    }

    .areacstm{
        height: 60%;
    }
</style>