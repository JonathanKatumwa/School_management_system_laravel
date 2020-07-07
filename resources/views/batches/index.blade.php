@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-id-badge" aria-hidden="true">Batches</i></h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#batch-add-modal"><i class="fa fa-plus-circle">Add New Batch</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('batches.table')

                        {!! Form::open(['route' => 'batches.store']) !!}

                    @include('batches.fields')
                
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


