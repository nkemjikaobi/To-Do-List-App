@extends('layouts.app')

@section('content')


    <br>
    @foreach($toDoLists as $toDoList)
    <ul class='list-group'>
        <li>
            <div class="card">
                <div class="card-header">
                    
                <a href='/toDoList/{{$toDoList->id}}'><h3>{{$toDoList->title}}</h3></a>
         
                </div>
                <div class="card-body">
                <h6>Added {{$toDoList->created_at->diffForHumans()}}</h6>
                </div>
            </div>
        </li>
    </ul>
    
    <br>

    @endforeach

<a href='toDoList/create' class='btn btn-outline-primary'>Create</a>
    
@endsection
