<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public  function getSingle ($slug) {
        // nepoužijeme get() bo ten vrací kolekci výsledků, my hledáme pomocí unique věci, takže vrati jen jednu
        $post = Post::where('slug', '=', $slug)->first();

        return view('blog.single')->withPost($post);
    }
}
