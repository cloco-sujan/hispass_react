<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Home Page - Laravel with React',
            'description' => 'Welcome to our Laravel application with React components',
            'keywords' => 'laravel, react, web development'
        ];
        return view('pages.home', compact('meta'));
    }
    public function show()
    {
        $meta = [
            'title' => 'Home Page - Laravel with React',
            'description' => 'Welcome to our Laravel application with React components',
            'keywords' => 'laravel, react, web development'
        ];
        return view('pages.show', compact('meta'));

    }
}
