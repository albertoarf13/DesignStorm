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
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Website</td>
                  <td><a href="/account/projects/{id}/edit" class="edit-btn">Edit</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
@endsection
