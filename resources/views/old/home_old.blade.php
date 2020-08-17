@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @foreach($members as $member)
                    <div>
                        <p>Name : {{$member->name}}</p>
                        <p>Email : {{$member->email}}</p>
                        <p>phone_number : {{$member->phone_number}}</p>
                        <p>line_id : {{$member->email}}</p>
                        <p>git_id : {{$member->email}}</p>
                        <p>place_of_birth : {{$member->email}}</p>
                        <p>date_of_birth : {{$member->email}}</p>
                        <img src="{{asset('storage/id_card/'.$member->id_card)}}" width="100px" alt="">
                        <img src="{{asset('storage/cv/'.$member->cv)}}" width="100px" alt="">
                    </div>
                    @endforeach

                    @if($membersCount < 4)
                    <form action="{{url('/add/user')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">phone_number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">line_id</label>

                            <div class="col-md-6">
                                <input id="line_id" type="text" class="form-control @error('line_id') is-invalid @enderror" name="line_id" value="{{ old('line_id') }}" required autofocus>

                                @error('line_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">git_id</label>

                            <div class="col-md-6">
                                <input id="git_id" type="text" class="form-control @error('git_id') is-invalid @enderror" name="git_id" value="{{ old('git_id') }}" required autofocus>

                                @error('git_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">place_of_birth</label>

                            <div class="col-md-6">
                                <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ old('place_of_birth') }}" required autofocus>

                                @error('place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">date_of_birth</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">id_card</label>

                            <div class="col-md-6">
                                <input id="id_card" type="file" class="form-control @error('id_card') is-invalid @enderror" name="id_card" value="{{ old('id_card') }}" autofocus>

                                @error('id_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">cv</label>

                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" autofocus>

                                @error('cv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                    @endif

                    @if($user->payment_image == NULL)
                    <form action="{{url('/payment/upload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Payment Image</label>

                            <div class="col-md-6">
                                <input id="payment_image" type="file" class="form-control @error('payment_image') is-invalid @enderror" name="payment_image" value=""  autofocus>

                                @error('payment_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <button type="submit">Submit</button>
                        </div>
                    </form>
                    
                    @else
                    <div>                    
                        <img src="{{'storage/payment_image/'.$user->payment_image}}" width="100px" alt="">
                        @if($user->payment_verified == 0)
                        <label for="">Payment Verification on Progress</label>
                        @elseif($user->payment_verified == 2)
                        <label for="">Payment Failed. Please try again</label>
                        @else
                        <label for="">Payment Verified</label>
                        @endif
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
