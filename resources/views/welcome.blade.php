<div class="container-fluid">

    <form action="{{ action('EditorController@store') }}" method="post">
        <div class="form-group">
            <textarea class="form-control" id="editor" name="editor" style="display: none;"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>