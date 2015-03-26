<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index() 
	{
		
		$articles = Article::all();

		return view('articles.index')->with('articles', $articles);
		
	}

	public function show($id) 
	{

		$article = Article::findOrFail($id);
	
		return view('articles.show')->with('article', $article);
		
	}

}
