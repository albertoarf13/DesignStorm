@extends('layouts/account')


@section('content')
<div>
  <h1>Create Project</h1>
  <h6>Create a new project</h6>
  <div class="row">
    <div class="col-md-12">
      <div class="box">

        <div class="row">
          <div class="col-md-10">
            
            <form action="/account/projects" method="POST">
            @csrf
                <label for="title">Title</label>
                <input name="title">
                <button type="submit">Submit</button>
            </form>

          </div>
        </div>


      </div>
    </div>
  </div>
</div>
@endsection
