@extends('layouts/main')

@section('title', "Design Storm")

@section('content')
<div id="site-section">
    <div class="container_own">
    <div id="home">
        <div class="search-area">
        <div class="search-container">
            <h1>DesignStorm</h1>
            <form action="/search" method="POST">
            @csrf
                <input name="search" class="search" type="text" value="" placeholder="Search">
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection