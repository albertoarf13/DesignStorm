@extends('layouts/main')

@section('title', "Design Storm - Register")

@section('content')
<div id="site-section">
  <div class="container">
    <div id="auth">
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
          <div class="box">
            <form action="" method="POST">
              <label for="email">email:</label>
              <input type="text" name="email">
              <label for="password">password:</label>
              <input type="password" name="password">
              <label for="password2">confirm:</label>
              <input type="password" name="password2">
              <div class="row" style="margin:0;">
                <div class="col-md-12">
                  <center>
                    <button class="main-btn" type="submit">Register</button>
                  </center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection