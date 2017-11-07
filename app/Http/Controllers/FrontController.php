<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
  public function index(){
    $posts = Post::with('category')->limit(6)->get();
    return view('front.home')->with('posts', $posts);
  }

  public function aboutus(){
    return view('front.aboutus');
  }

  public function blog(){
    $posts = Post::with('category')->paginate(10);
    return view('front.blog')->with('posts', $posts);
  }

  public function contactus(){
    return view('front.contactus');
  }

  public function contactus_post(Request $request){
      $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'message' => 'required'
    ]);
    $request->flash();
    return redirect('contacto')->withInput();
  }

  public function postshow($category, $slug){
    $post = Post::where('slug', $slug)->first();
    return view('front.postshow')->with('post', $post);
  }


}
