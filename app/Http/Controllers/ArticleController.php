<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticleController extends Controller
{
	private const ARTICLE_INTRO_LENGTH = 500;

    public function index () {
    	$articles = Article::all();

    	return view('index', compact('articles'));
    }

    public function article ($id) {
    	$article = Article::find($id);

    	return view('article', compact('article'));
    }

    public function createArticle (Request $request) {
    	$article = new Article();
    	$article->title = $request->title;
    	$article->intro_text = substr($request->full_text, 0, self::ARTICLE_INTRO_LENGTH);
    	$article->full_text = htmlspecialchars($request->full_text);

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $image_path);

    	   $article->image_path = url('/images/'.$image_path);
        } else {
            $article->image_path = url('/images/no_image.png');
        }

    	$article->save();

    	return view('admin', ['created' => true]);
    }
}
