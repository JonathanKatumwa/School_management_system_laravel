<!-- Roll No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roll_No', 'Roll No:') !!}
    {!! Form::text('roll_No', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_Name', 'First Name:') !!}
    {!! Form::text('first_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_Name', 'Last Name:') !!}
    {!! Form::text('last_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Father Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_Name', 'Father Name:') !!}
    {!! Form::text('father_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Father Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_Phone', 'Father Phone:') !!}
    {!! Form::text('father_Phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Mother Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_Name', 'Mother Name:') !!}
    {!! Form::text('mother_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('current_Address', 'Current Address:') !!}
    {!! Form::textarea('current_Address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Passport No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport_No', 'Passport No:') !!}
    {!! Form::text('passport_No', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Dateregistered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateregistered', 'Dateregistered:') !!}
    {!! Form::text('dateregistered', null, ['class' => 'form-control','id'=>'dateregistered']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateregistered').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_Id', 'User Id:') !!}
    {!! Form::number('user_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_Id', 'Class Id:') !!}
    {!! Form::number('class_Id', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admissions.index') }}" class="btn btn-default">Cancel</a>
</div>
