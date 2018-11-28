
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
    </body>
</html>
