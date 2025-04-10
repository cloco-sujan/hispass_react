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
    public function show() {}
    public function term()
    {
        return view('pages.term');
    }
    public function coupon()
    {
        return view('pages.coupon-detail');
    }
}
