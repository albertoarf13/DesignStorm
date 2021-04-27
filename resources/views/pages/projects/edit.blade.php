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
            
            <form action="/account/projects/id" method="POST">
            @method('PUT')
            @csrf
                <label for="title">Title</label>
                <input name="title">
                <button type="submit">Save</button>

                <a href="/account/projects/id/delete" class="delete-btn">Delete</a>
            </form>
            
          </div>
        </div>

        <div class="img-section">
            <div class="row">

                <div class="col-md-3">
                    <div class="box">
                        <div style="position: relative; background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwyMjU2MjV8MHwxfHNlYXJjaHw5fHxjYXJzfGVufDB8fHx8MTYxOTU1NjkyMQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div style="position: relative; background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwyMjU2MjV8MHwxfHNlYXJjaHw5fHxjYXJzfGVufDB8fHx8MTYxOTU1NjkyMQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div style="position: relative; background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwyMjU2MjV8MHwxfHNlYXJjaHw5fHxjYXJzfGVufDB8fHx8MTYxOTU1NjkyMQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div style="position: relative; background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwyMjU2MjV8MHwxfHNlYXJjaHw5fHxjYXJzfGVufDB8fHx8MTYxOTU1NjkyMQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div style="position: relative; background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwyMjU2MjV8MHwxfHNlYXJjaHw5fHxjYXJzfGVufDB8fHx8MTYxOTU1NjkyMQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px; margin-bottom: 10px;">
                        </div>
                    </div>
                </div>


            </div>

        </div>


      </div>
    </div>
  </div>
</div>
@endsection
