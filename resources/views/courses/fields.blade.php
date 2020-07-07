
<div class="modal fade" id="add-course-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_Name', 'Course Name:') !!}
    {!! Form::text('course_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Code Field -->
<div class="form-group">
    {!! Form::label('course_Code', 'Course Code:') !!}
    {!! Form::text('course_Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 3]) !!}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save Course', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>
