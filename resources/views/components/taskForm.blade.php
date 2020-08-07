{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}
    {{ Form::label('name', 'Name', ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Some Name']) }}

    {{ Form::label('description', 'Description', ['class' => 'control-label mt-3']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Some Description']) }}

    {{ Form::label('due_date', 'Due date', ['class' => 'control-label mt-3']) }}
    {{ Form::date('due_date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}

    <div class="row justify-content-center mt-3">
        <div class="col-sm-6">
            <button class="btn btn-block btn-success" type="submit">Create Task</button>
        </div>
    </div>
{!! Form::close() !!}
