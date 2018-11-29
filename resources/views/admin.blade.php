
{{-- @extends('layouts.app') --}}

<html>
    <head>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <!-- Material Design Bootstrap -->
        <link href="{!! asset('css/mdb.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <!-- Your custom styles (optional) -->
        <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />

    </head>

    <body>
        @include('includes.admin_navbar')

        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Dashboard</div>
            
                            <div class="card-body">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}
            
                                You are logged in!
                                    <br><br>
                                {{-- <input type="button" value="Add Post" class="btn btn-default" role="link"> --}}
                                {{-- <a href="/home/posts/create" role="button" class="btn btn-default"><i class="fa fa-plus"></i> Add Post</a>
                             --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
