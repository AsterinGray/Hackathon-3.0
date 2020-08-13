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
