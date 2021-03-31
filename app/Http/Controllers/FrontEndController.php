<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Mail;
use Reminder;
use Validator;
use Sentinel;
use URL;
use View;
use stdClass;
//use App\Mail\Contact;
use App\Mail\ContactUser;
use App\Mail\ForgotPassword;
use App\Models\BlogCategory;
use App\Models\Country;
use Webpatser\Uuid\Uuid;
use App\Models\Exam;
use App\Models\Book;
use App\Models\Newsletter;
use App\Models\Contact;

class FrontEndController extends JoshController
{
    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Blog::allTags();
    }
    /*
     * $user_activation set to false makes the user activation via user registered email
     * and set to true makes user activated while creation
     */
    private $user_activation = false;

    /**
     * Account sign in.
     *
     * @return View
     */
    public function getLogin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }
        // Show the login page
        return view('login');
    }

    /**
     * Account sign in form processing.
     *
     * @return Redirect
     */
    public function postLogin(Request $request)
    {

        try {
            // Try to log the user in
            if ($user =  Sentinel::authenticate($request->only('email', 'password'), $request->get('remember-me', 0))) {
                //Activity log for login
                activity($user->full_name)
                    ->performedOn($user)
                    ->causedBy($user)
                    ->log('LoggedIn');

                return Redirect::route("my-account")->with('success', trans('auth/message.login.success'));
            } else {
                return redirect('login')->with('error', 'Email or password is incorrect.');
            }
        } catch (UserNotFoundException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_found'));
        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (UserSuspendedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_suspended'));
        } catch (UserBannedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_banned'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * get user details and display
     *  @param  int  $id
     */
    public function myAccount($slug = '')
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
        $user_questions = Blog::where('user_id', Sentinel::getUser()->id)->latest()->simplePaginate(5); //DB::table('blogs')->where('user_id', Sentinel::getUser()->id)->get();
        $school_mates = User::where('institution', Sentinel::getUser()->institution)->get();
        $blogscategories = BlogCategory::all();
       // $user_categories = Blog::where('blog_category_id', Sentinel::getUser()->id)->get();
        $tags = $this->tags;
        $news = NewsAlias::orderBy('id', 'DESC')->get();
        // Get distinct departments
        $user_departments =  User::select('department')->whereNotNull('department')->distinct()->orderBy('department')->get();
         // search funcionality
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
        
        

         $search = request()->query('search');
         if ($search) {
            $exam_questions = Exam::where('title', 'LIKE', "%{$search}%")
                                    ->simplePaginate(10);
         }
         else {
            $exam_questions = Exam::where('department', Sentinel::getuser()->department)
                                    ->simplePaginate(10);
         }
        
        //$categories = BlogCategory::all();
        //get all users with session-on
        //Session::updateCurrent();
        //$all = Session::activity(10)->get();
        //$registered = Session::registered()->get();



        //$blog_id = Blog::all()->user_id;
        //return view('user_account', compact('user', 'countries'));

        return view('user_dashboard', 
                compact('user', 
                'countries', 
                'blogcategory', 
                'user_questions', 
                'blogscategories', 
                'blogs',
                 'users',
                 'teachers', 
                'categories', 
                'tags',
                 'news', 
                 'school_mates', 
                 'exam_questions', 
                 'user_departments',
                 'numberOfUserQuestions',
                 'numberOfUserAnswers',
                 'numberOfUserRequest',
                 'course_title',
                 'institutions',
                 'userInstitutionQuestions'
                ));
    }


    /**
     * update user details and display
     *
     * @param  Request $request
     * @param  User    $user
     * @return Return Redirect
     */
    public function update(FrontendRequest $request)
    {
        $user = Sentinel::getUser();
        //update values
        $user->update($request->except('password', 'pic', 'password_confirm'));

        if ($password = $request->get('password')) {
            $user->password = Hash::make($password);
        }
        // is new image uploaded?
        if ($file = $request->file('pic')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->pic)) {
                File::delete(public_path() . $folderName . $user->pic);
            }
            //save new file path into db
            $user->pic =url('/').'/uploads/users/'.$safeName;
        }

        // Was the user updated?
        if ($user->save()) {
            // Prepare the success message
            $success = trans('users/message.success.update');
            //Activity log for update account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('User Updated successfully');
            // Redirect to the user page
            return Redirect::route('my-account')->with('success', $success);
        }

        // Prepare the error message
        $error = trans('users/message.error.update');


        // Redirect to the user page
        return Redirect::route('my-account')->withInput()->with('error', $error);
    }

    /**
     * Account Register.
     *
     * @return View
     */
    public function getRegister()
    {
        // Show the page
        return view('register');
    }

    /**
     * Account sign up form processing.
     *
     * @return Redirect
     */
    public function postRegister(UserRequest $request)
    {

        $activate = $this->user_activation; //make it false if you don't want to activate user automatically it is declared above as global variable
        try {
            // Register the user
            $user = Sentinel::register($request->only(['first_name', 'last_name', 'institution', 'department', 'level', 'email', 'password', 'gender']), $activate);
            //add user to 'User' role
            $role = Sentinel::findRoleByName('User');
            $role->users()->attach($user);
            //if you set $activate=false above then user will receive an activation mail
            if (!$activate) {
                // Data to be used on the email view

                $data=[
                    'user_name' => $user->first_name .' '. $user->last_name,
                    'activationUrl' => URL::route('activate', [$user->id, Activation::create($user)->code]),
                ];
                // Send the activation code through email
                Mail::to($user->email)
                    ->send(new Register($data));
                //Redirect to login page
                return redirect('login')->with('success', trans('auth/message.signup.success'));
            }
            // login user automatically
            Sentinel::login($user, true);
            //Activity log for new account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('New Account created');
            // Redirect to the home page with success menu
            return Redirect::route("my-account")->with('success', trans('auth/message.signup.success'));
        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * User account activation page.
     *
     * @param number $userId
     * @param string $activationCode
     */
    public function getActivate($userId, $activationCode)
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }

        $user = Sentinel::findById($userId);

        if (Activation::complete($user, $activationCode)) {
            // Activation was successfull
            return Redirect::route('login')->with('success', trans('auth/message.activate.success'));
        } else {
            // Activation not found or not completed.
            $error = trans('auth/message.activate.error');
            return Redirect::route('login')->with('error', $error);
        }
    }

    /**
     * Forgot password page.
     *
     * @return View
     */
    public function getForgotPassword()
    {
        // Show the page
        return view('forgotpwd');
    }

    /**
     * Forgot password form processing page.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function postForgotPassword(Request $request)
    {
        $data = new stdClass();
        try {
            // Get the user password recovery code
            $user = Sentinel::findByCredentials(['email' => $request->email]);
            if (!$user) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_email_not_found'));
            }

            $activation = Activation::completed($user);
            if (!$activation) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_activated'));
            }

            $reminder = Reminder::create($user);
            // Data to be used on the email view
            $data->user_name = $user->first_name .' ' .$user->last_name;
            $data->forgotPasswordUrl = URL::route('forgot-password-confirm', [$user->id, $reminder->code]);
            // Send the activation code through email
            Mail::to($user->email)
                ->send(new ForgotPassword($data));
        } catch (UserNotFoundException $e) {
            // Even though the email was not found, we will pretend
            // we have sent the password reset code through email,
            // this is a security measure against hackers.
        }

        //  Redirect to the forgot password
        return back()->with('success', trans('auth/message.forgot-password.success'));
    }

    /**
     * Forgot Password Confirmation page.
     *
     * @param  string $passwordResetCode
     * @return View
     */
    public function getForgotPasswordConfirm(Request $request, $userId, $passwordResetCode = null)
    {
        if (!$user = Sentinel::findById($userId)) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_found'));
        }

        if ( $reminder = Reminder::get($user, $passwordResetCode) && Reminder::exists($user)) {
                return view('forgotpwd-confirm', compact(['userId', 'passwordResetCode']));
        } else {
            return 'does not exists';
        }
    }

    /**
     * Forgot Password Confirmation form processing page.
     *
     * @param  string $passwordResetCode
     * @return Redirect
     */
    public function postForgotPasswordConfirm(PasswordResetRequest $request, $userId, $passwordResetCode = null)
    {

        $user = Sentinel::findById($userId);
        if (!$reminder = Reminder::complete($user, $passwordResetCode, $request->get('password'))) {
            // Ooops.. something went wrong
            return Redirect::route('login')->with('error', trans('auth/message.forgot-password-confirm.error'));
        }

        // Password successfully reseted
        return Redirect::route('login')->with('success', trans('auth/message.forgot-password-confirm.success'));
    }

    public function showFrontEndView($name = null)
    {
        if (View::exists($name)) {
            return view($name);
        } else {
            abort('404');
        }
    }


    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        if (Sentinel::check()) {
            //Activity log
            $user = Sentinel::getuser();
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('LoggedOut');
            // Log the user out
            Sentinel::logout();
        }
        // Redirect to the users page
        return redirect('login')->with('success', 'You have successfully logged out!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function question(BlogRequest $request)
    {

        $blog = new Blog($request->except('files', 'image', 'tags'));
        $message=$request->get('content');
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                $filepath = "uploads/blog/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    // resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-
        $blog->content = $dom->saveHTML();

        $picture = "";

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension()?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . '/uploads/blog/';
            $file->move($destinationPath, $picture);
            $blog->image = $picture;
            //$blog->doc_size = $request->file('image')->getClientSize();
        }
        $blog->user_id = Sentinel::getUser()->id;
        $blog->save();

        $blog->tag($request->tags?$request->tags:'');
        if ($blog->id) {
            return Redirect::route("my-account")->with('success', trans('Question Post Success'));
            //return redirect('user_dashboard')->with('success', trans('admin/blog/message.success.create'));
        } else {
            return Redirect::route('my-account')->with('error', trans('Question Post Fail'));
        }
    }

    public function download($uuid)
    {
        $exam = Exam::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/exams/' . $exam->cover);
        return response()->download($pathToFile);
    }

    public function about()
    {
        $news = News::all();
        $number_of_jobs =count($news);
        $teachers = User::where('user_role', 'tutor')->get();
        $number_of_teachers = count($teachers);
        $experience = date('Y') - 2020;
        $students = User::where('user_role', 'student')->get();
        $number_of_students = count($students);
        return view('about_us', compact('news', 'number_of_teachers', 'number_of_students', 'number_of_jobs', 'experience'));
    }

    public function services() {
        $news = News::all();
        $number_of_jobs =count($news);
        $teachers = User::where('user_role', 'tutor')->get();
        $number_of_teachers = count($teachers);
        return view('services', compact('news', 'number_of_teachers', 'number_of_jobs'));
    }
    public function tutor() {
        $blogs = Blog::all();

        $search = request()->query('search');
        if ($search) {
            $blogs = Blog::where('title', 'LIKE', "%{$search}%")
                                ->orWhere('content', "%{$search}%")
                                ->simplePaginate(10);
        }
        else {
            $blogs = Blog::latest()->simplePaginate(10);

        }

        return view('tutor', compact('blogs'));
    }

    public function institutions() {
        
        //$users = User::all();

        return view('institutions');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newsletter(Request $request)
    {
        $this -> validate($request,[
            'email' => 'required'
        ]);

        $newsletter = new Newsletter;
        $newsletter->email = $request->input('email');
        $newsletter->save();
        if ($newsletter->id) {
            return Redirect::route("home")->with('success', trans('Thank you for subscribing to our newsletter'));
            //return redirect('user_dashboard')->with('success', trans('admin/blog/message.success.create'));
        } else {
            return Redirect::route("home")->with('error', trans('Oups! an error occured'));
        }

    }

}
