@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Data</div>

                <div class="card-body">

                @foreach($data as $data)
                    <div>
                        <input type="text" name="member"> Name : {{$data->name}}</p>
                        <p>email : {{$data->email}}</p>
                        <p>phone_number : {{$data->phone_number}}</p>
                        <p>line_id : {{$data->line_id}}</p>
                        <p>git_id : {{$data->git_id}}</p>
                        <p>place_of_birth : {{$data->place_of_birth}}</p>
                        <p>date_of_birth : {{$data->date_of_birth}}</p>
                        
                        <img src="{{'storage/id_card/'.$data->id_card}}" width="10rem" alt="">
                        <img src="{{'storage/cv/'.$data->cv}}" width="10rem" alt="">
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
