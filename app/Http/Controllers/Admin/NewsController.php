<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Newsrequest;
use App\Models\News;
use DOMDocument;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::all();
        // Show the page
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        libxml_use_internal_errors(true);
        $news = new News($request->except('files', 'image'));
        $message = $request->get('content');
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');


        $news->content = $dom->saveHTML();

        $news->save();


        if ($news->id) {
            return redirect('admin/news')->with('success', trans('news/message.success.create'));
        } else {
            return Redirect::route('admin/news')->withInput()->with('error', trans('news/message.error.create'));
        }
    }

    //Show
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    //Edit
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    //Update
    public function update(NewsRequest $request, News $news)
    {
        $message = $request->get('content');
        libxml_use_internal_errors(true);
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $news->content = $dom->saveHTML();

        if ($news->update($request->except('content', 'image', 'files', '_method'))) {
            return redirect('admin/news')->with('success', trans('news/message.success.update'));
        } else {
            return Redirect::route('admin/news')->withInput()->with('error', trans('news/message.error.update'));
        }
    }


    public function getModalDelete(News $news)
    {
        $model = 'news';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('admin.news.delete', ['id' => $news->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('news/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function destroy(News $news)
    {
        if ($news->delete()) {
            return redirect('admin/news')->with('success', trans('news/message.success.delete'));
        } else {
            return Redirect::route('admin/news')->withInput()->with('error', trans('news/message.error.delete'));
        }
    }

    //Table Data to index page
    public function data()
    {
        $news = News::get(['id', 'title', 'created_at']);

        return DataTables::of($news)
            ->editColumn(
                'created_at',
                function (News $createtime) {
                    return $createtime->created_at->diffForHumans();
                }
            )
            ->addColumn(
                'actions',
                function ($news) {
                    $actions = '<a href=' . route('admin.news.show', $news->id) . '><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view News"></i></a>
                            <a href=' . route('admin.news.edit', $news->id) . '><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update News"></i></a>';
                    $actions .= '<a href=' . route('admin.news.confirm-delete', $news->id) . ' data-toggle="modal" data-target="#delete_confirm" data-id="'.$news->id.'"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete News" ></i></a>';

                    return $actions;
                }
            )
            ->rawColumns(['actions'])
            ->make(true);
    }
}
