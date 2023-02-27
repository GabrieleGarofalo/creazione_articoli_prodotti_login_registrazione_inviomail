<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article/create');
    }

    public function store(ArticleRequest $request){
        // dd($request->all());
        $articles=Article::create(

            [
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'body' => $request->input('body'),
                'img'=> $request->has('img') ? $request->file('img')->store('public') : '/img/default.png',
                ]
            );

            return redirect()->route('homepage')->with('message','il tuo articolo è stato pubblicato correttamente');
        }


        public function getArticleByAuthor($author){

            $articles=Article::where('author', $author)->get();
            return view('article.author',compact('articles'));

        }
        public function edit(Article $article){
            //dd($article->all());
            return view('article/update',compact('article'));
        }

        public function update(Request $request, Article $article){
            $article->update([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'body' => $request->input('body'),
                'img'=> $request->has('img') ? $request->file('img')->store('public') : '/img/default.png',
            ]);

            return redirect()->route('homepage',compact('article'));
        }
        public function destroy(Article $article){
            $article->delete();
          return redirect(route('homepage'));
        }
    }
