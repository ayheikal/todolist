@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="/">Go back</a>
    @if(is_countable($todos))
        @foreach($todos as $todo)
            
            <h2 class="h2"><a>{{$todo->text}}</a></h2>
            <span class="alert alert-danger"> {{$todo->due}}</span>
            <hr>
            <p>{{$todo->body}}</p>
            <br><br>
            <a href='/todo/{{$todo->id}}/edit' class='btn btn-secondary'>edit</a>
            {!! Form::open(['action' =>['TodosController@destroy',$todos->id],'method'=>'POST','class'=>'float-right']) !!}
                {{ Form::hidden('_method','DELETE') }}
                {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        @endforeach
    @else
        <h2 class="h2"><a>{{$todos->text}}</a></h2>
        <span class="alert alert-danger"> {{$todos->due}}</span>
        <hr>
        <p>{{$todos->body}}</p>
        <a href='/todo/{{$todos->id}}/edit' class='btn btn-secondary'>edit</a>
        {!! Form::open(['action' =>['TodosController@destroy',$todos->id],'method'=>'POST','class'=>'float-right']) !!}
            {{ Form::hidden('_method','DELETE') }}
            {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    
    @endif

@endsection