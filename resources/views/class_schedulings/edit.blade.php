@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Schedulings
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classSchedulings, ['route' => ['classSchedulings.update', $classSchedulings->id], 'method' => 'patch']) !!}

                        @include('class_schedulings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection