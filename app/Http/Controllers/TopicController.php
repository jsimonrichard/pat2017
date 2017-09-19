<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TopicController extends Controller
{
    public function index()
    {
    	$topics = DB::table('topic')->get();
    	return view('topics.index', compact('topics'));
    }

    public function show($topic)
    {
    	$topic = DB::table('topic')->where('id', $topic)->first();
    	return view('topics.show', compact('topic'));
    }
}
