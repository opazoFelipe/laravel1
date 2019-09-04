@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($tasks as $task)
                <div class="panel panel-default">
                    <div class="panel-heading">{{$task->name}}</div>
                </div>
            @endforeach 
            {{$tasks->links()}}    
        </div>
    </div>
</div>
@endsection