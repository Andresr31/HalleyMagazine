<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreArticlePost;

use App\Article;
use App\Category;

class ArticleController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');

    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.articles.index',['articles'=>$articles]);
    }

    public function guest()
    {
        $articles = Article::orderBy('created_at','desc')->where('status','Publicado')->paginate(5);
        return view('dashboard.articles.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.articles.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->name = $request->name;
        $article->category_id = $request->category_id;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->author = $request->author;
        $article->review_date =  $request->review_date;

        $article->save();

        return back()->with('status','Articulo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $category = Category::findOrFail($article->category_id);
        return view('dashboard.article.show',['article'=>$article,'category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('dashboard.article.edit',['article'=>$article, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticlePost $request,Article $article)
    {
        $article->update($request->validated());
        return back()->with('status','Articulo modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return back()->with('status','Articulo eliminado con éxito');
    }
}
