@extends('layouts.app')

@section('content')
<h1 class="page-header text-center">Todos</h1>
@if(count($todos)>0)
    @foreach($todos as $todo)
        <div class="card card-body bg-light ">
            <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
            <p class="alert alert-warning">{{$todo->due}}</p>
            
        </div>
    @endforeach
@endif

@endsection