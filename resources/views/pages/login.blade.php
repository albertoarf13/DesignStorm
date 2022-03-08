@extends('layouts/main')

@section('title', "Design Storm - Log in")

@section('content')

<!--
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
              <div class="row" style="margin:0;">
                <div class="col-md-12">
                  <center>
                    <button class="main-btn" type="submit">Login</button>
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
-->


<head>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>


<x-auth-card>

  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <form method="POST" action="{{ route('login') }}">
      @csrf


      
      <h4 style="margin-bottom: 1em;"><strong>Usuario invitado</strong></h4>
      <p>
          <strong>Usuario:</strong> admin@admin.com
      </p>
      <p style="margin-bottom: 3em;">
          <strong>Contraseña:</strong> 12345678
      </p>

      <!-- Email Address -->
      <div>
          <x-label for="email" :value="__('Email')" />

          <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
      </div>

      <!-- Password -->
      <div class="mt-4">
          <x-label for="password" :value="__('Password')" />

          <x-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
              <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
      </div>

      <div class="flex items-center justify-end mt-4">
          @if (Route::has('password.request'))
              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
              </a>
          @endif

          <x-button class="ml-3">
              {{ __('Log in') }}
          </x-button>
      </div>
  </form>
</x-auth-card>
@endsection