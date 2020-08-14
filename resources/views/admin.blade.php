@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @foreach($users as $team)
                        <div>
                            <p>Name : {{$team->name}}</p>
                            <img src="{{'storage/payment_image/'.$team->payment_image}}" alt="">
                            @if($team->payment_verified == 0)
                                <p>Payment Verification on Progress</p>
                            @elseif($team->payment_verified == 2)
                                <p>Payment Failed. Please try again</p>
                            @else
                                <p>Payment Verified</p>
                            @endif
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
