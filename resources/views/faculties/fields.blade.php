<!-- Faculty Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_Name', 'Faculty Name:') !!}
    {!! Form::text('faculty_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_Code', 'Faculty Code:') !!}
    {!! Form::text('faculty_Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('faculty_Description', 'Faculty Description:') !!}
    {!! Form::textarea('faculty_Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_Status', 'Faculty Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('faculty_Status', 0) !!}
        {!! Form::checkbox('faculty_Status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faculties.index') }}" class="btn btn-default">Cancel</a>
</div>
