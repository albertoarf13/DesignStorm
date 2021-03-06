@extends('layouts/main')

@section('title', "Design Storm - Register")

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
-->


<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>


<x-auth-card>
  <x-slot name="logo">
      <a href="/">
          <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
      </a>
  </x-slot>

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div>
          <x-label for="name" :value="__('Name')" />

          <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
      </div>

      <!-- Email Address -->
      <div class="mt-4">
          <x-label for="email" :value="__('Email')" />

          <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
      </div>

      <!-- Password -->
      <div class="mt-4">
          <x-label for="password" :value="__('Password')" />

          <x-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
          <x-label for="password_confirmation" :value="__('Confirm Password')" />

          <x-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required />
      </div>

      <div class="flex items-center justify-end mt-4">
          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
              {{ __('Already registered?') }}
          </a>

          <x-button class="ml-4">
              {{ __('Register') }}
          </x-button>
      </div>
  </form>
</x-auth-card>
@endsection