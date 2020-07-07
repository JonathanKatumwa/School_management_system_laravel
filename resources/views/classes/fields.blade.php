<!-- Class Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_Name', 'Class Name:') !!}
    {!! Form::text('class_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_Code', 'Class Code:') !!}
    {!! Form::text('class_Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classes.index') }}" class="btn btn-default">Cancel</a>
</div>
