<?php

namespace App\Http\Controllers;

use App\Models\artiCles;
use Illuminate\Http\Request;

class articlesController extends Controller
{
    public function index()
    {
    	return view('home')->with('articles', artiCles::latest()->get()->take(6));
    }

    public function articles()
    {
    	return view('articles')->with('articles', artiCles::latest()->paginate(6));
    }

    public function category($Category)
    {
        return view('category')->with('category', $Category)->with('articles', artiCles::where('Category', $Category)->latest()->paginate(6));
    }

    public function article($id)
    {
    	return view('article')->with('article', artiCles::find($id))->with('articles', artiCles::inRandomOrder()->limit(3)->get());
    }

    public function create()
    {
        return view('addArticle');
    }

    public function store(Request $req)
    {
        
        $data = $req->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Category' => 'required',
            'img' => 'required',
            'user_id' => 'required'
        ]);


        $data['img'] = $req->file('img')->store('articles', 'public');

        artiCles::create($data);

        return redirect('/articles')->with('message', 'Article was added sucessfully');
    }

    public function edit($id)
    {
        return view('edit')->with('article', artiCles::find($id));
    }

    public function update(Request $req, $id)
    {
        $data = $req->validate([
            'Title' => 'required',
            'Description' => 'required'
        ]);

        artiCles::find($id)->update($data);

        return redirect('/articles')->with('message', 'Article was updated sucessfully');
    }

    public function delete($id)
    {
        artiCles::find($id)->delete();

        return redirect('/articles')->with('message', 'Article was deleted');
    }
}
