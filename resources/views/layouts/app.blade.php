<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="{{asset('css/admin-sidebar.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    {{--FOR CODEMIRROR--}}
    <link rel="stylesheet" href="{{asset('cmirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('cmirror/theme/dracula.css')}}">
    <script src="{{asset('cmirror/codemirror.js')}}"></script>
    <script src="{{asset('cmirror/php.js')}}"></script>
    <script src="{{asset('cmirror/css.js')}}"></script>
    <script src="{{asset('cmirror/htmlmixed.js')}}"></script>
    <script src="{{asset('cmirror/javascript.js')}}"></script>
    <script src="{{asset('cmirror/xml.js')}}"></script>
    <script src="{{asset('cmirror/clike.js')}}"></script>
    <script src="{{asset('cmirror/matchbrackets.js')}}"></script>
    <script src="{{asset('cmirror/active-line.js')}}"></script>
</head>
<body>
<div id="app">
    @include('inc.navbar')
    <div class="container">

        @include('inc.messeges')
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script>

    var cm = CodeMirror.fromTextArea(document.getElementById("editor"), {
        value: "function myScript(){return 100;}\n",
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        theme: 'dracula',
        styleActiveLine: true,
        smartIndent: true
    });

</script>
</body>
</html>
