@extends('layouts.app')

@section('content')


<form action="/toDoList/{{$toDoList->id}}" method="post">
    @csrf
    @method('PUT')

    <div class='form-group'>
        <label for="title">Title</label>
        <input type='text' placeholder='Title' value='{{$toDoList->title}}' name='title' class='form-control'>
    <div>
        <br>
    <div class='form-group'>
        <label for="date">Due Date</label>
        <input type='date'  name='date' value='{{$toDoList->date}}' class='form-control'>
    <div>
        <br>
    <div class='form-group'>
        <label for="priority">Due Date</label>
        <input type='text'  name='priority' value='{{$toDoList->priority}}' class='form-control'>
    <div>
        <br>
    <div class="form-group">
        <button type='submit' class='btn btn-outline-info'>Edit Task</button>
        <a href='/toDoList/{{$toDoList->id}}' class='btn btn-info'>Back</a>
    </div>

    
</form>


@endsection