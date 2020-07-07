<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_Name', 'Course Name:') !!}
    <p>{{ $courses->course_Name }}</p>
</div>

<!-- Course Code Field -->
<div class="form-group">
    {!! Form::label('course_Code', 'Course Code:') !!}
    <p>{{ $courses->course_Code }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $courses->description }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $courses->status }}</p>
</div>

