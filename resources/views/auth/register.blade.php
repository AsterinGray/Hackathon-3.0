@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/login-regis.css')}}" />
@endsection

@section('content')
  <section
      class="home container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center py-5"
      id="home"
    >
    <a
        href="/welcome"
        class="d-flex justify-content-center align-items-center"
        id="home"
      >
        <img id="logo" src="{{asset('assets/img/Hackathon-logo.png')}}" alt="Hackathon logo" />
        <div>
          <div id="hackathon">BNCC Hackathon 3.0</div>
          <div id="slogan">Transform Ideas, Code Your Solution</div>
        </div>
      </a>
      <div class="regis col-lg-5 col-md-12 px-5 text-center">
        <h1>Registration</h1>
        <p class="pt-3">
          Hi Tech Enthusiact! We want to inform you that the registration period
          for Hackthon 3.0 has ended!
        </p>
        <p>
          Thankyou for your interest in this event! Please kindly check our next
          upcoming event blow or you can check our social media on instagram
          <a id="link" href="https://www.instagram.com/technoscapebncc/"
            >@technoscapebncc</a
          >
        </p>
        <a href="/welcome" id="back">Back to Homepage</a>
      </div>
    </section>
@endsection

@section('script')
  <script src="{{asset('js/regis.js')}}"></script>
@endsection
