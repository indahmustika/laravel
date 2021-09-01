<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;
use App\Auth;

class ArticleController extends Controller
{
    public function index(){
    	$data = Article::where('status','1')->orderBy('updated_at','desc')->get();
    	return view('index',compact('data'));
    }
    public function select($id){
        $data = Article::find($id);
        return view('select',compact('data'));
    }  
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $username = $request->get('username');
        $password = $request->get('password');
        if (Auth::where([
            ['username', '=', $username],
            ['password', '=', $password],
        ])->first()){
            $request->session()->put('username', $username);
            return redirect('read');
        }else{
            return redirect('login');
        }
    }
    public function logout(Request $request){
        $request->session()->forget('username');
        return redirect('login');
    }
    public function read(Request $request){
        if($request->session()->has('username')){
            $data = Article::all();
            return view('read',compact('data'));
        }else{
            return redirect('login');
        }
    }
    public function add(Request $request){
        if($request->session()->has('username')){
            return view('add');
        }else{
            return redirect('login');
        }
    }
    public function insert(Request $request){
    	if($request->session()->has('username')){
            $data = new Article();
            $data->thumbnail    = $request->get('thumbnail');
            $data->title        = $request->get('title');
            $data->excerpt      = $request->get('excerpt');
            $data->content      = $request->get('content');
            $data->status       = $request->get('status');
            $data->author       = $request->session()->get('username');
            $data->save();
            return redirect('read');
        }else{
            return redirect('login');
        }
    }
    public function edit(Request $request, $id){
    	if($request->session()->has('username')){
            $data = Article::find($id);
            return view('edit',compact('data'));
        }else{
            return redirect('login');
        }
    }
    public function update(Request $request, $id){
    	if($request->session()->has('username')){
            $data = Article::findOrFail($id);
            $data->thumbnail    = $request->get('thumbnail');
            $data->title        = $request->get('title');
            $data->excerpt      = $request->get('excerpt');
            $data->content      = $request->get('content');
            $data->status       = $request->get('status');
            $data->author       = $request->session()->get('username');;
            $data->save();
            return redirect('read');
        }else{
            return redirect('login');
        }
    }
    public function delete(Request $request, $id){
    	if($request->session()->has('username')){
            $data = Article::find($id);
            $data->delete();
            return redirect('read');
        }else{
            return redirect('login');
        }
    }
}