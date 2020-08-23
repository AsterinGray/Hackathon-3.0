@extends('layout.admin-main2')

@section('content')
<div id=editgroup>
    <h1 class="editgroup-name">{{$user->name}}</h1>
    <div class="editgroup-content">
        @foreach($data as $data)
        <div class="editgroup-col">
            <header>@if ($loop->first)
                                Leader
                                @else
                                Member
                                @endif</header>
            <hr class="hr3">
            <div class="editgroup-info">
                <div class="editgroup-info-left">
                    <div class="editgroup-info-c">
                        <div>Name</div>
                        <div class="editgroup-info-input" id="editgroup-info-name">{{$data->name}}</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Email</div>
                        <div class="editgroup-info-input" id="editgroup-info-email">{{$data->email}}</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Birth Place</div>
                        <div class="editgroup-info-input" id="editgroup-info-birthplace">{{$data->place_of_birth}}</div>
                    </div>
                </div>
                <div class="editgroup-info-right">
                    <div class="editgroup-info-c">
                        <div>Whatsapp Number</div>
                        <div class="editgroup-info-input" id="editgroup-info-number">{{$data->phone_number}}</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Line_ID</div>
                        <div class="editgroup-info-input" id="editgroup-info-line">{{$data->line_id}}</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>GitLab_ID</div>
                        <div class="editgroup-info-input" id="editgroup-info-gitlab">{{$data->git_id}}</div>
                    </div>
                    <div class="editgroup-info-c">
                        <div>Birth Date</div>
                        <div class="editgroup-info-input" id="editgroup-info-birthdate">{{$data->date_of_birth}}</div>
                    </div>
                </div>

            </div>
            <hr class="hr3">
            <div class="editgroup-cv-c">
                <div class="editgroup-cv-left">
                    <img src="{{asset('assets/img/admin-panel/folder_red.png')}}">
                    <span>|</span>
                    <div class="editgroup-cv">Your CV</div>
                </div>
                <button class="editgroup-view" onclick="view('{{asset('storage/cv/'.$data->cv)}}')">View CV</button>
            </div>
            <div class="editgroup-cv-c mt-3">
                <div class="editgroup-cv-left">
                    <img src="{{asset('assets/img/admin-panel/folder_red.png')}}">
                    <span>|</span>
                    <div class="editgroup-cv">Your ID</div>
                </div>
                <button class="editgroup-view" onclick="view('{{asset('storage/id_card/'.$data->id_card)}}')">View ID</button>
            </div>
        </div>
        @endforeach
        @if($user->is_binusian == 1 && $user->role != 1)
        <form action="{{route('admin.identity')}}" method="post" class="mb-3">
                @csrf 
            <input type="hidden" name="identity_id" value="{{$user->id}}">
            <button id="verif-button" type="submit">Verify as Binusian</button>
        </form>
        @endif
    </div>
</div>
@endsection