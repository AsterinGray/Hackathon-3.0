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
        <form class="d-flex flex-column">
          <input
            type="text"
            class="form-control my-2"
            placeholder="Group Name"
            required
          />
          <input
            type="password"
            class="form-control my-2"
            placeholder="Password"
            required
            id="password"
            onchange="validatePass()"
            minlength="8"
          />
          <p class="invalid" id="pass-feedback"></p>
          <div class="form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Remember Me</label
            >
          </div>
          <span
            >Not yet have an account?
            <a href="register.html">Click here</a></span
          >
          <button type="submit" class="align-self-center">SUBMIT</button>
        </form>
      </div>
    </section>
@endsection

@section('script')
  <script src="{{asset('js/regis.js')}}"></script>
@endsection
