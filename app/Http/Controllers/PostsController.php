<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Redirect;

class PostsController extends Controller
{

	public function show() {
		$posts = Post::all();
		return view("list", compact("posts"));
	}

	public function deleteById($id) {
		Post::findOrFail($id)->delete();
		return Redirect::back();
	}


	public function create() {
		return view("create");
	}


	public function createPostRecord(Request $request) {
		$post = new Post();
		$post->title = $request->get("news_title");
		$post->text = $request->get("news_text");
		$post->save();
		return Redirect::back()->with("message", "სიახლე წარმატებით დაემატა");
	}


	public function update($id) {
		$post = Post::find($id);
		// dd($post);
		return view("update", compact("post"));
	}


	public function updateRecord(Request $request) {
		$post = Post::find($request->get("id"));
		$post->title = $request->get("news_title");
		$post->text = $request->get("news_text");
		$post->save();
		return Redirect::back()->with("message", "სიახლე წარმატებით დააბდეითდა");
	}

}
