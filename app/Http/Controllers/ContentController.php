<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
use Illuminate\Auth\Events\Validated;

class ContentController extends Controller
{
    
    public function index()
    {
        //$contents = new Content;
        $contents=Content::all();

        return view('contents.content' , [
            'contents'=>$contents,
        ]);
    }



    public function create()
    {
        return view('contents.create');
    }

    



    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required',
            'span' => 'required',
            'content' => 'required|max:225'
        ]);

        $content = new Content;
        $content->title = $request->title;
        $content->span = $request->span;
        $content->content = $request->content;
        $content->store();
        
        return redirect('/');
    }

    


    public function show($id)
    {
        //
    }

    



    public function edit($id)
    {
        //
    }

    



    public function update(Request $request, $id)
    {
        //
    }

    


    public function destroy($id)
    {
        //
    }
}
