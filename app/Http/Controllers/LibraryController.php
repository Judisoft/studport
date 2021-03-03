<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LibraryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function search(Request $request)

     {
        if($request->ajax())
        {
        $output="";
        $libBooks=DB::table('library')->where('title','LIKE','%'.$request->search."%")->get();
        if($libBook)
        {
        foreach ($libBook as $key => $libBook) {
        $output.='<tr>'.
        '<td>'.$libBook->id.'</td>'.
        '<td>'.$libBook->title.'</td>'.
        '<td>'.$libBook->description.'</td>'.
        '<td>'.$libBook->author.'</td>'.
        '<td>'.$libBook->isbn.'</td>'.
        '<td>'.$libBook->category.'</td>'.
        '</tr>';
        }
        return Response($output);
           }
           }
        }
        
}
