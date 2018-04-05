<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;


class LinksController extends Controller
{
    public function index(){
        return view('layouts.index');
    }

    public function show($id){
        $link = Link::findOrFail($id);

        return new RedirectResponse($link->url, 301);
        //return redirect($link->url, 301);
    }

    public function store(){

        $url = Input::get('url');
        $link = Link::firstOrCreate(['url' => $url]);

        return view('layouts.success', compact('link'));
    }

}
