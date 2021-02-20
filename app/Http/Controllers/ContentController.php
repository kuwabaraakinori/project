<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
use App\Http\Requests\ContentRequest;
//use Illuminate\Auth\Events\Validated;

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

    



    public function store(ContentRequest $request)
    {
        if($request->validated()){
            $content = new Content;

            $content->title = $request->title;
            $content->span = $request->span;
            $content->content = $request->content;
            $content->store();
            /*dd($content);*/
        }

        return redirect('/');
    }

    


    public function show($id)
    {
        $content = Content::findOrFail($id);

        return view('contents.show' , [
            'contents' => $content
        ]);

    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    


    public function destroy($id)
    {
        //
    }
}
