@extends('layout.admin-main')

@section('content')
    <div id="payment">
        <h1>
            Payment Confirmation
        </h1>
        <div class="payment-content">
        @foreach($users as $team)
            @if($team->name!="BNCC" && $team->payment_image != NULL)
            <div class="payment-col">
                <div class="payment-col-content">
                    <h4 class=group-name>{{$team->name}}</h4>
                    <hr class="hr2">
                    <div class="payment-date payment-insider">
                        <div class="payment-insider-left">Price</div>
                        <div>:</div>
                        <div class="payment-date-content payment-insider-right">
                            @if($team->role == 0)
                            Rp100.000
                            @else
                            Rp80.000
                            @endif
                        </div>
                    </div>
                    <div class="payment-status payment-insider">
                        <div class="payment-insider-left">Status </div>
                        <div>:</div>
                        @if($team->payment_status == 0)
                        <div class="payment-status-content payment-insider-right">Unverified</div>
                        @elseif($team->payment_status == 1)
                        <div class="payment-status-content payment-insider-right green-text">Verified</div>
                        @else
                        <div class="payment-status-content payment-insider-right red-text">Rejected</div>
                        @endif
                    </div>
                    <div class="payment-col-button">
                        <button class="payment-verify" data-paymentname="{{$team->name}}" data-paymentid="{{$team->id}}" type="button" data-toggle="modal" data-target="#staticBackdrop">Verify</button>
                        <button class="payment-view"  onclick="view('{{asset('storage/payment_image/'.$team->payment_image)}}')">View</button>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>

    <div id="participant">
        <h1>
            Participant Data
        </h1>
        <div class="participant-content">
        @foreach($users as $team)
            @if($team->name!="BNCC")
            <div class="participant-col">
                <div class="participant-col-content">
                    <button class="participant-delete" data-deletename="{{$team->name}}" data-deleteid="{{$team->id}}" data-toggle="modal" data-target="#delete">x</button>
                    @if($team->is_binusian==1 && $team->role==0)
                    <h4 class="group-name red-text">{{$team->name}}</h4>
                    @elseif($team->is_binusian==1 && $team->role==1)
                    <h4 class="group-name green-text">{{$team->name}}</h4>
                    @else
                    <h4 class="group-name">{{$team->name}}</h4>
                    @endif
                    <div class="participant-colrow">
                        <form action="{{route('admin.view',$team)}}" method="get">
                            @csrf
                            <button type="submit" class="participant-view">View Data</button>
                        </form>
                        <form action="{{route('admin.edit',$team)}}" method="get">
                            @csrf
                            <button type="submit" class="participant-edit">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection