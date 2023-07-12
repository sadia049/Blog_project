<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Minimo</title>
    <!--CSS files-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>

<body>
@include('components.header')

<div class="" id='main_layout'>

@yield('content')

</div>


@include('components.footer')

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>