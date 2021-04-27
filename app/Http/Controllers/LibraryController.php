<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use App\Models\Library;
use App\Models\Exam;
use App\Models\User;
use \Illuminate\Support\Facades\Redirect;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $libraryBooks = Library::all();
        return view('library.index', compact('libraryBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Exam::select('title')->whereNotNull('title')->distinct()->orderBy('title')->get();
        $categories = BlogCategory::select('title')->whereNotNull('title')->distinct()->orderBy('title')->get();
        return view('library.create', compact('categories', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $library = $request->all();
        
        if($request->hasFile('cover_image') && $request->hasFile('cover')) {

                $file = $request->file('cover_image');
                $extension = $file->extension()?: 'png';
                $picture = str_random(10) . '.' . $extension;
                $destinationPath = public_path() . '/uploads/cover_images/';
                $file->move($destinationPath, $picture);
                //$library->cover_image = $file;
            
            $library = new Library;
            $library->uuid = (string)Uuid::generate();
            $library->cover_image = $picture; //$request->cover_image->getClientOriginalName();
            $library->cover = $request->cover->getClientOriginalName();
            $request->cover->storeAs('library', $library['cover']);
            $library->title = $request->input('title');
            $library->description = $request->input('description');
            $library->author = $request->input('author');
            $library->isbn = $request->input('isbn');
            $library->category = $request->input('category');
            $library->course = $request->input('course');
            $library->save();
        }
        
        //$user_departments = User::orderBy('department')->distinct()->get();
       $success = "File Upload successful";
        return  $success;
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
     * Remove the specified resource from storage.
     *
     * @param  uuid $uuid
     * @return \Illuminate\Http\Response
     */
    public function download($uuid)
{
    $library = Library::where('uuid', $uuid)->firstOrFail();
    $pathToFile = storage_path('app/library/' . $library->cover);
    return response()->download($pathToFile);
}
}
