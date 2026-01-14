<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

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
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
        {
            // Validate form data
            $validated = $request->validate([
                'title' => 'required|min:3',
                'body' => 'required|min:10',
                'category_id' => 'required|integer',
            ]);

            // Save to database
            Article::create($validated);

            // Redirect back to create page
            return redirect('/articles/create')->with('success', 'Article created successfully!');
        }
    public function detail($id)
    {
        return "Controller - Article Detail - $id";
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
  
        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);
  
        return redirect('/articles');
    }
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/articles');
    }
}
