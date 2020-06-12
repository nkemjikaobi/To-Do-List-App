@extends('layouts.app')

@section('content')

<form action="/toDoList" method="post">
    @csrf

    <div class='form-group'>
        <label for="title">Title</label>
        <input type='text' placeholder='Title'  name='title' class='form-control'>
    <div>
        <br>
    <div class='form-group'>
        <label for="date">Due Date</label>
        <input type='date'  name='date' class='form-control'>
    <div>
        <br>
    <div class='form-group'>
        <label for="priority">Priority</label>
        <select name="priority" id="" class='form-control'>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
    <div>
        <br>
    <div class="form-group">
        <button type='submit' class='btn btn-outline-info'>Add Task</button>
        <a href='/toDoList' class='btn btn-info'>Back</a>
    </div>

    
</form>

@endsection