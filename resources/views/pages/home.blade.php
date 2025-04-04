@extends('layouts.app')

@section('content')
    <h1>Welcome to Our Website</h1>
    <p>This is server-rendered content from Laravel.</p>
    
    <!-- React mount point -->
    <div id="home-react"></div>
@endsection

@section('footer_scripts')
    @vite('resources/js/components/HomeComponent.jsx')
@endsection