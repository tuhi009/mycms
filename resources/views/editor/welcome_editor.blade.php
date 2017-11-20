@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h2 style="text-align: center">Welcome to my CMS</h2>
        </div>
    </div>
    <div class="container-fluid">
    @if(count($contents)>0)


        <form action="{{ action('EditorController@store') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <textarea class="form-control" id="editor" name="editor" style="display: none;">
                    {{$contents}}
                </textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endif

    </div>
@endsection