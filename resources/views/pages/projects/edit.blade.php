@extends('layouts/account')


@section('content')
<div>
  <h1>Edit Project</h1>
  <h6>Edit an existing project</h6>
  <div class="row">
    <div class="col-md-12">
      <div class="box">

        <div class="row">
          <div class="col-md-12">
            
            <form action="/account/projects/{{$project->id}}" method="POST">
            @method('PUT')
            @csrf
                <label for="title">Title</label>
                <input name="title" value="{{$project->title}}">
                <button type="submit">Save</button>

                <a href="/account/projects/{{$project->id}}/delete" class="delete-btn">Delete</a>
            </form>
            
          </div>
        </div>

        <div class="img-section">
            <div class="row">

                @foreach($project->images as $image)
                    <div class="col-md-3">
                        <div class="box">
                            <div style="position: relative; background: url('{{$image->image_url}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                            </div>

                            <a href="/projects/image/{{$image->id}}/delete" class="">Delete</a>
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
