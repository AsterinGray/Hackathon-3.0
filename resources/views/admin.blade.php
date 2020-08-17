@extends('layout.admin-main')

@section('content')
    <div id="payment">
        <h1>
            Payment Confirmation
        </h1>
        <div class="payment-content">
        @foreach($users as $team)
            @if($team->name!="BNCC")
            <div class="payment-col">
                <div class="payment-col-content">
                    <h4 class=group-name>{{$team->name}}</h4>
                    <hr class="hr2">
                    <div class="payment-date payment-insider">
                        <div class="payment-insider-left">Date</div>
                        <div>:</div>
                        <div class="payment-date-content payment-insider-right">xx/yy/zz</div>
                    </div>
                    <div class="payment-status payment-insider">
                        <div class="payment-insider-left">Status </div>
                        <div>:</div>
                        <div class="payment-status-content payment-insider-right">Unverified</div>
                    </div>
                    <div class="payment-col-button">
                        <button class="payment-verify" type="button" data-toggle="modal" data-target="#staticBackdrop">Verify</button>
                        <button class="payment-view"  onclick="view('assets/img/admin-panel/Receipt-CROP.jpg')">View</button>
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
                    <button class="participant-delete"  data-toggle="modal" data-target="#delete">x</button>
                    <h4 class=group-name>{{$team->name}}</h4>
                    <div class="participant-colrow">
                        <button class="participant-view" onclick="viewGroup()">View Data</button>
                        <button class="participant-edit" onclick="editGroup()">Edit Data</button>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection