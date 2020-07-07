<!-- Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level', 'Level:') !!}
    {!! Form::text('level', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('level_Description', 'Level Description:') !!}
    {!! Form::textarea('level_Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('levels.index') }}" class="btn btn-default">Cancel</a>
</div>
