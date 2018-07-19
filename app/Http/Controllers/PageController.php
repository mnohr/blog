<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public  function  about()
    {
    	$title ='about me';
    	return view('pages.about',compact("title"));
    }

    public function service()
    {
    	$data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
    	return view('pages.service')->with($data);
    }

    public function index()
    {
    	$title='welcome';
    	return view('pages.index')->with('title',$title);
    }
}
