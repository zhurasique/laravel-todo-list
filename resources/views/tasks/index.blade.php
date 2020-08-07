@extends('layouts.main')

@section('title', 'Tasks Home')

@section('content')

    <div class="row justify-content-center mb-3">
        <div class="col-sm-4">
            <a href="{{ route('task.create') }}" class="btn btn-block btn-success">Create Task</a>
        </div>
    </div>
    @if($tasks->count() == 0)
        <p class="lead text-center">You have no tasks. Create it!</p>
    @else
        @foreach($tasks as $task)
            <div class="row">
                <div class="col-sm-12">
                    <h3>
                        {{ $task->name }}
                        <small>{{ $task->created_at }}</small>
                    </h3>
                    <p>{{ $task->description }}</p>
                    <h4>Due date: <small>{{ $task->due_date }}</small></h4>

                    {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        <a href="{{ route('task.show', $task->id) }}"  class="btn btn-sm btn-light">Show</a>
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>
        @endforeach
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
            {{ $tasks->links() }}
        </div>
    </div>

@endsection
