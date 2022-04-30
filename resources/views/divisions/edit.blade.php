@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Divisions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($divisions, ['route' => ['divisions.update', $divisions->id], 'method' => 'patch']) !!}

                        <!-- Divisionname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Divisionname', 'Divisionname:') !!}
    {!! Form::text('Divisionname', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Position', 'Position:') !!}
    {!! Form::text('Position', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Sub-Position', 'Sub-Position:') !!}
    {!! Form::text('Sub-Position', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Department_id', 'Department Name:') !!}
    {!! Form::select('Department_id',$empfname, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('Department_id', 'Head of Department:') !!}
    {!! Form::select('Department_id',$empname, null, ['class' => 'form-control']) !!}
</div>

<!-- Updatedby Field -->
<div class="form-group col-sm-6">
   
     <input type="hidden" name="updatedby" value=" {{ Auth::user()->name }}" class="form-control">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('divisions.index') }}" class="btn btn-default">Cancel</a>
</div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection