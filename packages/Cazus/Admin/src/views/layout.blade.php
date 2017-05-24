<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 22/05/2017
 * Time: 03:44
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Faddit - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    @yield('styles')

</head>
<body>

<div class="header">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <a class="navbar-brand" href="#">Faddit</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">

                </ul>

                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link btn btn-outline-success"><i class="fa fa-plus" aria-hidden="true"></i>
                            Ajouter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#signin"> Connexion/Inscription</a>
                    </li>

                </ul>


        </div>

    </nav>

</div>

<!--Navbar-->


<div class="container">
    <div class="row">
        @yield('content')
    </div>

</div>

@include('faddit::register')

@include('faddit::signin')

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script>
    $('#register').on('shown.bs.modal', function () {
        $('#myInput').focus();
    });

    $('#compte-btn').click(function () {
        $('#register').modal('show');
        $('#signin').modal('hide');
    });
    $('#cnx-btn').click(function () {
        $('#signin').modal('show');
        $('#register').modal('hide');
    });
</script>
@yield('script')

</body>
</html>