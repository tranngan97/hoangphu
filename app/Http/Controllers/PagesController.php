<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', '/')->where('active', 1)->first();
        return view('page')->with('page', $page);
    }

    public function getPage($slug = null)
    {
        if ($slug == NULL) {
            $slug = 'home-page';
        }
        $page = Page::where('slug', $slug)->where('status', 'active');
        $page = $page->firstOrFail();
        // return view($page->template)->with('page', $page);
        return view('page')->with('page', $page);
    }
}