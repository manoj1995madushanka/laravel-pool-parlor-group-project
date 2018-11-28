@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>My Bookings</h1>
    </div><br>

    <div class="formcstm">
        <table border = 1>
            <tr>
                <td>Table ID</td>
                <td>Date</td>
            </tr>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->t_id }}</td>
                    <td>{{ $booking->checking }}</td>
                </tr>
            @endforeach
        </table>

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