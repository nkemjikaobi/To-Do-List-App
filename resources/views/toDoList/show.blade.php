@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
        <a href='/toDoList/{{$toDoList->id}}'><h3>{{$toDoList->title}}</h3></a>
        </div>
        <div class="card-body">
            <h4>Due on {{$toDoList->date}}</h4><br>
            
          <h5> It is of <b style="text-transform:uppercase;"> {{$toDoList->priority}} </b> priority <h5>
        </div>
        <div class="card-footer">
        <h6><i>Added {{$toDoList->created_at->diffForHumans()}}</i></h6>
        </div>
    </div>
    <br>

<div class='d-flex'>

    <a href='toDoList/create' class='btn btn-primary mr-4'>Create</a>
    <a href='/toDoList/{{$toDoList->id}}/edit' class='btn btn-warning mr-4'>Edit</a>
    
    <form action="/toDoList/{{$toDoList->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type='submit' class='btn btn-danger mr-4'>Delete</button>
    </form>

    <a href='/toDoList' class='btn btn-info'>Back</a>
<div>
    
@endsection