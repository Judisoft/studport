<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\News as NewsAlias;
use Sentinel;
use app\Model\LikeDisLike;

use App\Http\Requests\BlogCommentRequest;

class BlogController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Blog::allTags();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogCategoryId = BlogCategory::get('id');
        //$blog_id = Blog::pluck('id');
        //$comment_id = BlogComment::pluck('id');
        $reviews = BlogComment::all();
        //$reviews = BlogComment::pluck('remark');
        $arr_reviews = (array)$reviews;
        
        //return print_r($arr_reviews);

        $numberOfReviews = $reviews->count();
        //$numReviews = json_decode(json_encode($reviews), true);
        //return $reviews;
        // search questions by title and content 

        $search = request()->query('search');
        if ($search) {
            $blogsInst = Blog::where('institution', 'LIKE', "%{$search}%");
            $blogs = Blog::where('title', 'LIKE', "%{$search}%")
                                ->orWhere('content', 'LIKE', "%{$search}%")
                                ->union($blogsInst)
                                ->latest()
                                ->simplePaginate(5);
        $numberOfItems = count($blogs);
      
        }
        else {
            $blogs = Blog::latest()->simplePaginate(5);
            $numberOfItems = count($blogs);

        }

        //Gett autheticated user
        $user = Sentinel::getUser();
        //grab all institutions of users
        $user_institutions = User::select('institution')->distinct()->get();
        // Grab all the blogs
        //$blogs = Blog::latest()->simplePaginate(5);
        $tags = $this->tags;
        // Grab all blog categories
        $blogscategories = BlogCategory::all();
        // popular questions
        $popular_questions = Blog::orderBy('views', 'desc')->get();
        //recent questions
        $recent_questions = Blog::latest()->get();
        // teachers
        $teachers = User::where('user_role', 'tutor')->get();
        //jobs
        $jobs = NewsAlias::orderBy('id', 'DESC')->get();
        // Show the page
        return view('blog', compact('blogs', 'numberOfItems', 'tags', 'blogscategories', 'user', 'popular_questions', 'recent_questions', 'teachers', 'jobs', 'user_institutions', 'reviews', 'numberOfReviews', 'arr_reviews'));
    }

    /**
     * @param  string $slug
     * @return \Illuminate\View\View
     */
    public function getBlog($slug = '')
    {

        $blog = Blog::where('slug', $slug)->first();
        $user_email = User::get('email');
        $user = Sentinel::getUser();
        $tutors = User::where('user_role', 'tutor')->get();
        $institutions = User::get('institution');
        $blogscategories = BlogCategory::all();
        $related_questions = Blog::where('blog_category_id', $blog->blog_category_id)->latest()->simplePaginate(10);
        //$related_questions = Blog::select('title')->where('', $slug)
        if ($blog) {
            $blog->increment('views');
        } else {
            abort('404');
        }
        // Show the page
        return view('blogitem', compact('blog', 'user_email', 'blogscategories', 'user', 'tutors', 'institutions', 'related_questions'));
    }

    /**
     * @param  $tag
     * @return \Illuminate\View\View
     */
    public function getBlogTag($tag)
    {
        $blogs = Blog::withAnyTags($tag);//->simplePaginate(5);
        $tags = $this->tags;
        return view('blog', compact('blogs', 'tags'));
    }

    /**
     * @param  BlogCommentRequest $request
     * @param  Blog               $blog
     * @param blog_id $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeComment(BlogCommentRequest $request, Blog $blog)
    {   
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->picture = Sentinel::getUser()->pic;
        $blogcooment->save();
        return redirect('blogitem/' . $blog->slug)->with('success', 'Answer published');

    }
    /**
     * @param BlogComment $blogcomment
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function review(Request $request, Blogcomment $comment)
    {
        $this -> validate($request, [
            'remark' => 'required',
            'explanation' => 'required'
    ]);
        $commentToReview = BlogComment::where('id', $comment->id)->first();
        $commentToReview->remark = $request->input('remark');
        $commentToReview->explanation = $request->input('explanation');
        $commentToReview->reviewed_by = Sentinel::getUser()->first_name . ' '. Sentinel::getUser()->last_name;
        $commentToReview->save();
       
        return back()->with('success', 'Review published');

    }

}
