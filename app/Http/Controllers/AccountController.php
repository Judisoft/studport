<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Activation;
use App\Http\Requests\BlogRequest;
use App\Models\BlogComment;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\FrontendRequest;
use App\Mail\Register;
use App\Models\BookRequest;
use App\Models\News as NewsAlias;
use App\Models\User;
use App\Models\Blog;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use DOMDocument;
use File;
use Hash;
use http\Client\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Mail;
use Reminder;
use Validator;
use Sentinel;
use URL;
use View;
use stdClass;
use Illuminate\Support\Facades\Storage;
use App\Mail\ContactUser;
use App\Mail\ForgotPassword;
use App\Models\BlogCategory;
use App\Models\Country;
use Webpatser\Uuid\Uuid;
use App\Models\Exam;
use App\Models\Book;
use App\Models\Newsletter;
use App\Models\Contact;
use App\Models\Library;

class AccountController extends JoshController
{
   /**
     * get user details and display
     *  @param  int  $id
     */
    public function index($slug = '')
    {
        $user = Sentinel::getUser();
        $users = User::all();
        $teachers = User::where('user_role', 'tutor')->get();
        $role = 'tutor';
        //$users = User::select('first_name','last_name')->where('user_role', $role)->get();
        $countries = Country::all()->pluck('name', 'sortname')->toArray();
        $blogcategory = BlogCategory::pluck('title', 'id');
        $categories = BlogCategory::all();
        $blogscategories = BlogCategory::all();
        //$id = Blog::get('user_id');
        $blogs = Blog::latest()->simplePaginate(10);
        $blog = Blog::where('slug', $slug)->first();
        //$docSize = filesize($blog->image);
        $school_mates = User::where('institution', Sentinel::getUser()->institution)->get();
        $blogscategories = BlogCategory::all();
        $user_questions = Blog::where('user_id', Sentinel::getUser()->id)->latest()->simplePaginate(5); //DB::table('blogs')->where('user_id', Sentinel::getUser()->id)->get();
        // $user_categories = Blog::where('blog_category_id', Sentinel::getUser()->id)->get();
        //$tags = $this->tags;
        $news = NewsAlias::orderBy('id', 'DESC')->get();
        // Get distinct departments
        $user_departments =  User::select('department')->whereNotNull('department')->distinct()->orderBy('department')->get();
         //Number of users' questions asked
         $numberOfUserQuestions = count($user_questions);
         //number of questions user answered
         $user_answers = BlogComment::where('email', Sentinel::getUser()->email)->get(); 
         $numberOfUserAnswers = count($user_answers);
         //Books requested
         $book_request = Book::where('email', Sentinel::getUser()->email)->get();
         $numberOfUserRequest = count($book_request);
         //get user courses
         $course_title = Exam::select('title')->where('department', Sentinel::getUser()->department)->distinct()->orderBy('title')->get();
         //get institutions
         $institutions = User::select('institution')->whereNotNull('institution')->distinct()->orderBy('institution')->get();
         //questions from user's institution. We grab all questions from authenticated user's institution
         $userInstitutionQuestions = Blog::where('institution', Sentinel::getUser()->institution)->get();
         //$facebook = Share::page('http://jorenvanhocht.be')->facebook();
         $course_titles = Blog::select('title')->where('user_id', Sentinel::getUser()->id)->distinct()->orderBy('title')->get();

         $search = request()->query('search');
         if ($search) {
            $exam_questions = Exam::where('title', 'LIKE', "%{$search}%")
                                    ->simplePaginate(10);
         }
         else {
            $exam_questions = Exam::where('department', Sentinel::getuser()->department)
                                    ->simplePaginate(10);
         }

         // search books in library

         $searchLibrary = request()->query('searchLibrary');
//Booksearch
         if ($searchLibrary) {
            $book_title = Library::where('title', 'LIKE', "%{$searchLibrary}%");
            $books = Library::where('description', 'LIKE', "%{$searchLibrary}%")
                                ->orWhere('author', 'LIKE', "%{$searchLibrary}%")
                                ->union($book_title)
                                ->simplePaginate(5);
         }
        else {

            $books = Library::all();
                                    

        }
        //sort questions by course title

        $userQuestions = request()->query('search');
        if ($userQuestions) {
            $user_questions = Blog::where('user_id', Sentinel::getUser()->id)->where('title', 'LIKE', "%{$userQuestions}%")
                            ->latest()
                            ->simplePaginate(5);
      
        }
        else {
            $user_questions = Blog::where('user_id', Sentinel::getUser()->id)->latest()->simplePaginate(5); //DB::table('blogs')->where('user_id', Sentinel::getUser()->id)->get();

        }


        
        //$categories = BlogCategory::all();
        //get all users with session-on
        //Session::updateCurrent();
        //$all = Session::activity(10)->get();
        //$registered = Session::registered()->get();



        //$blog_id = Blog::all()->user_id;
        //return view('user_account', compact('user', 'countries'));

        return view('users/profile', 
                compact('user', 
                'countries', 
                'blogcategory', 
                'user_questions', 
                'blogscategories', 
                'blogs',
                 'users',
                 'teachers', 
                'categories', 
                 'news', 
                 'school_mates', 
                 'exam_questions', 
                 'user_departments',
                 'numberOfUserQuestions',
                 'numberOfUserAnswers',
                 'numberOfUserRequest',
                 'course_title',
                 'institutions',
                 'userInstitutionQuestions',
                 'books',
                 'course_titles'
                ));
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
        return "profile";
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
