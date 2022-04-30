@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Insurancecompensation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($insurancecompensation, ['route' => ['insurancecompensations.update', $insurancecompensation->id], 'method' => 'patch']) !!}

                        <!-- Dateofincident Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateofIncident', 'Dateofincident:') !!}
    {!! Form::date('DateofIncident', null, ['class' => 'form-control','id'=>'DateofIncident']) !!}
</div>



<!-- Reason Of Claim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ReasonofClaim', 'Reason Of Claim:') !!}
    {!! Form::text('ReasonofClaim', null, ['class' => 'form-control']) !!}
</div>

<!-- Locationofincident Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LocationofIncident', 'Locationofincident:') !!}
    {!! Form::text('LocationofIncident', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateofcompensation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateofCompensation', 'Dateofcompensation:') !!}
    {!! Form::date('DateofCompensation', null, ['class' => 'form-control','id'=>'DateofCompensation']) !!}
</div>



<!-- Emp Pin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_pin', 'Emp Pin:') !!}
    {!! Form::select('emp_pin',$empfname, null, ['class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('createdby', 'Createdby:') !!}
    {!! Form::text('createdby', null, ['class' => 'form-control']) !!}
</div>

<!-- Updatedby Field -->
<div class="form-group ">
   
    <input type="hidden" name="updatedby" value=" {{ Auth::user()->name }}" class="form-control">
    
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('insurancecompensations.index') }}" class="btn btn-default">Cancel</a>
</div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection