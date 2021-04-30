@extends('layouts/account')


@section('content')
<div>
  <h1>Projects</h1>
  <h6>This is where all your projects are located</h6>
  <div class="row">
    <div class="col-md-12">
      <div class="box">

        <div class="row">
          <div class="col-md-10">All of our projects</div>
          <div class="col-md-2"><a href="/account/projects/create">Add New Project</a></div>
        </div>

        <div class="row">
          <div class="col-md-10">
            <table>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Title</th>
                  <th>Edit</th>
                  <th>Select</th>
                </tr>
              </thead>

              <tbody>

                @foreach($projects as $project)

                  @php
                    $selected = false;

                    if($project->id == $request->session()->get('selected_project')){
                      $selected = true;
                    }
                  @endphp


                  <tr>
                    <td>{{$project->id}}</td>
                    <td><a href='/account/projects/{{$project->id}}'>{{$project->title}}</a></td>
                    <td><a href='/account/projects/{{$project->id}}/edit' class="edit-btn">Edit</a></td>
                    <td><a href='/account/projects/{{$project->id}}/select' class="{{$selected? 'select-btn-active' : 'select-btn'}}">Select</a></td>
                  </tr>
                @endforeach


              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
@endsection
