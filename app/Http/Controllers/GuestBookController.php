<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\GuestBookPost;

class GuestBookController extends BaseController
{
    public function index() {
        $posts = GuestBookPost::orderBy('createdTime', 'DESC')->get();
        return view('guest-book/index', [
            'posts' => $posts,    
        ]);
    }
    
    public function newPost(Request $request) {
        $model = GuestBookPost::create($request->all());
        $model->save();
        return redirect('/');
    }
}
