@extends('layouts.main')

@section('title', 'Edit Task')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3>
                {{ $task->name }}
                <small>{{ $task->created_at }}</small>
            </h3>
            <p>{{ $task->description }}</p>
            <h4>Due date: <small>{{ $task->due_date }}</small></h4>
        </div>
        <div class="col-sm-4">
            <a href="{{ route('task.index') }}" class="btn btn-block btn-secondary">Go Back</a>
        </div>
    </div>

@endsection
