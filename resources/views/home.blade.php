{{-- @include('common.inner',['page'=>'this is home page']) --}}


@extends('layouts.app')

@section('title', 'Home | My Laravel App')

@section('content')
    <div class="card">
        <h1>Welcome to my website</h1>
        <p>
            This is my Laravel application. I'm building a clean,
            responsive website using Blade, CSS, and Vite.
        </p>
        <a href="/about">Learn more about us →</a>
    </div>
@endsection