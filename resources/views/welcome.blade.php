<div class="container-fluid">

    <form action="{{ action('EditorController@store') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <textarea class="form-control" id="editor" name="editor" style="display: none;"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Submmit</button>
    </form>


</div>