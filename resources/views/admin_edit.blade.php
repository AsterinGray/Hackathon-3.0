@extends('layout.admin-main2')

@section('content')
<div id=editgroup>
    <h1 class="editgroup-name">Group Name A</h1>
    <div class="editgroup-content">
        @foreach($data as $data)
        <form action="{{url('update/'.$data->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}
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
                        <label for="leader-name">Name</label>
                        <input class="editgroup-info-input" name="name" id="leader-name" value="{{$data->name}}">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-email">Email</label>
                        <input class="editgroup-info-input" name="email" id="leader-email" value="{{$data->email}}">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-birthplace">Birth Place</label>
                        <input class="editgroup-info-input" name="place_of_birth" id="leader-birthplace" value="{{$data->place_of_birth}}">
                    </div>
                </div>
                <div class="editgroup-info-right">
                    <div class="editgroup-info-c">
                        <label for="leader-number">Whatsapp Number</label>
                        <input class="editgroup-info-input" name="phone_number" id="leader-number" value="{{$data->phone_number}}">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-line">Line_ID</label>
                        <input class="editgroup-info-input" name="line_id" id="leader-line" value="{{$data->line_id}}">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-gitlab">GitLab_ID</label>
                        <input class="editgroup-info-input" name="git_id" id="leader-gitlab" value="{{$data->git_id}}">
                    </div>
                    <div class="editgroup-info-c">
                        <label for="leader-birthdate">Birth Date</label>
                        <input class="editgroup-info-input" name="date_of_birth" id="leader-birthdate" value="{{$data->date_of_birth}}">
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
                <button class="editgroup-view" onclick="view('{{asset('storage/cv/'.$data->cv)}}')" type="button">View CV</button>
            </div>
            <hr class="hr3">
            <button class="editgroup-submit" type="submit">Submit</button>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection