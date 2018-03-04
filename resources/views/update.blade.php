@extends('layout')

@section('content')
    <form method="post" action="{{ route('todos.save', ['id' => $todo->id]) }}">
        {{ csrf_field() }}
        <input class="form-control" name="todo" value="{{ $todo->todo }}" placeholder="Create a new todo">    
    </form>
@stop