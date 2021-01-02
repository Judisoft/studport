<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
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
        //Gett users
        $user = Sentinel::getUser();
        // Grab all the blogs
        $blogs = Blog::latest()->paginate(10);
        $tags = $this->tags;
        // Grab all blog categories
        $blogscategories = BlogCategory::all();
        // Show the page
        return view('blog', compact('blogs', 'tags', 'blogscategories'));
    }

    /**
     * @param  string $slug
     * @return \Illuminate\View\View
     */
    public function getBlog($slug = '')
    {

        $blog = Blog::where('slug', $slug)->first();
        $blogscategories = BlogCategory::all();
        if ($blog) {
            $blog->increment('views');
        } else {
            abort('404');
        }
        // Show the page
        return view('blogitem', compact('blog', 'blogscategories'));
    }

    /**
     * @param  $tag
     * @return \Illuminate\View\View
     */
    public function getBlogTag($tag)
    {
        $blogs = Blog::withAnyTags($tag)->paginate(10);
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
        $blogcooment->save();
        return redirect('blogitem/' . $blog->slug);
    }
}
