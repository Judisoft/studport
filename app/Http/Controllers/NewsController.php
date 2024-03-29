<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $jobs = News::latest()->simplePaginate(50);
        return view(
            'news',
            compact('jobs')
        );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showtheme()
    {

        $business = News::where('category', 'buziness')->orderBy('id', 'desc')->take(3)->get();
        $sports = News::where('category', 'sports')->orderBy('id', 'desc')->take(3)->get();

        $popular = News::where('category', 'popular')->orderBy('id', 'desc')->take(3)->get();
        $hotnews = News::where('category', 'hotnews')->orderBy('id', 'desc')->take(3)->get();
        $lifestyle = News::where('category', 'lifestyle')->orderBy('id', 'desc')->take(6)->get();
        $world_carousel = News::where('category', 'world')->orderBy('id', 'desc')->take(8)->get();
        $world_news = News::where('category', 'world')->orderBy('id', 'desc')->take(4)->get();

        return view(
            'news_theme',
            compact('business', 'popular', 'hotnews', 'lifestyle', 'world_carousel', 'world_news', 'sports')
        );
    }

    //Show
    public function show(News $news)
    {

        $related_jobs = News::where('category', $news->category)->latest()->simplePaginate(20);
        $recentnews = News::orderBy('id', 'desc')->take(5)->get();
        return view('news_item', compact('news', 'related_jobs'));
    }
}
