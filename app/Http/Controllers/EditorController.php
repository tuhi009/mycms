<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 123;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return 1234;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $old = '/resources/views/welcome.blade.php';
        $new = '/storage/app/public/temp/welcome.txt';


        if (Storage::disk('local')->exists($new)) {
            Storage::disk('local')->delete($new);
        }

        if (!Storage::disk('local')->copy($old, $new)) {
            die("Couldn't copy file");
        }

        if (Storage::disk('local')->exists($new)) {
            $contents = Storage::disk('local')->get($new);

        }


        return view('editor.welcome_editor')->with('contents',$contents);
        //return View::make('editor.welcome_editor', compact('contents'));
        //return $contents;

    }


}
