<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_Id', 'Student Id:') !!}
    <p>{{ $attendances->student_Id }}</p>
</div>

<!-- Class Id Field -->
<div class="form-group">
    {!! Form::label('class_Id', 'Class Id:') !!}
    <p>{{ $attendances->class_Id }}</p>
</div>

<!-- Subject Id Field -->
<div class="form-group">
    {!! Form::label('subject_Id', 'Subject Id:') !!}
    <p>{{ $attendances->subject_Id }}</p>
</div>

<!-- Teacher Id Field -->
<div class="form-group">
    {!! Form::label('teacher_Id', 'Teacher Id:') !!}
    <p>{{ $attendances->teacher_Id }}</p>
</div>

<!-- Attendance Status Field -->
<div class="form-group">
    {!! Form::label('attendance_Status', 'Attendance Status:') !!}
    <p>{{ $attendances->attendance_Status }}</p>
</div>

