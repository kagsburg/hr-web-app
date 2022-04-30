@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Medicalinsurance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($medicalinsurance, ['route' => ['medicalinsurances.update', $medicalinsurance->id], 'method' => 'patch']) !!}

                       <!-- Emp Pin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_pin', 'Emp Pin:') !!}
    {!! Form::select('emp_pin',$empfname, null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Sibilings Field -->
<div class="form-group col-sm-6">
    {!! Form::label('No_of_sibilings', 'No Of Sibilings:') !!}
    {!! Form::number('No_of_sibilings', null, ['class' => 'form-control']) !!}
</div>

<!-- Spouse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Spouse', 'Spouse:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('Spouse', 0) !!}
        {!! Form::checkbox('Spouse', '1', null) !!}
    </label>
</div>


<!-- Card Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Card_status', 'Card Status:') !!}
    {!! Form::text('Card_status', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group ">
   
    
    
</div>

<!-- Updatedby Field -->
<div class="form-group">
    
    <input type="hidden" name="updatedby" value=" {{ Auth::user()->name }}" class="form-control">
 
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('medicalinsurances.index') }}" class="btn btn-default">Cancel</a>
</div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection