@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/login-regis.css')}}" />
@endsection

@section('content')
    <section
      class="home container-fluid min-vh-100 d-flex justify-content-center align-items-center py-5"
      id="home"
    >
      <div
        class="login col-lg-5 col-md-7 d-flex justify-content-center align-items-center flex-column"
      >
        <span class="login-head">LOGIN</span>
        <form class="d-flex flex-column" method="POST" action="{{ route('login') }}">
        @csrf
          <input
            type="text"
            class="form-control my-2 @error('name') is-invalid @enderror"
            placeholder="Group Name"
            name="name" 
            value="{{ old('name') }}"
            required
            autofocus
          />
            @error('name')
                <p class="invalid">{{ $message }}</p>
            @enderror
          <input
            type="password"
            class="form-control my-2 @error('password') is-invalid @enderror"
            placeholder="Password"
            name="password"
            required
            id="password"
            autocomplete="current-password"
          />
            @error('password')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <p class="invalid" id="pass-feedback"></p>
          <div class="form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
              name="remember" 
              id="remember" 
              {{ old('remember') ? 'checked' : '' }}
            />
            <label class="form-check-label" for="exampleCheck1"
              >Remember Me</label
            >
          </div>
          <span
            >Not yet have an account?
            <a href="/register">Click here</a></span
          >
          <button type="submit" class="align-self-center">SUBMIT</button>
        </form>
      </div>
    </section>
@endsection
