<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use \App\Http\Requests\StorePostRequest;
use \App\Http\Requests\UpdatePostRequest;
use \App\Http\Requests\DeleteRequest;

class PostController extends Controller
{
    //

    public function index(){

        $posts = Post::All();
        return view('frontend.index',['posts'=>$posts]);

    }

    public function create(){

        return view('backend.posts.create');

    }

    public function store(StorePostRequest $request){

        $imageName = $request->image->getClientOriginalName();      
    

        $newPost = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
            'user_id' =>  \Auth::user()->id
        ]);

        $request->image->move(public_path("images/post_images/$newPost->id"),$imageName);

        return redirect()->route('posts.list')->with('message','Post Added Successfully!');
    }

    public function edit(Post $post){

        return view('backend.posts.edit', [
            'post' => $post,
        ]);

    }

    public function getPost($id){

        $post  = Post::where('id',$id)
                ->get();

        return view('frontend/detail',['post'=>$post]);

    }

    public function update(UpdatePostRequest $request,Post $post){
        
        $imageName = $request->image->getClientOriginalName();      

        $post->update(
            [
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imageName,
            ]
        );

        $request->image->move(public_path("images/post_images/$post->id"),$imageName);
        return redirect()->route('posts.list')->with('message','Post Updated Successfully!');
    }

    public function delete(DeleteRequest $request){
        
        $post = Post::find($request->id);

        $post->delete();
        
        $posts = Post::All();
        return redirect()->route('posts.list')->with('message','Post Deleted Successfully!');

    }

    public function list(){

        $posts = Post::All();

        return view('backend.posts.list',['posts'=>$posts]);
        
    }
}
