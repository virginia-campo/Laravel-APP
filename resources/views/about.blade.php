@extends('layouts.app')
@section('title','About Page')
<div>
    @section('content')
    <h1>HELLO WORLD from About</h1>
    @endsection
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    {{-- @include('common.inner',['page'=>'this is about page'])
    @includeIf('noexistview',['page'=>'doesnt exist']) --}}
</div>