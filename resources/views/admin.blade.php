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
                        @if($team->name!="BNCC")
                        <div>
                            <p>Name : {{$team->name}}</p>
                            <img src="{{'storage/payment_image/'.$team->payment_image}}" width="10rem" alt="">
                            @if($team->payment_verified == 0)
                                <p>Payment Verification on Progress</p>
                            @elseif($team->payment_verified == 2)
                                <p>Payment Failed. Please try again</p>
                            @else
                                <p>Payment Verified</p>
                            @endif
                            <form action="{{route('admin.view',$team)}}" method="get">
                                @csrf
                                <button type="submit" class="participant-view">View Data</button>
                            </form>
                            <form action="{{route('admin.edit',$team)}}" method="get">
                                @csrf
                                <button type="submit" class="participant-view">Edit Data</button>
                            </form>
                            <form action="{{route('admin.delete',$team)}}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="participant-delete">x</button>
                            </form>
                        </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
