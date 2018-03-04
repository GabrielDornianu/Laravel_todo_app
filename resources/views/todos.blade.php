@extends('layout')

@section('content')
    <form method="post" action="/create/todo">
        {{ csrf_field() }}
        <input class="form-control" name="todo" placeholder="Create a new todo">    
    </form>
    @foreach($todos as $todo)

    <p> Todo: {{ $todo->todo }} 
    	| <a class="btn btn-danger" href="{{ route('todo.delete', ['id' => $todo->id]) }}">X</a> 
    	| <a class="btn btn-primary" href="{{ route('todo.update', ['id' => $todo->id]) }}">Update</a>
    	@if(!$todo->completed) 
    	| <a class="btn btn-success" href="{{ route('todos.completed', ['id' => $todo->id]) }}">Complete</a>
    	@else
    	  <a class="btn btn-danger" href="{{ route('todos.incomplete', ['id' => $todo->id]) }}">Incomplete</a>
    	@endif  
	</p>
    @endforeach
@stop