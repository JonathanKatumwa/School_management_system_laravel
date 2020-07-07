<!-- Classroom Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_Name', 'Classroom Name:') !!}
    {!! Form::text('classroom_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('classroom_Description', 'Classroom Description:') !!}
    {!! Form::textarea('classroom_Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('classroom_status', 0) !!}
        {!! Form::checkbox('classroom_status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
</div>
