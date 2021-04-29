@extends('layouts/account')


@section('content')
<div>
  <h1>{{$project->title}}</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="box">

        <div class="row">
          <div class="col-md-12">
            <a href="/account/projects/{{$project->id}}/edit" class="delete-btn">Edit</a>
          </div>
        </div>

        <div class="img-section">
            <div class="row">

                @foreach($images as $image)
                  
                  <div class="col-md-3">
                      <div class="box">
                          <div style="position: relative; background: url('{{$image->image_url}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                          </div>
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
