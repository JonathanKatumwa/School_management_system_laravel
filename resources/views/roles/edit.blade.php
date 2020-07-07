@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            <i class="fa fa-registered">Roles</i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                 {!! Form::model($roles, ['route' => ['roles.update', $roles->id], 'method' => 'patch']) !!}

                   <!-- Submit Field -->
                        <div class="form-group col-md-6">
                                  {!! Form::label('name', 'Name:') !!}
                                  {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>    

                    <div>
                       {!! Form::submit('update Role',['class'=>'btn btn-info'])!!}
                    </div>

                        <!-- @include('roles.fields') -->

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection