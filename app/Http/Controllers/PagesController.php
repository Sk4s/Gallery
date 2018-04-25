<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{    
    public function home() {
        return view('welcome');
    }

    public function clean() {
    	return view('clean');
    }

    public function fluid() {
    	return view('fluid');
    }

    public function grid() {
    	return view('grid');
    }

    public function thumbnail() {
    	return view('thumbnail');
    }
}