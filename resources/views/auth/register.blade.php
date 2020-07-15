@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_name</label>

                            <div class="col-md-6">
                                <input id="member1_name" type="text" class="form-control @error('member1_name') is-invalid @enderror" name="member1_name" value="{{ old('member1_name') }}" required autofocus>

                                @error('member1_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_email</label>

                            <div class="col-md-6">
                                <input id="member1_email" type="email" class="form-control @error('member1_email') is-invalid @enderror" name="member1_email" value="{{ old('member1_email') }}" required autofocus>

                                @error('member1_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_phone_number</label>

                            <div class="col-md-6">
                                <input id="member1_phone_number" type="number" class="form-control @error('member1_phone_number') is-invalid @enderror" name="member1_phone_number" value="{{ old('member1_phone_number') }}" required autofocus>

                                @error('member1_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_line_id</label>

                            <div class="col-md-6">
                                <input id="member1_line_id" type="text" class="form-control @error('member1_line_id') is-invalid @enderror" name="member1_line_id" value="{{ old('member1_line_id') }}" required autofocus>

                                @error('member1_line_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_git_id</label>

                            <div class="col-md-6">
                                <input id="member1_git_id" type="text" class="form-control @error('member1_git_id') is-invalid @enderror" name="member1_git_id" value="{{ old('member1_git_id') }}" required autofocus>

                                @error('member1_git_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_place_of_birth</label>

                            <div class="col-md-6">
                                <input id="member1_place_of_birth" type="text" class="form-control @error('member1_place_of_birth') is-invalid @enderror" name="member1_place_of_birth" value="{{ old('member1_place_of_birth') }}" required autofocus>

                                @error('member1_place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_date_of_birth</label>

                            <div class="col-md-6">
                                <input id="member1_date_of_birth" type="date" class="form-control @error('member1_date_of_birth') is-invalid @enderror" name="member1_date_of_birth" value="{{ old('member1_date_of_birth') }}" required autofocus>

                                @error('member1_date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_id_card</label>

                            <div class="col-md-6">
                                <input id="member1_id_card" type="file" class="form-control @error('member1_id_card') is-invalid @enderror" name="member1_id_card" value="{{ old('member1_id_card') }}" autofocus>

                                @error('member1_id_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_name</label>

                            <div class="col-md-6">
                                <input id="member2_name" type="text" class="form-control @error('member2_name') is-invalid @enderror" name="member2_name" value="{{ old('member2_name') }}" required autofocus>

                                @error('member2_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_email</label>

                            <div class="col-md-6">
                                <input id="member2_email" type="email" class="form-control @error('member2_email') is-invalid @enderror" name="member2_email" value="{{ old('member2_email') }}" required autofocus>

                                @error('member2_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_phone_number</label>

                            <div class="col-md-6">
                                <input id="member2_phone_number" type="number" class="form-control @error('member2_phone_number') is-invalid @enderror" name="member2_phone_number" value="{{ old('member2_phone_number') }}" required autofocus>

                                @error('member2_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_line_id</label>

                            <div class="col-md-6">
                                <input id="member2_line_id" type="text" class="form-control @error('member2_line_id') is-invalid @enderror" name="member2_line_id" value="{{ old('member2_line_id') }}" required autofocus>

                                @error('member2_line_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_git_id</label>

                            <div class="col-md-6">
                                <input id="member2_git_id" type="text" class="form-control @error('member2_git_id') is-invalid @enderror" name="member2_git_id" value="{{ old('member2_git_id') }}" required autofocus>

                                @error('member2_git_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_place_of_birth</label>

                            <div class="col-md-6">
                                <input id="member2_place_of_birth" type="text" class="form-control @error('member2_place_of_birth') is-invalid @enderror" name="member2_place_of_birth" value="{{ old('member2_place_of_birth') }}" required autofocus>

                                @error('member2_place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_date_of_birth</label>

                            <div class="col-md-6">
                                <input id="member2_date_of_birth" type="date" class="form-control @error('member2_date_of_birth') is-invalid @enderror" name="member2_date_of_birth" value="{{ old('member2_date_of_birth') }}" required autofocus>

                                @error('member2_date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member2_id_card</label>

                            <div class="col-md-6">
                                <input id="member2_id_card" type="file" class="form-control @error('member2_id_card') is-invalid @enderror" name="member2_id_card" value="{{ old('member2_id_card') }}" autofocus>

                                @error('member2_id_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_name</label>

                            <div class="col-md-6">
                                <input id="member3_name" type="text" class="form-control @error('member3_name') is-invalid @enderror" name="member3_name" value="{{ old('member3_name') }}" required autofocus>

                                @error('member3_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_email</label>

                            <div class="col-md-6">
                                <input id="member3_email" type="email" class="form-control @error('member3_email') is-invalid @enderror" name="member3_email" value="{{ old('member3_email') }}" required autofocus>

                                @error('member3_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_phone_number</label>

                            <div class="col-md-6">
                                <input id="member3_phone_number" type="number" class="form-control @error('member3_phone_number') is-invalid @enderror" name="member3_phone_number" value="{{ old('member3_phone_number') }}" required autofocus>

                                @error('member3_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_line_id</label>

                            <div class="col-md-6">
                                <input id="member3_line_id" type="text" class="form-control @error('member3_line_id') is-invalid @enderror" name="member3_line_id" value="{{ old('member3_line_id') }}" required autofocus>

                                @error('member3_line_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_git_id</label>

                            <div class="col-md-6">
                                <input id="member3_git_id" type="text" class="form-control @error('member3_git_id') is-invalid @enderror" name="member3_git_id" value="{{ old('member3_git_id') }}" required autofocus>

                                @error('member3_git_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_place_of_birth</label>

                            <div class="col-md-6">
                                <input id="member3_place_of_birth" type="text" class="form-control @error('member3_place_of_birth') is-invalid @enderror" name="member3_place_of_birth" value="{{ old('member3_place_of_birth') }}" required autofocus>

                                @error('member3_place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_date_of_birth</label>

                            <div class="col-md-6">
                                <input id="member3_date_of_birth" type="date" class="form-control @error('member3_date_of_birth') is-invalid @enderror" name="member3_date_of_birth" value="{{ old('member3_date_of_birth') }}" required autofocus>

                                @error('member3_date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">member3_id_card</label>

                            <div class="col-md-6">
                                <input id="member3_id_card" type="file" class="form-control @error('member3_id_card') is-invalid @enderror" name="member3_id_card" value="{{ old('member3_id_card') }}"  autofocus>

                                @error('member3_id_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
