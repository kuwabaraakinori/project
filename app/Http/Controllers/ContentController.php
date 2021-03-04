<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Content;
use App\Http\Requests\ContentRequest;
//use Illuminate\Auth\Events\Validated;

class ContentController extends Controller
{
    
    public function index()
    {
        $contents = Content::all();
        
        $contents->loadRelationshipCounts();
        
        return view("welcome" , [
            "contents" => $contents
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
            $content->user_id = $request->user_id;
            $content->title = $request->title;
            $content->span = $request->span;
            $content->content = $request->content;

            /*dd($content);*/
            $content->save();
            
        }

        return redirect('/');
    }

    


    public function show($id)
    {
        $contents = Content::findOrFail($id);

        return view('contents.show' , [
            'contents' => $contents
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
        if(Auth::check()){

        };
    }
}
