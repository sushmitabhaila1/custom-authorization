@extends("layouts.layout")

@section("title", "Dashboard Page")

@section("content")

                <h2>Hello!"{{ auth()->user()->name ?? 'Guest'}}", Welcome to the Dashboard</h2>
                <p>This is the body content of your dashboard. You can add your own content here.</p>

@endsection