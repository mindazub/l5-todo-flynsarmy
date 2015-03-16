@extends('app')
 
@section('content')
    <h2>
    <h2>Show Task</h2>
    {!! Form::open() !!}
    {{ $project->name}}
<br/>
    {{ $task->name }}	
    
 <br/>

    {{ $task->description }}

    {!! Form::close() !!}    
    </h2>
    
@endsection
