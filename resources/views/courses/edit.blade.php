@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Courses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($courses, ['route' => ['courses.update', $courses->id], 'method' => 'patch']) !!}

                    <!-- Course Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('course_Name', 'Course Name:') !!}
    {!! Form::text('course_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Code Field -->
<div class="form-group col-md-6">
    {!! Form::label('course_Code', 'Course Code:') !!}
    {!! Form::text('course_Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-md-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 3]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-md-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('update Course', ['class' => 'btn btn-info']) !!}
      </div>
    </div>
  </div>
</div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection