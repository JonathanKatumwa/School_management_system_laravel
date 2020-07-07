<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_Id', 'Student Id:') !!}
    {!! Form::number('student_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_Id', 'Class Id:') !!}
    {!! Form::number('class_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_Id', 'Subject Id:') !!}
    {!! Form::number('subject_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_Id', 'Teacher Id:') !!}
    {!! Form::number('teacher_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Attendance Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attendance_Status', 'Attendance Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('attendance_Status', 0) !!}
        {!! Form::checkbox('attendance_Status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('attendances.index') }}" class="btn btn-default">Cancel</a>
</div>
