<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Company;
use \App\Comment;
use \App\models\email;
use DB;

class W_default extends Controller
{
    public function index()
    {
        $dataservice = Company::all();
        $datacomment = Comment::all();
       return view("user.body.index",['data_service'=>$dataservice,'data_comment' => $datacomment]);
    }
    public function email_post(Request $request)
    {
    	$email = new email();
    	$email->email = request('email');
    	$email->save();
    	return redirect("/");
    }
}
