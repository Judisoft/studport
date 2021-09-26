<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use App\Models\Exam;
use App\Models\User;
use App\Models\Library;
use \Illuminate\Support\Facades\Redirect;
use Sentinel;
use App\Models\Blog;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$exams = Exam::all();
       if(Sentinel::check())
       {
        $search = request()->query('search');
        if ($search) 
        {
           $exam_questions = Exam::where('title', 'LIKE', "%{$search}%")
                                   ->simplePaginate(10);
        }
        else
        {
           $exam_questions = Exam::where('department', Sentinel::getuser()->department)
                                   ->simplePaginate(10);
        }

        $course_title = Exam::select('title')->where('department', Sentinel::getUser()->department)->distinct()->orderBy('title')->get();
        $course_titles = Blog::select('title')->where('user_id', Sentinel::getUser()->id)->distinct()->orderBy('title')->get();
        
        return view('exams', compact('course_title', 'exam_questions'));

       }
       else {

        return view('login');
       }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_departments = User::select('department')->whereNotNull('department')->distinct()->orderBy('department')->get();
        $user_institutions = User::select('institution')->whereNotNull('institution')->distinct()->orderBy('institution')->get();
        return view('exams.create', compact('user_departments', 'user_institutions'));
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
        $exam = $request->all();
        
        if ($request->hasFile('cover')) {
            
            $exam = new Exam;
            $exam->uuid = (string)Uuid::generate();
            $exam->cover = $request->cover->getClientOriginalName();
            $request->cover->storeAs('exams', $exam['cover']);
            $exam->title = $request->input('title');
            $exam->year = $request->input('year');
            $exam->instructor = $request->input('instructor');
            $exam->department = $request->input('department');
            $exam->institution = $request->input('institution');
            $exam->type = $request->input('type');
            $exam->save();
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
    $exam = Exam::where('uuid', $uuid)->firstOrFail();
    $pathToFile = storage_path('app/exams/' . $exam->cover);
    return response()->download($pathToFile);
    }
}
