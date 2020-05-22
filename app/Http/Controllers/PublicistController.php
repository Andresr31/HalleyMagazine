<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Article;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PublicistController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->type_document = $request->type_document;
        $user->document = $request->document;
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $user->password = Hash::make($request->password);
        $user->birthdate = $request->birthdate;
        $id = count(User::all())+1;
        $destinationPathImage = "./storage/users/$id/image/";
        $image = $request->file('imgFile')->getClientOriginalName() . "." . $request->file('imgFile')->getClientOriginalExtension();
        $request->file('imgFile')->move($destinationPathImage, $image);
        $user->url_profile = $destinationPathImage . $image;
        $user->role_id = 1;
        $user->remember_token = Str::random(80);
        $user->save();
        
        $articles = Article::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.articles.index',['articles'=>$articles]);
    }
}
