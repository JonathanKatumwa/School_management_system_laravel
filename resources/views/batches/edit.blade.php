@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-registered">Batches</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batches, ['route' => ['batches.update', $batches->id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-6">
                         {!! Form::label('batch', 'Batch:') !!}
                         {!! Form::text('batch', null, ['class' => 'form-control']) !!}
                   </div>
                </div>

                <div>
                {!! Form::submit('update Batch',['class'=>'btn btn-info'])!!}
                </div>

                      <!-- @include('batches.fields') -->

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
