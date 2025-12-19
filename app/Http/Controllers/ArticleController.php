<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();
        //$data = Article::find(5);
        //$data= Article::where('category_id', 1)->get();
        //$data= Article::where('title', 'sample-title')->first();
        //$data= Article::orderBy('id', 'desc')->get();
        //$data= Article::orderBy('id', 'asc')->get();
        //$data= Article::pluck('title');
        // $data= Article::create([
        //     'title' => 'New Article',
        //     'body' => 'This is content',
        //     'category_id' => '6'
        // ]);
        // $article = Article::find(1);
        // $article->update(['title' => 'Updated']);
        // dd($article);
        //$data= Article::find(1)->delete();
        return view('articles.index', [
            'articles' => $data
        ]);
    }
    public function detail($id)
    {
        return "Controller - Article Detail - $id";
    }
}
