<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleFormRequest;

class PageController extends Controller
{
    /** index **/
    public function index(){
    	$articles=Article::all();
    	return view("index",compact('articles'));
    }

    /** show articles */

    public function show_articles($id){
    	$articles=Article::find($id);
    	return view('single')->with('articles',$articles);
    }

    /** form-create */
    public function form_create(){
    	return view('article.create');
    }
    /** create ariticle */
    public function create(Request $request,ArticleFormRequest $arequest){

    	$all=$request->all();
    	$title=$all["title"];
    	$content=$all["content"];
    	$data=array([
    		'title'=>$title,'content'=>$content
    	]);
    	$insert=new Article();
    	$insert->insert($data);
    	return redirect()->route('articles.index');

    }



    /**update**/
    public function edit($id){

        $articles=Article::find($id);
        return view('article.edit',compact('articles'));
    }

    public function update($id,ArticleFormRequest $request){
        $article=Article::find($id);
         $article->update([
          'title'=>$request->get('title'),'content'=>$request->get('content')
        ]);
       
       return redirect()->route('articles.index');
    }

    public function destroy($id){
        $articles=Article::find($id);
        $articles->delete();
        return redirect()->route('articles.index');
    }

    /** login */

    public function login(){
        return view('login');
    }
}
