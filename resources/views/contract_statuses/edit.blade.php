@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contract Status
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contractStatus, ['route' => ['contractStatuses.update', $contractStatus->id], 'method' => 'patch']) !!}

                  <!-- Status Field -->
<div class="form-group col-md-10 ">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

                        {!!Form::submit('Update Status',['class'=>'btn btn-info'])!!}
                        <a href="{{ route('contract_statuses.index') }}" class="btn btn-default">Close</a>



                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection