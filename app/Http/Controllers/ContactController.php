<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Redirect;
use App\Models\Contact;

class ContactController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
            $this -> validate($request,[
                'contact_name' => 'required',
                'contact_email' => 'required',
                'contact_title' => 'required',
                'contact_msg' => 'required'
    
            ]);
    
            $contact = new Contact;
            $contact->contact_name = $request->input('contact_name');
            $contact->contact_email = $request->input('contact_email');
            $contact->contact_title = $request->input('contact_title');
            $contact->contact_msg = $request->input('contact_msg');
            $contact->save();
    
            if ($contact->id) {
                return Redirect::route('contact')->with('success', 'Messege sent');
               
            } else {
                return Redirect::route('contact')-with('error', 'Sent failed');
            }
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
}
