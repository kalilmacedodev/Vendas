<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VENDAS</title>
    <link rel="icon" href="/icon.avif">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>     <!-- Tooltip -->
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
	<script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/adminkit.css')}}" rel="stylesheet">

    <!-- MULTIPLE SELECT -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" /> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


</head>

{{-- Feather Icons --}}
<script src="https://unpkg.com/feather-icons"></script>

<body>
    @if ($errors->any())
        <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </strong>
    </div>
    @endif

    @include('sweetalert::alert')


    @yield('app')

    <!-- <script>
        const _BASE_URL = {!! json_encode(url('/').'/') !!};
    </script> -->

	<script src="{{ asset('js/app.js') }}"></script>
    <!-- MULTIPLE SELECT SCRIPTS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <script>
        $('.dropdown-toggle').dropdown()
    </script>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>

    {{-- Feather Icons --}}
    <script>
        feather.replace()
    </script>

</body>


<script src="{{ asset('js/adminkit.js')}}"></script>

<style>
    body
* {
    font-size: 100%;
}

.alert {
    border-radius: 25px;
    padding: 20px;
    background-color: red;
    color: aliceblue;
    width: 15%;
    font-size: 15px;
    position: fixed;
    top: 12%;
    right: 5%;
    z-index: var(--z-fixed);
    box-shadow: 0 1px 20px rgba(146, 161, 176, 0.15);
    animation: fadeInAnimation ease 3s;
  }

  .closebtn
  {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .closebtn:hover
  {
    color: rgb(0, 0, 0);
  }


  @keyframes fadeInAnimation {
    0% {
        opacity: 0;
        transform: translateY(-10px);

    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
  }
</style>


</html>
