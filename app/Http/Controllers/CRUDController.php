<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CRUDController extends Controller
{
    public function index(){
        return view("crud",[
            "posts"=>Post::latest()->get()
        ]);

    }  
    public function post(Request $req)
    {
        $this->validate($req, [
            'title' => 'required|string|max:155',
            'content' => 'required',
            'status' => 'required'
        ]);

        $post = Post::create([
            'title' => $req->title,
            'content' => $req->content,
            'status' => $req->status,
            'slug' => Str::slug($req->title)
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    public function create(){
        return view("createnewpost");
        
    }
    public function destroy(Request $req,$id){
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
    public function edit($id){
        $post= Post::findOrFail($id);
        return view ("edit",compact("post"));
    }
    public function update(Request $req, $id){
        $this->validate($req, [
            'title' => 'required|string|max:155',
            'content' => 'required',
            'status' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $req->title,
            'content' => $req->content,
            'status' => $req->status,
            'slug' => Str::slug($req->title)
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
}

