<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to NewsApp';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About us';
        return view ('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Adding your own news articles', 'View posts made by others']
        );
        return view ('pages.services')->with($data);
    }
}
