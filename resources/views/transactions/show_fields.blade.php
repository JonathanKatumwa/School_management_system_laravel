<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_Id', 'Student Id:') !!}
    <p>{{ $transactions->student_Id }}</p>
</div>

<!-- Fee Id Field -->
<div class="form-group">
    {!! Form::label('fee_Id', 'Fee Id:') !!}
    <p>{{ $transactions->fee_Id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_Id', 'User Id:') !!}
    <p>{{ $transactions->user_Id }}</p>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $transactions->paid }}</p>
</div>

<!-- Transaction Date Field -->
<div class="form-group">
    {!! Form::label('transaction_Date', 'Transaction Date:') !!}
    <p>{{ $transactions->transaction_Date }}</p>
</div>

<!-- Remark Field -->
<div class="form-group">
    {!! Form::label('remark', 'Remark:') !!}
    <p>{{ $transactions->remark }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $transactions->description }}</p>
</div>

