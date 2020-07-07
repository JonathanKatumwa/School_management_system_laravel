@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classrooms
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classrooms, ['route' => ['classrooms.update', $classrooms->id], 'method' => 'patch']) !!}

                        @include('classrooms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection