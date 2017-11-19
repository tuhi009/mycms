<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $new = '/storage/app/public/temp/welcome.blade.php';


        if (Storage::disk('local')->exists('/storage/app/public/temp/welcome.blade.php')) {
            Storage::disk('local')->delete('/storage/app/public/temp/welcome.blade.php');
        }

        if (!Storage::disk('local')->copy($old, $new)) {
            die("Couldn't copy file");
        }



        return 124324;


    }


}
