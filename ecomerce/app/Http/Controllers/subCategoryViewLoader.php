<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subCategoryViewLoader extends Controller
{
    //
    public function home(){
        return view('home.home');
    }
    public function blog(){
        return view('home.blog.blog');
    }
    public function contact(){
        return view('home.contact.contact');
    }
    public function about(){
        return view('home.about.about');
    }
    public function faq(){
        return view('home.faq');
    }
    public function store(){
        return view('home.store');
    }
    public function terms(){
        return view('home.terms');
    }
}
