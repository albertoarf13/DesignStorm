@extends('layouts/main')

@section('title', "Design Storm - Results")

@section('content')
<div id="site-section">
  <div class="container_own">
    <div id="results">
      <div>
        <div class="search-container">
            <form action="/search" method="POST">
            @csrf
                <input name="search" class="search" value="{{$search}}" placeholder="Search" type="text">
            </form>
        </div>
        <div class="boxes">
          <div class="row">

            @foreach($posts as $post)

              <div class="col-md-3">
                <div class="box">
                  <div style="position: relative; background: url('{{$post->urls->regular}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                    
                    @php
                      $encodedUrl = urlencode($post->urls->regular);
                    @endphp
                    
                    <a href="/projects/image/{{$post->id}}/add?url={{$encodedUrl}}">
                      <div class="add-btn {{in_array($post->id, $image_info_array)? 'active': ''}}"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </a>
                  </div>
                  <h4>{{$post->user->username}}</h4>
                </div>
              </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection