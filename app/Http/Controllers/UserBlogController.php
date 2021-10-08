<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JoshController;
use \Illuminate\Support\Facades\Redirect;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\User;
use App\Http\Requests\BlogCommentRequest;
use App\Models\News as NewsAlias;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Storage;
use Response;
use Sentinel;
use Intervention\Image\Facades\Image;
use DOMDocument;
use App\Http\Controllers\File;


class UserBlogController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Blog::allTags();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        //Grab all blogs and paginate
        $blogs = Blog::latest()->paginate(10);
        // Grab user session
        $user = Sentinel::getUser();
        // Grab all users
        $users = User::all();
        // Blog categories
        $blogcategory = BlogCategory::pluck('title', 'id');
        $categories = BlogCategory::all();
        // get news, news is use here to refer to jobs
        $news = NewsAlias::orderBy('id', 'DESC')->get();
        // Show the page
        return view('user_dashboard', compact('blogs', 'user', 'users', 'blogcategory', 'categories', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\RedirectResponse
     * @return Response
     */
    public function create()
    {
        //$blogcategory = BlogCategory::pluck('title', 'id');
        return Redirect::route('my-account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BlogRequest $request)
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
            //$blog->doc_size = $request->file('image')->getSize();
        }
        $blog->user_id = Sentinel::getUser()->id;
        $blog->institution = Sentinel::getUser()->institution;
        $blog->save();

        $blog->tag($request->tags?$request->tags:'');

        if ($blog->id) {
            return Redirect::route('my-account')->with('success', trans('Question Posted successfully'));
        } else {
            return Redirect::route('my-account')->withInput()->with('error', trans('Question post failed'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  Blog $blog
     * @param $tag
     * @return view
     */
    public function show(Blog $blog, $tag)
    {
        $comments = Blog::find($blog->id);//->comments;
        $blogs = Blog::withAnyTags($tag);//->simplePaginate(5);
        $tags = $this->tags;

        return view('user_dashboard', compact('blog', 'comments', 'tags'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  $my_questions
     * @return view
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blogcategory = BlogCategory::pluck('title', 'id');
        if(Sentinel::getUser()->id !== $blog->user_id)
        {

        return redirect('user_dashboard')->with('error', 'You are not auhorised to Edit this Question');
        }

        return view('questions.edit', compact('blog', 'blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::Find($id);
        $message=$request->get('content');
        libxml_use_internal_errors(true);
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
                info($filename);
                $filepath = "uploads/blog/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
            } else {
                $new_src=$src;
            }
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
        } // <!-
        $blog->content = $dom->saveHTML();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension()?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . '/uploads/blog';
            $file->move($destinationPath, $picture);
            $blog->image = $picture;
        }
        $blog->user_id = Sentinel::getUser()->id;
        $blog->institution = Sentinel::getUser()->institution;
        $blog->title = $request->input('title');
        $blog->save();
        $blog->tag($request->tags?$request->tags:'');

            return Redirect::route('my-account')->with('success', 'Question updated successfully');

    }


    /**
     * Remove blog.
     *
     * @param  Blog $blog
     * @return Response
     */
    public function getModalDelete(Blog $blog)
    {
        $model = 'blog';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('questions.delete', ['id' => $blog->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('blog/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $blog = Blog::Find($id);
        //Check for correct user 
        
        $blog = Blog::find($id);
        if(Sentinel::getUser()->id !== $blog->user_id)
        {

        return redirect('user_dashboard')->with('error', 'You are not auhorised to delete this Question');
        }
        Storage::delete('/storage/app/public/uploads/'.$blog->image);

        $blog->delete();
        
        if ($blog->delete()) {
            return redirect('my-account')->with('success', 'Question deleted successfully');
        } else {
            return Redirect::route('my-account')->withInput()->with('error', 'There was a problem deleting this question');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogCommentRequest $request
     * @param Blog               $blog
     *
     * @return Response
     */
    public function storeComment(BlogCommentRequest $request, Blog $blog)
    {
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->save();
        return redirect('user_dashboard' . $blog->id);
    }
}
