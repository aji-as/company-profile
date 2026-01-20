<?php

namespace App\Http\Controllers\Home;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {

        $articels = Blogs::latest()->limit(6)->get();
        return view('home.blog', compact('articels'));
    }

    public function show(Blogs $blog)
    {
        $relatedArticels = Blogs::where('id', '!=', $blog->id)->latest()->limit(3)->get();
        return view('home.blog_show', compact('blog', 'relatedArticels'));
    }
}
