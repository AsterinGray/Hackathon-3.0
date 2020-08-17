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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_binusian" id="inlineRadio1" value="0" required>
                                <label class="form-check-label" for="inlineRadio1">Public</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_binusian" id="inlineRadio2" value="1">
                                <label class="form-check-label" for="inlineRadio2">Binusian</label>
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">member1_cv</label>

                            <div class="col-md-6">
                                <input id="member1_cv" type="file" class="form-control @error('member1_cv') is-invalid @enderror" name="member1_cv" value="{{ old('member1_cv') }}" autofocus>

                                @error('member1_cv')
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
