<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_Id', 'Course Id:') !!}
    {!! Form::number('course_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_Id', 'Level Id:') !!}
    {!! Form::number('level_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_Id', 'Shift Id:') !!}
    {!! Form::number('shift_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_Id', 'Classroom Id:') !!}
    {!! Form::number('classroom_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('batch_Id', 'Batch Id:') !!}
    {!! Form::number('batch_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_Id', 'Day Id:') !!}
    {!! Form::number('day_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_Id', 'Time Id:') !!}
    {!! Form::number('time_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classAssignings.index') }}" class="btn btn-default">Cancel</a>
</div>
