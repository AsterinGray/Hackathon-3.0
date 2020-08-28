@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/login-regis.css')}}" />
@endsection

@section('content')
  <section
      class="home container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center py-5"
      id="home"
    >
      <form class="regis col-lg-8 col-md-12" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf
        <h1>REGISTER</h1>
        <div class="regis-group col-lg-8 col-md-10">
          <h2>Group</h2>
          <input
            id="groupName"
            type="text"
            class="form-control my-2 @error('name') is-invalid @enderror"
            placeholder="Group Name"
            name="name" 
            value="{{ old('name') }}"
            required
            autocomplete="name" 
            autofocus
          />
          <p class="invalid">@error('name') {{ $message }} @enderror</p>
            
          <input
            type="password"
            id="password"
            class="form-control my-2 @error('password') is-invalid @enderror"
            placeholder="Password"
            name="password"
            onchange="validatePass()"
            required
            minlength="8"
            autocomplete="new-password"
          />
          <p class="invalid" id="pass-feedback">@error('password') {{ $message }} @enderror</p>
            
          <input
            type="password"
            id="confirm-password"
            class="form-control my-2"
            placeholder="Confirm Password"
            name="password_confirmation"
            oninput="validateConfirmPass()"
            required
            minlength="8"
            autocomplete="new-password"
          />
          <p class="invalid" id="confirm-feedback"></p>

          <div class="d-flex align-items-center flex-direction-column justify-content-between mt-4">
              <span>
                <input type="radio" name="is_binusian" id="non_binusian" name="is_binusian" value="0" onclick="binusChecker(this)" checked required>
                Non-Binusian
              </span>
              <span>
                <input type="radio" name="is_binusian" id="binusian" value="1" onclick="binusChecker(this)">
                Binusian
              </span>
          </div>
        </div>
        <hr />
        <div class="regis-team col-lg-8 col-md-10">
            <h2>Leader</h2>
            <input
              type="text"
              class="form-control my-2 @error('member1_name') is-invalid @enderror"
              placeholder="Full Name"
              name="member1_name"
              value="{{ old('member1_name') }}"
              required
            />
            @error('member1_name')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <input
              type="email"
              class="form-control my-2 @error('member1_email') is-invalid @enderror"
              placeholder="Email"
              name="member1_email" 
              value="{{ old('member1_email') }}"
              onchange="validateEmail(this)"
              required
            />
            <p class="invalid">@error('member1_email') {{ $message }} @enderror</p>
            
            <input
              type="number"
              class="form-control my-2 @error('member1_phone_number') is-invalid @enderror"
              placeholder="Whatsapp Number"
              name="member1_phone_number" 
              value="{{ old('member1_phone_number') }}"
              onchange="validatePhone(this)"
              required
            />
            <p class="invalid"></p>
            @error('member1_phone_number')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <input
              type="text"
              class="form-control my-2 @error('member1_line_id') is-invalid @enderror"
              placeholder="LINE ID"
              name="member1_line_id" 
              value="{{ old('member1_line_id') }}"
              required
            />
            @error('member1_line_id')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <input
              type="text"
              class="form-control my-2 @error('member1_git_id') is-invalid @enderror"
              placeholder="Github/Gitlab ID"
              name="member1_git_id" 
              value="{{ old('member1_git_id') }}"
              required
            />
            @error('member1_git_id')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <input
              type="text"
              class="form-control my-2 @error('member1_place_of_birth') is-invalid @enderror"
              placeholder="Birth Place"
              name="member1_place_of_birth" 
              value="{{ old('member1_place_of_birth') }}"
              required
            />
            @error('member1_place_of_birth')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <input
              type="date"
              class="form-control my-2 inp-date @error('member1_date_of_birth') is-invalid @enderror"
              placeholder="DD/MM/YYYY"
              name="member1_date_of_birth" 
              value="{{ old('member1_date_of_birth') }}"
              required
            />
            @error('member1_date_of_birth')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <label for="idcard-leader" class="form-control inp-file">Upload ID Card</label>
            <p class="invalid"></p>
            <input type="file" id="idcard-leader" class="inp-file @error('member1_id_card') is-invalid @enderror" name="member1_id_card" value="{{ old('member1_id_card') }}" onchange="changeFile(this)" required/>
            @error('member1_id_card')
                <p class="invalid">{{ $message }}</p>
            @enderror
            <label for="cv-leader" class="form-control inp-file">Upload CV</label>
            <p class="invalid"></p>
            <input type="file" id="cv-leader" class="inp-file @error('member1_cv') is-invalid @enderror" name="member1_cv" value="{{ old('member1_cv') }}" onchange="changeFile(this)" required/>
            @error('member1_cv')
                <p class="invalid">{{ $message }}</p>
            @enderror
        <div class="regis-submit">
          <button type="submit" class="align-self-center">SUBMIT</button>
        </div>
      </form>
    </section>
@endsection

@section('script')
  <script src="{{asset('js/regis.js')}}"></script>
@endsection
