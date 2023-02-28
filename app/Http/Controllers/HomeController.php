<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\feedback;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function feedback(Request $request)
    {
        $post = new feedback;
        $post->fullname = $request->fullname;
        $post->nickname = $request->nickname;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->massage = $request->massage;
        $post->save();
        return redirect()->route('home');
    }
}
