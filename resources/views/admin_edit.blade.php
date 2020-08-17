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
                        <form action="{{url('update/'.$data->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                            <input type="text" name="name" value="{{$data->name}}"> Name : {{$data->name}}</p>
                            <input type="text" name="email" value="{{$data->email}}"> Email : {{$data->email}}</p>
                            <input type="text" name="phone_number" value="{{$data->phone_number}}"> phone_number : {{$data->phone_number}}</p>
                            <input type="text" name="line_id" value="{{$data->line_id}}"> line_id : {{$data->line_id}}</p>
                            <input type="text" name="git_id" value="{{$data->git_id}}"> git_id : {{$data->git_id}}</p>
                            <input type="text" name="place_of_birth" value="{{$data->place_of_birth}}"> Name : {{$data->place_of_birth}}</p>
                            <input type="text" name="date_of_birth" value="{{$data->date_of_birth}}"> Name : {{$data->date_of_birth}}</p>
                            
                            <img src="{{'storage/id_card/'.$data->id_card}}" width="10rem" alt="">
                            <img src="{{'storage/cv/'.$data->cv}}" width="10rem" alt="">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
