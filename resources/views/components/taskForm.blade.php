    {{ Form::label('name', 'Name', ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Some Name']) }}

    {{ Form::label('description', 'Description', ['class' => 'control-label mt-3']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Some Description']) }}

    {{ Form::label('due_date', 'Due date', ['class' => 'control-label mt-3']) }}
    {{ Form::date('due_date', null, ['class' => 'form-control']) }}

    <div class="row justify-content-center mt-3">
        <div class="col-sm-4">
            <a href="{{ route('task.index') }}" class="btn btn-block btn-secondary">Go Back</a>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-block btn-primary" type="submit">Submit Task</button>
        </div>
    </div>

