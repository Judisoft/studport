<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\User;
use Sentinel;

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
        // search funcionality

        $search = request()->query('search');
        if ($search) {
            $blogs = Blog::where('title', 'LIKE', "%{$search}%")
                                ->orWhere('content', "%{$search}%")
                                ->simplePaginate(10);
        }
        else {
            $blogs = Blog::latest()->simplePaginate(10);

        }
        //Gett users
        $user = Sentinel::getUser();
        // Grab all the blogs
        //$blogs = Blog::latest()->simplePaginate(5);
        $tags = $this->tags;
        // Grab all blog categories
        $blogscategories = BlogCategory::all();
        // popular questions
        $popular_questions = Blog::orderBy('views', 'desc')->get();
        //recent questions
        $recent_questions = Blog::latest()->get();
        // Show the page
        return view('blog', compact('blogs', 'tags', 'blogscategories', 'user', 'popular_questions', 'recent_questions'));
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
        if ($blog) {
            $blog->increment('views');
        } else {
            abort('404');
        }
        // Show the page
        return view('blogitem', compact('blog', 'user_email', 'blogscategories', 'user', 'tutors', 'institutions'));
    }

    /**
     * @param  $tag
     * @return \Illuminate\View\View
     */
    public function getBlogTag($tag)
    {
        $blogs = Blog::withAnyTags($tag)->simplePaginate(5);
        $tags = $this->tags;
        return view('blog', compact('blogs', 'tags'));
    }

    /**
     * @param  BlogCommentRequest $request
     * @param  Blog               $blog
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeComment(BlogCommentRequest $request, Blog $blog)
    {
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->picture = Sentinel::getUser()->pic;
        $blogcooment->save();
        return redirect('blogitem/' . $blog->slug);
    }
}
