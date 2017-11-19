<!DOCTYPE html>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="{{asset('css/admin-sidebar.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="{{asset('lib/codemirror.js')}}"></script>
    <link rel="stylesheet" href="{{asset('lib/codemirror.css')}}">
    <script src="{{asset('lib/php.js')}}"></script>

</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h2 style="text-align: center">Welcome to my CMS</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-4 col-lg-2">

            {{--NAV BAR--}}
            <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home<span style="font-size:16px;"
                                                                     class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span
                                            class="caret"></span><span style="font-size:16px;"
                                                                       class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                                <ul class="dropdown-menu forAnimate" role="menu">
                                    <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
                                    <li><a href="#">Modificar</a></li>
                                    <li><a href="#">Reportar</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Informes</a></li>
                                </ul>
                            </li>
                            <li><a href="/admin/editor/show">Welcome Page<span style="font-size:16px;"
                                                        class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
                            </li>
                            <li><a href="#">Tags<span style="font-size:16px;"
                                                      class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{--NAV BAR END--}}

        </div>
        <div class="col-sm-9 col-md-8 col-lg-10 well" style="min-height: 500px">

            <form action="{{ action('EditorController@store') }}" method="post">
                <div class="form-group">
            <textarea class="form-control" id="editor" name="editor" style="display: none;"></textarea>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
</div>
</body>
<script>


    var cmirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
        value: "function myScript(){return 100;}\n",
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true
    });




</script>
</html>