@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Admissions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($admissions, ['route' => ['admissions.update', $admissions->id], 'method' => 'patch']) !!}

                        @include('admissions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection