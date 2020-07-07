@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transactions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transactions, ['route' => ['transactions.update', $transactions->id], 'method' => 'patch']) !!}

                        @include('transactions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection